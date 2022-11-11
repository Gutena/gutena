<?php
/**
 * Gutena block pattern: Text between icons
 */
return array(
	'title'      => __( 'Text between icons', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"layout":{"contentSize":"1001px","type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.05em"}}} -->
    <p class="has-text-align-center" style="font-style:normal;font-weight:600;letter-spacing:0.05em;line-height:1.3">' . esc_html__( "BLOG & UPDATES", "gutena" ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"verticalAlignment":"top","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}}} -->
    <div class="wp-block-columns are-vertically-aligned-top is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"50px"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50px"><!-- wp:image {"id":165,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/star-1.svg" alt="' . esc_html__( "star", "gutena" ) . '" class="wp-image-165"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top"} -->
    <div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"center","fontSize":"extra-large"} -->
    <h2 class="has-text-align-center has-extra-large-font-size">' . esc_html__( "Get helpful", "gutena" ) . '<br>' . esc_html__( "insight today", "gutena" ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"50px"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50px"><!-- wp:image {"id":166,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/star-2.svg" alt="' . esc_html__( "star", "gutena" ) . '" class="wp-image-166"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
