<?php
/**
 * Gutena block pattern:  left image right text with button columns - Two columns with image and text
 */
return array(
	'title'      => __( 'Two columns with image and text', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"70px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern" style="padding-top:100px;padding-bottom:70px"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":""} -->
    <div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"align":"center","id":2374,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
    <div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/common/Intro-img-min.jpg" alt="Intro" class="wp-image-2374"/></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading -->
    <h2 id="the-future-is-changing-and-we-are-a-part-of-it">' . esc_html__( 'The future is changing and we are a part of it', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
    <div class="wp-block-group" style="padding-top:20px;padding-bottom:20px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9","fontStyle":"normal","fontWeight":"400","letterSpacing":"-0.01em"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="font-style:normal;font-weight:400;line-height:1.9;letter-spacing:-0.01em">' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>' . esc_html__( 'Gutena is also used by a wide range of businesses including corporates, architects, design &amp; development agencies, PR companies, hotels, shops, blogs, restaurants, apps and startups. By combining beautiful designs and layouts', 'gutena' ) . '.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"37px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:37px"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"16px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:16px"><a class="wp-block-button__link has-primary-background-color has-background" href="#" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1594" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
