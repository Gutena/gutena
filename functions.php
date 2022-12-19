<?php 
/**
 * Gutena functions and definitions
 */

define('GUTENA_THEME_DIR',get_template_directory());
define('GUTENA_THEME_URI',esc_url(get_template_directory_uri()));
define('GUTENA_THEME_VERSION','1.1.1');
define( 'GUTENA_THEME_WEB_URI', esc_url( 'https://gutena.io/' ) );


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
				array(
					'style.css',
					'./assets/editor/css/editor.css'
				)
			);
		}else{
			add_editor_style( 
				array(
					'./assets/css/gutena.min.css',
					'./assets/editor/css/editor.min.css'
				)
			);
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		//remove core-block-patterns 
		remove_theme_support( 'core-block-patterns' );

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

/* -------------------------------------------
		Registers block patterns categories.
---------------------------------------------  */
if ( ! function_exists( 'gutena_register_block_pattern_categories' ) ){
	function gutena_register_block_pattern_categories() {

		if ( ! function_exists( 'register_block_pattern_category' ) ) {
			return;
		}

		$block_pattern_categories = array(
			'gutena-section' => array( 'label' => __( 'Sections', 'gutena' ) ),
			'gutena-hero-section' => array( 'label' => __( 'Hero Section', 'gutena' ) ),
			'gutena-team-members'=> array( 'label' => __( 'Team', 'gutena' ) ),
			'gutena-testimonials'=> array( 'label' => __( 'Testimonials', 'gutena' ) ),
			'gutena-cta'=> array( 'label' => __( 'Call to Action', 'gutena' ) ),
			'gutena-clients'=> array( 'label' => __( 'Clients', 'gutena' ) ),
			'gutena-pages'   => array( 'label' => __( 'Pages', 'gutena' ) ),
			'gutena-query'   => array( 'label' => __( 'Blog', 'gutena' ) ),
			'gutena-header' => array( 'label' => __( 'Headers', 'gutena' ) ),
			'gutena-footer' => array( 'label' => __( 'Footers', 'gutena' ) ),
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since gutena 1.0
		 *
		 */
		$block_pattern_categories = apply_filters( 'gutena_block_pattern_categories', $block_pattern_categories );
	
		foreach ( $block_pattern_categories as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'gutena_register_block_pattern_categories', 9 );

//Enable customize submenu
add_action( 'customize_register', '__return_true' );

//Include CSS and JS
function gutena_styles_and_scripts(){

	//registered theme minify styles
	wp_enqueue_style(
		'gutena-style',
		GUTENA_THEME_URI . ( ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '/style.css' : '/assets/css/gutena.min.css' ),
		array(),
		GUTENA_THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'gutena_styles_and_scripts' );

/* -------------------------------------------
		Excerpt length
---------------------------------------------  */
//Set excerpt length
add_filter( 'excerpt_length', 'gutena_excerpt_length' );
function gutena_excerpt_length() {
    return apply_filters( 'gutena_excerpt_length', 15 );
}

/** bypass the front-page.html template in case front page is set by Admin ***/
if( ! function_exists( 'gutena_select_front_page') ) {
	function gutena_select_front_page( $template ) {
		return empty( get_option( 'page_on_front', false ) ) ? $template: '' ;
	}
	add_filter( 'frontpage_template', 'gutena_select_front_page',99 );
}


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

// Block Styles.
require GUTENA_THEME_DIR . '/inc/block-styles.php';

if ( function_exists( 'is_admin' ) && is_admin() ) {
	// Theme dashboard
	require GUTENA_THEME_DIR . '/inc/dashboard/class-dashboard.php';
}

?>