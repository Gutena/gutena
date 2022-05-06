<?php 
/**
 * Gutena functions and definitions
 */

define('GUTENA_THEME_DIR',get_template_directory());
define('GUTENA_THEME_URI',esc_url(get_template_directory_uri()));
define('GUTENA_THEME_VERSION','1.0.5');

/* -------------------------------------------
			Check Webfonts Api
---------------------------------------------  */
if ( ! function_exists( 'gutena_is_webfont_api_enable' ) ) {
	function gutena_is_webfont_api_enable() {
		return function_exists( 'wp_register_webfonts' );
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
    return apply_filters( 'gutena_excerpt_length', 15 );
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

// Block Patterns.
require GUTENA_THEME_DIR . '/inc/block-patterns.php';

// Block Styles.
require GUTENA_THEME_DIR . '/inc/block-styles.php';

?>