<?php
/**
 * Gutena: Block Patterns
 *
 * @since Gutena 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Gutena 1.0
 */
function gutena_register_block_patterns() {
	$block_pattern_categories = array(
		'gutena-hero-section' => array( 'label' => __( 'Gutena Hero Section', 'gutena' ) ),
		'gutena-section' => array( 'label' => __( 'Gutena Sections', 'gutena' ) ),
		'gutena-cta'=> array( 'label' => __( 'Gutena Call to Action', 'gutena' ) ),
		'gutena-header' => array( 'label' => __( 'Gutena Headers', 'gutena' ) ),
		'gutena-footer' => array( 'label' => __( 'Gutena Footers', 'gutena' ) ),
		'gutena-team-members'=> array( 'label' => __( 'Gutena Team Members', 'gutena' ) ),
		'gutena-testimonials'=> array( 'label' => __( 'Gutena Testimonials', 'gutena' ) ),
		'gutena-clients'=> array( 'label' => __( 'Gutena Clients', 'gutena' ) ),
		'gutena-pages'   => array( 'label' => __( 'Gutena Pages', 'gutena' ) ),
		'gutena-query'   => array( 'label' => __( 'Gutena Query', 'gutena' ) )
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

	$block_patterns = array(
		'hero-section-text-button-bg',
		'hero-section-image-with-play-button',
		'hero-section-client-logos-with-heading',
		'hero-section-columns-above-client-logos',
		'hero-section-2column-banner-client-logos',
		'hero-section-2column-content-banner',
		'section-featured-boxes-heading-with-button',
		'section-icon-boxes-with-heading',
		'section-left-image-right-text-button',
		'section-image-text-and-icon-boxes',
		'section-right-image-left-text-with-button',
		'section-three-text-and-numbers',
		'section-icon-boxes-with-heading-and-button',
		'section-image-text-and-quote',
		'section-three-address-email-phone',
		'section-right-text-left-image',
		'section-3column-feature-below-2column',
		'section-portfolio-image-title-link',
		'section-right-image-left-content-icon-boxes',
		'section-left-image-right-content-icon-title',
		'cta-bg-image-text-and-button',
		'cta-bg-color-text-and-button',
		'footer-default',
		'footer-four-column',
		'header-default',
		'header-with-button',
		'header-with-tagline',
		'team-members-with-name-position',
		'team-members-text-image-and-social-icons',
		'team-members-rounded-image-name-social-icons',
		'testimonials-left-image-right-text',
		'testimonials-with-image-text-and-name',
		'page-business',
		'page-company',
		'page-services',
		'page-contact',
		'page-agency',
		'page-agency-about',
		'page-agency-services',
		'page-agency-portfolio',
		'page-agency-portfolio-details',
		'query-default',
		'query-image-left-content-right',
		'query-with-sidebar',
		'404'
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since gutena 1.0
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'gutena_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = GUTENA_THEME_DIR . '/inc/patterns/' . $block_pattern . '.php';

		register_block_pattern(
			'gutena/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'gutena_register_block_patterns', 9 );
