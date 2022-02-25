<?php
/**
 * Gutena block pattern: Agency about page with hero image, clients logos, descriptions and team members
 */
return array(
	'title'      => __( 'Agency about page with hero image, clients logos, descriptions and team members', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => function_exists('gutena_get_pattern_content')?gutena_get_pattern_content([
        'hero-section-2column-banner-client-logos',
        'section-right-image-left-content-icon-boxes',
        'section-left-image-right-content-icon-title',
        'team-members-rounded-image-name-social-icons',
        'cta-bg-color-text-and-button'
        ]):''
);