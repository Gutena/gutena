<?php
/**
 * Gutena block pattern:  Business page with hero section, columns, team members and testimonials
 */
return array(
	'title'      => __( 'Business page with hero section, columns, team members and testimonials', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => function_exists('gutena_get_pattern_content')?gutena_get_pattern_content([
        'hero-section-text-button-bg',
        'section-left-image-right-text-button',
        'hero-section-image-with-play-button',
        'section-featured-boxes-heading-with-button',
        'section-icon-boxes-with-heading',
        'team-members-with-name-position',
        'section-image-text-and-icon-boxes',
        'testimonials-left-image-right-text',
        'hero-section-client-logos-with-heading',
        'cta-bg-image-text-and-button'
        ]):''
);
