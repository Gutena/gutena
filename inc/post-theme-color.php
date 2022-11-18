<?php
/**
 * Gutena: post theme color support
 * Description: It will enable admin to add background color for post header
 * 
 * @since Gutena 1.0
 */

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