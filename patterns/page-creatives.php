<?php
/**
 * Title: Creatives page with hero section, columns and recent posts.
 * Slug: gutena/page-creatives
 * Categories: gutena-pages
 * Block Types: core/group, core/cover
 * postTypes: page
 * Keywords: page
 */
?>

<?php 
//include patterns
foreach ( array(
    'header-hero-bg-img-2-col',
    'sec-3col-service-below-cta',
    'sec-2col-text-image-anim-and-quote',
    'sec-2col-img-up-heading-text-btn',
    'sec-heading-2col-features-detail-img',
    'testimonial-2col-img-icon-text',
    'cta-bg-color-img-row-icon-heading-btn',
    'query-1x3-img-date-title-category-tag',
    'footer-4col-dark'
    ) as $pattern) {
    if ( file_exists( GUTENA_THEME_DIR .'/patterns/'.$pattern.'.php' ) ) {
        require GUTENA_THEME_DIR .'/patterns/'.$pattern.'.php';
    }
}
?>