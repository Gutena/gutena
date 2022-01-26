<?php
/**
 * Gutena Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package gutena
 * @since 0.1
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function gutena_register_block_styles() {
		// posts pagination 
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'gutena-border-box-pagination',
				'label' => esc_html__( 'Border box', 'gutena' ),
			)
		);
		//Box shadow for group
        register_block_style(
			'core/group',
			array(
				'name'  => 'gutena-box-shadow',
				'label' => esc_html__( 'Box shadow', 'gutena' ),
			)
		);
		//Zero margin for column
		register_block_style(
			'core/column',
			array(
				'name'  => 'gutena-column-no-margin',
				'label' => esc_html__( 'No margin', 'gutena' ),
			)
		);
		//Post Author style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'gutena-post-author-card',
				'label' => esc_html__( 'Author Style', 'gutena' ),
			)
		);
		//Navigation styles
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'gutena-navigation-style',
				'label' => esc_html__( 'Navigation Style', 'gutena' ),
			)
		);
		
		
	}
	add_action( 'init', 'gutena_register_block_styles' );
}
