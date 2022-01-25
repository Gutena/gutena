<?php 
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
		add_editor_style(
			array(
				'style.css',
				'./assets/css/theme.css'
			)
		);

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

//Include CSS and JS
function gutena_styles_and_scripts(){
	// Register theme stylesheet.
	wp_enqueue_style(
		'gutena-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_style( 'google-fonts','https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@400;600&display=swap',[],null);
	//registered theme styles
    wp_enqueue_style( 'gutena-theme-style', get_template_directory_uri() . '/assets/css/theme.css', array(), wp_get_theme()->get( 'Version' ) );
	//theme js
    wp_enqueue_script( 'gutena-script', get_theme_file_uri( '/assets/js/theme.js' ), array( 'wp-blocks', 'jquery' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'gutena_styles_and_scripts' );

//Set excerpt length
add_filter( 'excerpt_length', 'gutena_excerpt_length' );
function gutena_excerpt_length() {
    return apply_filters( 'gutena_excerpt_length', 15 );
}

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

?>