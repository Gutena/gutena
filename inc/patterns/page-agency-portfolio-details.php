<?php
/**
 * Gutena block pattern: Portfolio details page with heading, image, description and button
 */
return array(
	'title'      => __( 'Portfolio details page with heading, image, description and button', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"color":{"background":"#fff3f0"}},"layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull has-background" style="background-color:#fff3f0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"100px"}}},"className":"gutena-pattern gutena-h202020-b555555"} -->
    <div class="wp-block-group alignwide gutena-pattern gutena-h202020-b555555" style="padding-top:50px;padding-bottom:100px"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"orange","fontSize":"small"} -->
    <h6 class="has-text-align-center has-orange-color has-text-color has-small-font-size" id="branding" style="font-style:normal;font-weight:700;line-height:1.6;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'BRANDING', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"10px","bottom":"50px"}}}} -->
    <h1 class="has-text-align-center" id="beyond-packaging" style="margin-top:10px;margin-bottom:50px">' . esc_html__( 'Beyond Packaging', 'gutena' ) . '</h1>
    <!-- /wp:heading -->
    
    <!-- wp:image {"id":215,"width":1118,"height":744,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large is-resized"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-2220x1040.png" alt="' . esc_html__( 'Beyond Packaging', 'gutena' ) . '" class="wp-image-215" width="1118" height="744"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"52px","bottom":"20px"}}}} -->
    <h3 id="description" style="margin-top:52px;margin-bottom:20px">' . esc_html__( 'Description', 'gutena' ) . '</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p>' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating. On top of a great tool is even better customer support. Get started swiftly &amp; easily by importing a demo of your choice in a single click. Over 30 quality professionally designed pre-built website concepts to choose from. Build your website using a fully visual interface, using our revolutionary page builder. Guten WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating. On top of a great tool is even better customer support. Get started swiftly &amp; easily by importing a demo of your choice in a single click', 'gutena' ) . '.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"orange","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-orange-background-color has-background" href="#" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1140" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="' . esc_html__( 'Get Started', 'gutena' ) . '"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
