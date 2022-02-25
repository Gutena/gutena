<?php
/**
 * Gutena block pattern:  Service page with columns, icon boxes and testimonials
 */
return array(
	'title'      => __( 'Service page with columns, icon boxes and testimonials', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => function_exists('gutena_get_pattern_content')?gutena_get_pattern_content([
        'section-image-text-and-quote',
        'section-icon-boxes-with-heading-and-button',
        'testimonials-with-image-text-and-name',
        'cta-bg-image-text-and-button'
        ]):''
);
