<?php
/**
 * Gutena block pattern:  Two columns with text, button and image right aligned
 */
return array(
	'title'      => __( 'Two columns with text, button and image right aligned', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"},"blockGap":"70px"}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:100px;padding-bottom:100px"><!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1} -->
    <h1 id="start-your-online-business-today">' . esc_html__( 'Start your online business today', 'gutena' ) . '</h1>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"17px","bottom":"35px"}}}} -->
    <div class="wp-block-group" style="padding-top:17px;padding-bottom:35px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9","letterSpacing":"-0.01em"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9;letter-spacing:-0.01em">' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating. On top of a great tool is even better customer support', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
    <div class="wp-block-buttons" ><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1140" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":2386,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/common/Company-intro-img-min.jpg" alt="" class="wp-image-2386"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
