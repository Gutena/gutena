<?php
/**
 * Gutena block pattern:  Creatives page with hero section, columns, team members and testimonials
 */
return array(
	'title'      => __( 'Creatives page with hero section, columns and recent posts', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => function_exists('gutena_get_pattern_content')?gutena_get_pattern_content([
        'header-hero-section',
        'section-3column-service-below-cta',
        'section-text-image-anim-and-quote',
        'section-2col-img-upper-heading-text-btn',
        'section-heading-2col-features-detail-img',
        'section-2col-img-quote',
        'cta-color-pattern-bg-with-icon',
        'query-3col-img-date-title-category',
        'footer-four-column-default'
        ]):''
);
