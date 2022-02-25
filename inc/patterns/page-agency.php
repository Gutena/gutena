<?php
/**
 * Gutena block pattern: Agency page with hero section, columns, team members and testimonials
 */
return array(
	'title'      => __( 'Agency page with clients logos, icon boxes, case studies and testimonials', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => function_exists('gutena_get_pattern_content')?gutena_get_pattern_content([
        'hero-section-columns-above-client-logos',
        'section-3column-feature-below-2column',
        'section-right-text-left-image',
        'section-three-text-and-numbers',
        'section-icon-boxes-with-heading-and-button',
        'section-portfolio-image-title-link',
        'testimonials-with-image-text-and-name',
        'cta-bg-color-text-and-button'
        ]):''
);