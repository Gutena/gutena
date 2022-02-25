<?php
/**
 * Gutena block pattern: Agency service page with hero image, icon boxes and testimonials
 */
return array(
	'title'      => __( 'Agency service page with hero image, icon boxes and testimonials', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => function_exists('gutena_get_pattern_content')?gutena_get_pattern_content([
        'hero-section-2column-content-banner',
        'section-icon-boxes-with-heading-and-button',
        'section-image-text-and-quote',
        'testimonials-with-image-text-and-name',
        'cta-bg-color-text-and-button'
        ]):''
);