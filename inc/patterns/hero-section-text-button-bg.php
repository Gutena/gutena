<?php
/**
 * Gutena block pattern: Hero Section with text, button and background
 */
return array(
	'title'      => __( 'Hero Section with text, button and BG', 'gutena' ),
	'categories' => array( 'gutena-hero-section' ),
	'content'    => '<!-- wp:group {"align":"full","className":"gutena-pattern","layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull gutena-pattern"><!-- wp:cover {"url":"' . GUTENA_THEME_URI . '/assets/img/common/Hero-img.jpg","id":2403,"dimRatio":62,"customGradient":"linear-gradient(-180deg,NaNdeg 0%,NaNdeg 20%,NaNdeg 40%,NaNdeg 60%,rgb(0,0,0) 80%,rgb(0,0,0) 100%)"} -->
    <div class="wp-block-cover"><span aria-hidden="true" class="has-background-dim-60 wp-block-cover__gradient-background has-background-dim has-background-gradient" style="background:linear-gradient(-180deg,NaNdeg 0%,NaNdeg 20%,NaNdeg 40%,NaNdeg 60%,rgb(0,0,0) 80%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-2403" alt="Hero" src="' . GUTENA_THEME_URI . '/assets/img/common/Hero-img.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"100px"}}},"layout":{"inherit":false,"wideSize":"735px"}} -->
    <div class="wp-block-group" style="padding-top:100px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"700"}},"textColor":"white","fontSize":"huge"} -->
    <h2 class="has-text-align-center has-white-color has-text-color has-huge-font-size" id="the-modern-wayto-build-for-web" style="font-style:normal;font-weight:700;line-height:1.2;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Start your online business today', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"50px"}}}} -->
    <div class="wp-block-group" style="padding-top:30px;padding-bottom:50px"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"textColor":"white","fontSize":"normal"} -->
    <p class="has-text-align-center has-white-color has-text-color has-normal-font-size" style="line-height:1.9">' . esc_html__( 'Ready made layouts for desktop and mobile which helps designers', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"21px","right":"21px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" href="#our-services" style="border-radius:0px;padding-top:15px;padding-right:21px;padding-bottom:15px;padding-left:21px">' . esc_html__( 'Explore Our Services', 'gutena' ) . '    <img class="wp-image-1594" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"100px"}}}} -->
    <div class="wp-block-group" style="padding-top:100px"><!-- wp:image {"align":"center","id":1596,"sizeSlug":"large","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-down-big.svg" alt="arrow-down" class="wp-image-1596"/></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","lineHeight":"2"}},"textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color" style="font-size:12px;line-height:2">Scroll Down</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->',
);
