<?php
/**
 * Gutena: Block Patterns
 *
 * @since Gutena 1.0
 */

/**
 * Registers block patterns.
 *
 * @since Gutena 1.0
 */
if(!function_exists( 'gutena_register_block_patterns')){
function gutena_register_block_patterns() {

	$block_patterns = array(
		'hero-section-text-button-bg',
		'hero-section-image-with-play-button',
		'hero-section-client-logos-with-heading',
		'hero-section-columns-above-client-logos',
		'hero-section-2column-banner-client-logos',
		'hero-section-2column-content-banner',
		'section-featured-boxes-heading-with-button',
		'section-text-between-icons',
		'section-icon-boxes-with-heading',
		'section-left-image-right-text-button',
		'section-2col-img-upper-heading-text-btn',
		'section-heading-2col-features-detail-img',
		'section-2col-img-quote',
		'section-image-text-and-icon-boxes',
		'section-right-image-left-text-with-button',
		'section-three-text-and-numbers',
		'section-icon-boxes-with-heading-and-button',
		'section-image-text-and-quote',
		'section-text-image-anim-and-quote',
		'section-three-address-email-phone',
		'section-right-text-left-image',
		'section-3column-feature-below-2column',
		'section-3column-service-below-cta',
		'section-portfolio-image-title-link',
		'section-right-image-left-content-icon-boxes',
		'section-left-image-right-content-icon-title',
		'cta-bg-image-text-and-button',
		'cta-bg-color-text-and-button',
		'cta-color-pattern-bg-with-icon',
		'footer-default',
		'footer-four-column',
		'footer-four-column-default',
		'header-default',
		'header-static',
		'header-with-button',
		'header-with-btn-for-dark-bg',
		'header-with-tagline',
		'header-hero-section',
		'team-members-with-name-position',
		'team-members-text-image-and-social-icons',
		'team-members-rounded-image-name-social-icons',
		'testimonials-left-image-right-text',
		'testimonials-with-image-text-and-name',
		'page-creatives',
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
		'query-grid',
		'query-image-left-content-right',
		'query-with-sidebar',
		'query-3col-img-date-title-category',
		'template-404',
		'template-single'
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
//add_action( 'init', 'gutena_register_block_patterns', 9 );
}

//Get gutena theme pattern content: input parameter is an array of patterns name
if(!function_exists( 'gutena_get_pattern_content')){
	function gutena_get_pattern_content($patterns){
		$pattern_content = '';
		if(!empty($patterns) && is_array($patterns)){
			foreach ($patterns as $pattern) {
				if ( file_exists( GUTENA_THEME_DIR .'/inc/patterns/'.$pattern.'.php' ) ) {
					$pattern = require GUTENA_THEME_DIR .'/inc/patterns/'.$pattern.'.php';
					$pattern_content .= (empty($pattern) || !is_array($pattern))?'':$pattern['content'];
				}
			}
		}
		return $pattern_content;
	}
}
