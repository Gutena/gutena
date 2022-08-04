<?php 
/**
 * Gutena functions and definitions
 */

define('GUTENA_THEME_DIR',get_template_directory());
define('GUTENA_THEME_URI',esc_url(get_template_directory_uri()));
define('GUTENA_THEME_VERSION','1.1.1');
define( 'GUTENA_THEME_WEB_URI', esc_url( 'https://gutena.io/' ) );

/* -------------------------------------------
			Check Webfonts Api
---------------------------------------------  */
if ( ! function_exists( 'gutena_is_webfont_api_enable' ) ) {
	function gutena_is_webfont_api_enable() {
		global $wp_version;
		return ( function_exists( 'wp_register_webfonts' ) || ( ! empty( $wp_version ) && version_compare( $wp_version, '6.0', '>=' ) ) );
	}
}

/* -------------------------------------------
			Theme Setup
---------------------------------------------  */
add_action( 'after_setup_theme', 'gutena_setup' );
if ( ! function_exists( 'gutena_setup' ) ){
	function gutena_setup() {
       
        // Support for adding blocks inside nav menus
        add_theme_support( 'block-nav-menus' );

		//align wide 
		add_theme_support( 'align-wide' );
        // Register two nav menus
		register_nav_menus(
			array(
				'main_nav' => __( 'Main Menu', 'gutena' ),
				'footer_nav' => __( 'Footer Menu', 'gutena' )
			)
		);

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );

        // Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		if(defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG){
			add_editor_style(
				( gutena_is_webfont_api_enable() ) ? array(
					'style.css',
					'./assets/css/theme.css'
				) : array(
					'https://fonts.googleapis.com/css2?family=Inter:wght@400..800&family=Manrope:wght@400..800&family=Outfit:wght@400..800&display=swap',
					'style.css',
					'./assets/css/theme.css'
				)
			);
		}else{
			add_editor_style( 
				( gutena_is_webfont_api_enable() ) ? array(
					'./assets/css/gutena.min.css'
				) : array(
					'https://fonts.googleapis.com/css2?family=Inter:wght@400..800&family=Manrope:wght@400..800&family=Outfit:wght@400..800&display=swap',
					'./assets/css/gutena.min.css'
				)
			);
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

        // Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 90,
				'width'       => 90,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
}

if ( ! gutena_is_webfont_api_enable() && ! function_exists( 'gutena_preload_fonts' ) ) {
	//Preload fonts
	function gutena_preload_fonts() {
		echo '
		<link rel="preload" as="style" type="text/css"  href="https://fonts.googleapis.com/css2?family=Inter:wght@400..800&family=Manrope:wght@400..800&family=Outfit:wght@400..800&display=swap" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400..800&family=Manrope:wght@400..800&family=Outfit:wght@400..800&display=swap" media="print" onload="this.media=\'all\'" crossorigin="anonymous">
		';
	}
	add_action( 'wp_head' , 'gutena_preload_fonts' );
}


//Enable customize submenu
add_action( 'customize_register', '__return_true' );

//Include CSS and JS
function gutena_styles_and_scripts(){
	if(defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG){
		// Register theme stylesheet.
		wp_enqueue_style(
			'gutena-style',
			GUTENA_THEME_URI . '/style.css',
			array(),
			GUTENA_THEME_VERSION
		);
		//registered theme styles
		wp_enqueue_style( 'gutena-theme-style', GUTENA_THEME_URI.'/assets/css/theme.css', array(), GUTENA_THEME_VERSION );
		
	}else{
		//registered theme minify styles
		wp_enqueue_style(
			'gutena-style',
			GUTENA_THEME_URI . '/assets/css/gutena.min.css',
			array(),
			GUTENA_THEME_VERSION
		);
		
	}
}
add_action( 'wp_enqueue_scripts', 'gutena_styles_and_scripts' );

//Set excerpt length
add_filter( 'excerpt_length', 'gutena_excerpt_length' );
function gutena_excerpt_length() {
    return apply_filters( 'gutena_excerpt_length', empty( $GLOBALS['gutena_latest_post_theme_color'] ) ? 15: 85 );
}

