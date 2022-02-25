<?php
/**
 * Gutena block pattern:  Two columns with image, text and icon boxes
 */
return array(
	'title'      => __( 'Two columns with image, text and icon boxes', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"color":{"background":"#ebf3ff"},"spacing":{"padding":{"top":"100px","bottom":"85px","right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background-color:#ebf3ff;padding-top:100px;padding-right:20px;padding-bottom:85px;padding-left:20px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"55px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"55%"} -->
    <div class="wp-block-column" style="flex-basis:55%"><!-- wp:image {"align":"center","id":2381,"sizeSlug":"large","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/common/man-working-min.jpg" alt="man-working" class="wp-image-2381"/></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:heading -->
    <h2 id="the-next-big-thing-in-technology-is-here">' . esc_html__( 'The next big thing in technology is here', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"23px","bottom":"34px"}}}} -->
    <div class="wp-block-group" style="padding-top:23px;padding-bottom:34px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9","letterSpacing":"-0.01em"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9;letter-spacing:-0.01em">' . esc_html__( 'The best part of being a part of this community is about working together', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"50px","style":{"spacing":{"padding":{"top":"15px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:15px;flex-basis:50px"><!-- wp:image {"id":1605,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/clock.svg" alt="Guten UI Kit" class="wp-image-1605"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:heading {"level":6} -->
    <h6 id="aesthetic-design">' . esc_html__( 'Aesthetic Design', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a pixel perfect theme, that is tailor made for startups and businesses', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"50px","style":{"spacing":{"padding":{"top":"15px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:15px;flex-basis:50px"><!-- wp:image {"id":1604,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/signal-tower.svg" alt="Guten UI Kit" class="wp-image-1604"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:heading {"level":6} -->
    <h6 id="aesthetic-design">' . esc_html__( 'CX Discoveries', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a popular, creative WordPress theme used by many customers across the world', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
