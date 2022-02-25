<?php
/**
 * Gutena block pattern: Agency portfolio page with Call to action
 */
return array(
	'title'      => __( 'Agency portfolio page with Call to action', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => function_exists('gutena_get_pattern_content')?gutena_get_pattern_content([
        'section-portfolio-image-title-link',
        'cta-bg-color-text-and-button'
        ]):''
);