//Get gutena theme pattern content: input parameter is an array of patterns name
if(!function_exists( 'gutena_get_pattern_content')){
	function gutena_get_pattern_content($patterns){
		$pattern_content = '';
		if(!empty($patterns) && is_array($patterns)){
			foreach ($patterns as $pattern) {
				$pattern = require GUTENA_THEME_DIR .'/inc/patterns/'.$pattern.'.php';
				$pattern_content .= (empty($pattern) || !is_array($pattern))?'':$pattern['content'];
			}
		}
		return $pattern_content;
	}
}

/** bypass the front-page.html template in case front page is set by Admin ***/
if( ! function_exists( 'gutena_select_front_page') ) {
	function gutena_select_front_page( $template ) {
		return empty( get_option( 'page_on_front', false ) ) ? $template: '' ;
	}
	add_filter( 'frontpage_template', 'gutena_select_front_page',99 );
}

/* -------------------------------------------
			Post Theme color : START
---------------------------------------------  */
//Filter to enable or disable post theme color support
if ( apply_filters( 'gutena_post_theme_color_support', true ) ) {

	//Register custom meta tag field for blog posts header hero background-color
	if( ! function_exists( 'gutena_register_post_meta_theme_color' ) ) {
		function gutena_register_post_meta_theme_color(){
			register_post_meta( 
				'post', 
				'gutena_post_theme_color',
				array(
					'show_in_rest' => true,
					'single' => true,
					'type' => 'string',
					'default' => apply_filters( 'gutena_post_theme_color_default' , '' ),
					'sanitize_callback' => 'sanitize_text_field',
					'auth_callback' => function() {
						return current_user_can( 'edit_posts' );
					},
				) 
			);
		}

		add_action( 'init', 'gutena_register_post_meta_theme_color' );
	}

	//Block editor script for register meta box settings for gutena_post_theme_color
	if( ! function_exists( 'add_settings_in_editor' ) ) {
		function add_settings_in_editor( $hook_suffix ){
			//check current page
			if ( 'post.php' != $hook_suffix ) {
				return;
			}

			//enqueue script
			wp_enqueue_script( 
				'gutena-block-editor', 
				GUTENA_THEME_URI.'/inc/block_editor/build/index.js', 
				array( 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n', 'wp-data', 'wp-core-data', 'wp-plugins', 'wp-edit-post' ),
				GUTENA_THEME_VERSION 
			);
		
			//Add json data to the enqueue script
			wp_localize_script( 
				'gutena-block-editor' , 
				'gutena_block_editor',
				array(
					'isPostThemeColors' => '1',
					'postThemeColors' => array(
						array('name' =>'Piggy Pink', 'color'=>'#FAE1E3'),
						array('name' =>'Azureish White', 'color'=>'#DAF0F4'),
						array('name' =>'Pale Lavender', 'color'=>'#DFD9F2'),
						array('name' =>'Nyanza', 'color'=>'#E9FAE1'),
						array('name' =>'Eggshell', 'color'=>'#F4EEDA'),
					),
					'postThemeGradients' => array(
						array(
							'name' =>'Ruber',
							'gradient'=>'linear-gradient(to bottom, #261B99 0%, #3025A1 100%)',
							'slug'=>'ruber-gradient'
						),
						array(
							'name' =>'Green Munsell',
							'gradient'=>'linear-gradient(to bottom, #006565 0%, #007878 100%)',
							'slug'=>'green-munsell-gradient'
						),
						array(
							'name' =>'Madder Lake',
							'gradient'=>'linear-gradient(to bottom, #DC4A4A 0%,#CE3E3E 100%)',
							'slug'=>'madder-lake-gradient'
						),
						array(
							'name' =>'Pink',
							'gradient'=>'linear-gradient(to bottom, #E73B95 0%, #994CE7 100%)',
							'slug'=>'pink-gradient'
						),
					),
				)
			);
		}

		add_action( 'admin_enqueue_scripts', 'add_settings_in_editor' );
	}

	//Add CSS related to post theme color
	if( ! function_exists( 'add_post_theme_color_styles' ) ) {
		function add_post_theme_color_styles() {
			global $post;

			if ( ! empty( $post ) && ! empty( $post->ID ) && 'post' === $post->post_type && function_exists( 'get_post_meta' ) && function_exists( 'wp_add_inline_style' ) && function_exists( 'is_home' ) && function_exists( 'is_single' ) ) {
				$gutena_post_theme_color = '';
				if ( is_single() ) {
					$gutena_post_theme_color = get_post_meta( $post->ID, 'gutena_post_theme_color', true );
					if ( ! empty( $gutena_post_theme_color ) ) {
	
						$gutena_post_theme_color = '
						body {
							--wp--custom--post-theme-color:'.esc_html( $gutena_post_theme_color ).';
						}
						.gutena-post-theme-color{ 
							background:var(--wp--custom--post-theme-color);
						}
						.gutena-post-hero-section{
							position:relative;
							padding-left:var(--wp--custom--spacing--small);
							padding-right:var(--wp--custom--spacing--small);
						}
						.gutena-post-theme-color .gutena-post-feature-image-container::before
						{
							background: var(--wp--preset--color--background);
							content: "";
							position: absolute;
							left: 0;
							right: 0;
							bottom: -20px;
							height:50%;
							width:100%;
						}
						.gutena-post-theme-color figure.wp-block-post-featured-image img{
							position:relative;
							border-radius: 10px;
						}';
					}
				} elseif ( is_home() && ! empty( $GLOBALS['gutena_latest_post_theme_color'] ) ) {
					$gutena_post_theme_color = $GLOBALS['gutena_latest_post_theme_color'];
					if ( ! empty( $gutena_post_theme_color ) ) {
						$gutena_post_theme_color = '
						body.blog:not(.paged) {
							--wp--custom--post-theme-color:'.esc_html( $gutena_post_theme_color ).';
						}
						.gutena-post-theme-color, 
						.wp-block-post:first-child{ 
							background:var(--wp--custom--post-theme-color);
						}
						.wp-block-post:first-child{ 
							padding-bottom:80px;
						}
						figure.wp-block-post-featured-image img{
							border-radius: 10px;
						}
						';

						
					}
				}

				if ( ! empty( $gutena_post_theme_color ) ) {
					wp_add_inline_style( 'gutena-style', $gutena_post_theme_color );
				}
				
			}
				
		}

		add_action( 'wp_enqueue_scripts', 'add_post_theme_color_styles' );
	}

	//check latest post theme color meta for blog page style
	if( ! function_exists( 'check_latest_post_theme_color' ) ) {
		function check_latest_post_theme_color() {

			//check if home page and variable is already defined
			if ( function_exists( 'wp_get_recent_posts' ) && function_exists( 'is_home' ) && is_home() && ! isset( $GLOBALS['gutena_latest_post_theme_color'] ) ) {
				$GLOBALS['gutena_latest_post_theme_color'] = '';
				//get latest post
				$recent_posts = wp_get_recent_posts(array(
					'numberposts' => 1, // Number of recent posts thumbnails to display
					'post_status' => 'publish', // Show only the published posts
					'post_type' => 'post'
				));
				//get latest post theme meta color
				if ( ! empty( $recent_posts ) && ! empty( $recent_posts[0]['ID'] ) ) { 
					$GLOBALS['gutena_latest_post_theme_color'] = get_post_meta( $recent_posts[0]['ID'], 'gutena_post_theme_color', true );
				}
			}
		}
		add_action( 'wp', 'check_latest_post_theme_color' );
	}

}
/* -------------------------------------------
			Post Theme color : END
---------------------------------------------  */

//Check admin capabilities
if ( ! function_exists( 'is_gutena_admin' ) ) {
	function is_gutena_admin(){
		if ( ! function_exists( 'wp_get_current_user' )  && file_exists( ABSPATH . "wp-includes/pluggable.php" ) ) { 
			require_once( ABSPATH . "wp-includes/pluggable.php" ); 
		}
		if ( ! function_exists( 'current_user_can' ) && file_exists( ABSPATH . "wp-includes/capabilities.php" ) ) { 
			require_once( ABSPATH . "wp-includes/capabilities.php" ); 
		}
		return ( function_exists( 'current_user_can' ) && current_user_can( 'manage_options' ) && current_user_can( 'install_plugins' ) );
	}
}

// Block Patterns.
require GUTENA_THEME_DIR . '/inc/block-patterns.php';

// Block Styles.
require GUTENA_THEME_DIR . '/inc/block-styles.php';

if ( function_exists( 'is_admin' ) && is_admin() ) {
	// Theme dashboard
	require GUTENA_THEME_DIR . '/inc/dashboard/class-dashboard.php';
}

?>