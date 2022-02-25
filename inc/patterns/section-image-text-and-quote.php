<?php
/**
 * Gutena block pattern:  Two columns with image, text and quote
 */
return array(
	'title'      => __( 'Two columns with image, text and quote', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"0vh"},"blockGap":"60px"}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:100px;padding-bottom:0vh"><!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":1} -->
    <h1 id="start-your-online-business-today">' . esc_html__( 'Pride ourselves on great service', 'gutena' ) . '</h1>
    <!-- /wp:heading -->
    
    <!-- wp:spacer {"height":"23px"} -->
    <div style="height:23px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9","letterSpacing":"-0.01em"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9;letter-spacing:-0.01em">' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating. On top of a great tool is even better customer support.', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"51px"} -->
    <div style="height:51px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"100px","style":{"spacing":{"padding":{"right":"15px"}}}} -->
    <div class="wp-block-column" style="padding-right:15px;flex-basis:100px"><!-- wp:image {"id":2398,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
    <figure class="wp-block-image size-full is-style-rounded"><img src="' . GUTENA_THEME_URI . '/assets/img/common/quote-min-1.jpg" alt="" class="wp-image-2398"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"50%","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:50%"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h5 id="the-big-oxmox-advised-her-not-to-do-so" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'The Big Oxmox advised her not to do so.', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
    <p class="has-secondary-color has-text-color has-small-font-size">Sofia G. Fox</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":2397,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/common/service-intro-img-min-1.png" alt="" class="wp-image-2397"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
