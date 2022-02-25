<?php
/**
 * Gutena block pattern: Company page with columns, team members, icon boxes and Client logos
 */
return array(
	'title'      => __( 'Company page with columns, team members, icon boxes and Client logos', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => function_exists('gutena_get_pattern_content')?gutena_get_pattern_content([
        'section-right-image-left-text-with-button',
        'section-right-text-left-image',
        'section-three-text-and-numbers',
        'section-icon-boxes-with-heading-and-button',
        'team-members-text-image-and-social-icons',
        'hero-section-client-logos-with-heading',
        'cta-bg-image-text-and-button'
        ]):''
);
