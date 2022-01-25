<?php
/**
 * Gutena block pattern:  Business page with hero section, columns, team members and testimonials
 */
return array(
	'title'      => __( 'Business page with hero section, columns, team members and testimonials', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => '
	<!-- wp:group {"align":"full","className":"gutena-pattern","layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull gutena-pattern"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/common/Hero-img.jpg","id":2403,"dimRatio":62,"customGradient":"linear-gradient(-180deg,NaNdeg 0%,NaNdeg 20%,NaNdeg 40%,NaNdeg 60%,rgb(0,0,0) 80%,rgb(0,0,0) 100%)"} -->
    <div class="wp-block-cover"><span aria-hidden="true" class="has-background-dim-60 wp-block-cover__gradient-background has-background-dim has-background-gradient" style="background:linear-gradient(-180deg,NaNdeg 0%,NaNdeg 20%,NaNdeg 40%,NaNdeg 60%,rgb(0,0,0) 80%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-2403" alt="Hero" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/Hero-img.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"100px"}}},"layout":{"inherit":false,"wideSize":"735px"}} -->
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
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" href="#our-services" style="border-radius:0px;padding-top:15px;padding-right:21px;padding-bottom:15px;padding-left:21px">' . esc_html__( 'Explore Our Services', 'gutena' ) . '    <img class="wp-image-1594" style="width: 15px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"100px"}}}} -->
    <div class="wp-block-group" style="padding-top:100px"><!-- wp:image {"align":"center","id":1596,"sizeSlug":"large","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-down-big.svg" alt="arrow-down" class="wp-image-1596"/></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","lineHeight":"2"}},"textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color" style="font-size:12px;line-height:2">Scroll Down</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->
   
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"70px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern" style="padding-top:100px;padding-bottom:70px"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":""} -->
    <div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"align":"center","id":2374,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
    <div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/Intro-img-min.jpg" alt="Intro" class="wp-image-2374"/></figure></div>
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
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:16px"><a class="wp-block-button__link has-primary-background-color has-background" href="#" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1594" style="width: 15px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"color":{"background":"#ebf3ff"},"spacing":{"padding":{"top":"90px","bottom":"100px","right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background-color:#ebf3ff;padding-top:90px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"inherit":false,"wideSize":"730px"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px"}}}} -->
    <div class="wp-block-group" style="padding-right:20px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h2 class="has-text-align-center" id="a-i-for-your-business" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'A.I. for your business', 'gutena' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"37px","right":"20px","left":"20px"}}}} -->
    <div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:37px;padding-left:20px"><!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">' . esc_html__( 'Best part of being a part of this community is about working together', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/common/video-img-min.jpg","id":2375,"dimRatio":30,"isDark":false,"align":"wide"} -->
    <div class="wp-block-cover alignwide is-light"><span aria-hidden="true" class="has-background-dim-30 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2375" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/video-img-min.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":1597,"sizeSlug":"large","linkDestination":"custom","className":"no-hover-color"} -->
    <div class="wp-block-image no-hover-color"><figure class="aligncenter size-large"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/play-button.svg" alt="play-button" class="wp-image-1597"/></a></figure></div>
    <!-- /wp:image --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"70px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide gutena-pattern" style="padding-top:100px;padding-bottom:70px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"30px"}}}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:30px"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.9"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary","fontSize":"extra-small"} -->
	<h6 class="has-primary-color has-text-color has-extra-small-font-size" id="our-services" style="font-style:normal;font-weight:700;line-height:1.9;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'OUR SERVICES', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
	<div class="wp-block-column" style="flex-basis:45%"><!-- wp:heading -->
	<h2 id="scale-your-business-using-our-technology">' . esc_html__( 'Scale your business using our technology', 'gutena' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top","width":"55%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:55%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"20px"}}}} -->
	<div class="wp-block-buttons" style="margin-top:20px"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"16px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
	<div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:16px"><a class="wp-block-button__link has-primary-background-color has-background" href="#" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1594" style="width: 15px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1598,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/aspect-ratio.svg" alt="Digital Marketing" class="wp-image-1598"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Digital Marketing', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1599,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/subway.svg" alt="Ecommerce" class="wp-image-1599"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Ecommerce', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1600,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/open-book.svg" alt="Hosting Service" class="wp-image-1600"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Hosting Service', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1601,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/node-link.svg" alt="PPC Advertising" class="wp-image-1601"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'PPC Advertising', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1602,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/user.svg" alt="Tax Planning" class="wp-image-1602"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Tax Planning', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1603,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/desktop-play-button.svg" alt="Online Investment" class="wp-image-1603"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Online Investment', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(135deg,rgb(90,133,242) 0%,rgb(61,57,229) 100%)"},"spacing":{"padding":{"top":"100px","bottom":"45px","right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background:linear-gradient(135deg,rgb(90,133,242) 0%,rgb(61,57,229) 100%);padding-top:100px;padding-right:20px;padding-bottom:45px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"53px","right":"20px","left":"20px"}}},"textColor":"white"} -->
    <h2 class="has-text-align-center has-white-color has-text-color" id="how-our-a-i-works" style="margin-right:20px;margin-bottom:53px;margin-left:20px">' . esc_html__( 'How our A.I works', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"50px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"32%"} -->
    <div class="wp-block-column" style="flex-basis:32%"><!-- wp:image {"align":"center","id":1604,"width":45,"height":45,"sizeSlug":"large","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/signal-tower.svg" alt="Guten UI Kit" class="wp-image-1604" width="45" height="45"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"24px","bottom":"12px"}}},"textColor":"white"} -->
    <h6 class="has-text-align-center has-white-color has-text-color" id="1-guten-ui-kit" style="margin-top:24px;margin-bottom:12px">1. ' . esc_html__( 'Guten UI Kit', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color">' . esc_html__( 'Gutena is also used by a wide range of businesses including corporates, architects, design &amp; development agencies and PR companies', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"32%"} -->
    <div class="wp-block-column" style="flex-basis:32%"><!-- wp:image {"align":"center","id":1605,"sizeSlug":"large","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/clock.svg" alt="Guten UI Kit" class="wp-image-1605"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"24px","bottom":"12px"}}},"textColor":"white"} -->
    <h6 class="has-text-align-center has-white-color has-text-color" id="1-guten-ui-kit" style="margin-top:24px;margin-bottom:12px">2. ' . esc_html__( 'Guten UI Kit', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color">' . esc_html__( 'Gutena is also used by a wide range of businesses including corporates, architects, design &amp; development agencies and PR companies', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"32%"} -->
    <div class="wp-block-column" style="flex-basis:32%"><!-- wp:image {"align":"center","id":1606,"width":39,"height":48,"sizeSlug":"large","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/shield.svg" alt="Guten UI Kit" class="wp-image-1606" width="39" height="48"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"24px","bottom":"12px"}}},"textColor":"white"} -->
    <h6 class="has-text-align-center has-white-color has-text-color" id="1-guten-ui-kit" style="margin-top:24px;margin-bottom:12px">3. ' . esc_html__( 'Guten UI Kit', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color">' . esc_html__( 'Gutena is also used by a wide range of businesses including corporates, architects, design &amp; development agencies and PR companies', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"55px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern" style="padding-top:100px;padding-bottom:55px"><!-- wp:group {"align":"wide"} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.9"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <h6 class="has-primary-color has-text-color has-extra-small-font-size" id="our-team" style="font-style:normal;font-weight:700;line-height:1.9;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'OUR TEAM', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h2 id="scale-your-business-using-our-technology" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Foundational pillars of our organization', 'gutena' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"19%","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-vertically-aligned-top is-style-gutena-column-no-margin" style="flex-basis:19%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"41%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:41%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9","letterSpacing":"-0.01em"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9;letter-spacing:-0.01em">' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"16px"}}},"layout":{"inherit":false}} -->
    <div class="wp-block-group alignwide" style="padding-top:16px"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":2377,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/team-member-1-min.jpg" alt="" class="wp-image-2377"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}}}} -->
    <h6 class="has-text-align-center" id="justin-hammer" style="margin-top:20px;margin-bottom:0px">' . esc_html__( 'Justin Hammer', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Founder & CEO', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":2378,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/team-member-2-min.jpg" alt="" class="wp-image-2378"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}}}} -->
    <h6 class="has-text-align-center" id="justin-hammer" style="margin-top:20px;margin-bottom:0px">' . esc_html__( 'Clark Roberts', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Chief Finance Officer', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":2379,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/team-member-3-min.jpg" alt="" class="wp-image-2379"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}}}} -->
    <h6 class="has-text-align-center" id="justin-hammer" style="margin-top:20px;margin-bottom:0px">' . esc_html__( 'Ashley Hardy', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'VP Sales and Marketing', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":2380,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/team-member-4-min.jpg" alt="" class="wp-image-2380"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}}}} -->
    <h6 class="has-text-align-center" id="justin-hammer" style="margin-top:20px;margin-bottom:0px">' . esc_html__( 'Dennis Norris', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Chief Marketing Officer', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"color":{"background":"#ebf3ff"},"spacing":{"padding":{"top":"100px","bottom":"70px","right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background-color:#ebf3ff;padding-top:100px;padding-right:20px;padding-bottom:70px;padding-left:20px"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"55%"} -->
    <div class="wp-block-column" style="flex-basis:55%"><!-- wp:image {"align":"center","id":2381,"sizeSlug":"large","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/man-working-min.jpg" alt="man-working" class="wp-image-2381"/></figure></div>
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
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/clock.svg" alt="Guten UI Kit" class="wp-image-1605"/></figure>
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
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"50px","style":{"spacing":{"padding":{"top":"15px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:15px;flex-basis:50px"><!-- wp:image {"id":1604,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/signal-tower.svg" alt="Guten UI Kit" class="wp-image-1604"/></figure>
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
    <!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"90px","bottom":"70px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern" style="padding-top:90px;padding-bottom:70px"><!-- wp:group {"align":"wide"} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"40px"}}}} -->
    <h2 class="has-text-align-center" id="client-saying" style="margin-bottom:40px">' . esc_html__( 'Client saying', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"17px","right":"17px","bottom":"17px","left":"17px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
    <div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:17px;padding-right:17px;padding-bottom:17px;padding-left:17px"><!-- wp:media-text {"mediaId":2383,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/img/common/testimonial-headshot-1-min.jpg","mediaType":"image","mediaWidth":38} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:38% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/testimonial-headshot-1-min.jpg" alt="" class="wp-image-2383 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-group" style="padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"placeholder":"Content…","textColor":"secondary"} -->
    <p class="has-secondary-color has-text-color">"' . esc_html__( 'She packed her seven versalia, put her initial into the belt and made herself', 'gutena' ) . '"</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"30px","right":"0px","bottom":"10px","left":"0px"}}}} -->
    <h6 id="sofia-g-paul" style="margin-top:30px;margin-right:0px;margin-bottom:10px;margin-left:0px">' . esc_html__( 'Sofia G. Paul', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.1"}},"textColor":"primary"} -->
    <p class="has-primary-color has-text-color" style="font-size:14px;line-height:1.1">' . esc_html__( 'CEO Green Tech', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div></div>
    <!-- /wp:media-text --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"17px","right":"17px","bottom":"17px","left":"17px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
    <div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:17px;padding-right:17px;padding-bottom:17px;padding-left:17px"><!-- wp:media-text {"mediaId":2384,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/img/common/testimonial-headshot-2-min.jpg","mediaType":"image","mediaWidth":38} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:38% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/testimonial-headshot-2-min.jpg" alt="" class="wp-image-2384 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <div class="wp-block-group" style="padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"placeholder":"Content…","textColor":"secondary"} -->
    <p class="has-secondary-color has-text-color">"' . esc_html__( 'The Oxmox advised her not to do so, because there were thousands of bad Commas', 'gutena' ) . '"</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"30px","right":"0px","bottom":"10px","left":"0px"}}}} -->
    <h6 id="sofia-g-paul" style="margin-top:30px;margin-right:0px;margin-bottom:10px;margin-left:0px">' . esc_html__( 'Sofia G. Paul', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.1"}},"textColor":"primary"} -->
    <p class="has-primary-color has-text-color" style="font-size:14px;line-height:1.1">' . esc_html__( 'CEO Green Tech', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div></div>
    <!-- /wp:media-text --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"70px"}}},"backgroundColor":"secondary","className":"gutena-pattern"} -->
    <div class="wp-block-group alignfull gutena-pattern has-secondary-background-color has-background" style="padding-top:100px;padding-bottom:70px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"60px"}}},"textColor":"white"} -->
    <h4 class="has-text-align-center has-white-color has-text-color" id="trusted-by-enterprise-leaders" style="margin-bottom:60px">' . esc_html__( 'Trusted by enterprise leaders', 'gutena' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"5","letterSpacing":"80px"}}} -->
    <p class="has-text-align-center" style="line-height:5;letter-spacing:80px"> <img class="wp-image-1608" style="width: 117px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/google-white-logo.webp" alt="google"> <img class="wp-image-1609" style="width: 121px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/amazon-white-logo.webp" alt="amazon"> <img class="wp-image-1610" style="width: 134px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/spotify.webp" alt="spotify"> <img class="wp-image-1611" style="width: 113px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/django-white-logo.webp" alt="django"> <img class="wp-image-1612" style="width: 96px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/drip-white-logo.webp" alt="drip"></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
	
	<!-- wp:group {"align":"full","className":"gutena-pattern","layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull gutena-pattern"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/common/CTA.png","id":2400,"dimRatio":40,"overlayColor":"black","style":{"spacing":{"padding":{"top":"80px","bottom":"90px","right":"20px","left":"20px"}}}} -->
    <div class="wp-block-cover" style="padding-top:80px;padding-right:20px;padding-bottom:90px;padding-left:20px"><span aria-hidden="true" class="has-black-background-color has-background-dim-40 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2400" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/CTA.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"wideSize":"534px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"white","fontSize":"large"} -->
    <h2 class="has-text-align-center has-white-color has-text-color has-large-font-size" id="the-modern-wayto-build-for-web" style="font-style:normal;font-weight:700;line-height:1.4;margin-bottom:20px">' . esc_html__( 'Convinced ? Well Let’s have a talk then', 'gutena' ) . '.</h2>
    <!-- /wp:heading -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"21px","right":"21px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" href="#" style="border-radius:0px;padding-top:15px;padding-right:21px;padding-bottom:15px;padding-left:21px">' . esc_html__( 'Download Theme Now', 'gutena' ) . '    <img class="wp-image-1594" style="width: 15px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->
    ',
);
