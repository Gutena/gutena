<?php
/**
 * Gutena block pattern: Company page with columns, team members, icon boxes and Client logos
 */
return array(
	'title'      => __( 'Company page with columns, team members, icon boxes and Client logos', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => '<!-- wp:group {"align":"wide","className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"70px"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:100px;padding-bottom:70px"><!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1} -->
    <h1 id="start-your-online-business-today">' . esc_html__( 'Start your online business today', 'gutena' ) . '</h1>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"17px","bottom":"35px"}}}} -->
    <div class="wp-block-group" style="padding-top:17px;padding-bottom:35px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9","letterSpacing":"-0.01em"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9;letter-spacing:-0.01em">' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating. On top of a great tool is even better customer support', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
    <div class="wp-block-buttons" style="margin-bottom:20px"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1140" style="width: 15px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":2386,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/Company-intro-img-min.jpg" alt="" class="wp-image-2386"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"align":"wide","className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern"><!-- wp:media-text {"mediaId":2388,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/img/common/man-smiling-min.png","mediaType":"image"} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/man-smiling-min.png" alt="" class="wp-image-2388 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"40px","top":"40px"}}}} -->
    <div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.9"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <h6 class="has-primary-color has-text-color has-extra-small-font-size" id="our-core-values" style="font-style:normal;font-weight:700;line-height:1.9;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'our core values', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"style":{"spacing":{"margin":{"top":"16px"}}}} -->
    <h2 id="start-your-online-business-today" style="margin-top:16px">' . esc_html__( 'The future is changing and we are a part of it', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"}}}} -->
    <div class="wp-block-group" style="padding-bottom:15px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"23px","bottom":"24px"}}}} -->
    <div class="wp-block-group" style="padding-top:23px;padding-bottom:24px"><!-- wp:paragraph -->
    <p>' . esc_html__( 'Get started swiftly & easily by importing a demo of your choice in a single click. Over 30 high quality professionally designed pre-built website concepts to choose from. Gutena is a modern business theme, that lets you build stunning high performance websites using a fully visual interface', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>' . esc_html__( 'Gutena is a popular, creative WordPress theme used by many customers across the world. From Portfolio, Photography, Agency, Blog, Architecture, Business or Shop, build beautiful websites for any purpose with ease', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:media-text --></div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(135deg,rgb(90,133,242) 5%,rgb(61,57,229) 100%)"}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background:linear-gradient(135deg,rgb(90,133,242) 5%,rgb(61,57,229) 100%)"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"50px","right":"20px","left":"20px"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:80px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textColor":"white"} -->
    <h2 class="has-white-color has-text-color" id="scale-your-business-using-our-solutions">' . esc_html__( 'Scale your business using our solutions', 'gutena' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"5%"} -->
    <div class="wp-block-column" style="flex-basis:5%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"bottom","width":"22.5%"} -->
    <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:22.5%"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"6px"}}},"textColor":"white"} -->
    <h2 class="has-white-color has-text-color" id="98-5" style="margin-bottom:6px">' . esc_html__( '98.5%', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"white"} -->
    <p class="has-white-color has-text-color">' . esc_html__( 'Customer Satisfaction', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"bottom","width":"22.5%"} -->
    <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:22.5%"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"6px"}}},"textColor":"white"} -->
    <h2 class="has-white-color has-text-color" id="100k" style="margin-bottom:6px">' . esc_html__( '100K+', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"white"} -->
    <p class="has-white-color has-text-color">' . esc_html__( 'New users per week', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern" style="padding-top:100px;padding-bottom:100px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px"}}},"layout":{"wideSize":"540px"}} -->
    <div class="wp-block-group" style="padding-right:20px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
    <h2 class="has-text-align-center" id="why-choose-us" style="margin-bottom:5px">' . esc_html__( 'Why choose us?', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"17px","bottom":"69px"}}}} -->
    <div class="wp-block-group" style="padding-top:17px;padding-bottom:69px"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9","letterSpacing":"-0.01em"}},"textColor":"tertiary","fontSize":"normal"} -->
    <p class="has-text-align-center has-tertiary-color has-text-color has-normal-font-size" style="line-height:1.9;letter-spacing:-0.01em">' . esc_html__( 'Gutena is also used by a wide range of businesses including corporates, architects & agencies.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"59px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"","style":{"spacing":{"padding":{"bottom":"33px"}}}} -->
    <div class="wp-block-column" style="padding-bottom:33px"><!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"12.5%","style":{"spacing":{"padding":{"right":"20px","top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;padding-right:20px;flex-basis:12.5%"><!-- wp:image {"id":1605,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/clock.svg" alt="Guten UI Kit" class="wp-image-1605"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"87.5%","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:87.5%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Digital Marketing', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px;padding-right:10px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","style":{"spacing":{"padding":{"bottom":"33px"}}}} -->
    <div class="wp-block-column" style="padding-bottom:33px"><!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"12.5%","style":{"spacing":{"padding":{"right":"20px","top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;padding-right:20px;flex-basis:12.5%"><!-- wp:image {"id":1603,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/desktop-play-button.svg" alt="Online Investment" class="wp-image-1603"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"87.5%","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:87.5%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Ecommerce', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px;padding-right:10px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","style":{"spacing":{"padding":{"bottom":"33px"}}}} -->
    <div class="wp-block-column" style="padding-bottom:33px"><!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"12.5%","style":{"spacing":{"padding":{"right":"20px","top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;padding-right:20px;flex-basis:12.5%"><!-- wp:image {"id":1602,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/user.svg" alt="Tax Planning" class="wp-image-1602"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"87.5%","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:87.5%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Hosting Service', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px;padding-right:10px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"59px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"","style":{"spacing":{"padding":{"bottom":"33px"}}}} -->
    <div class="wp-block-column" style="padding-bottom:33px"><!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"12.5%","style":{"spacing":{"padding":{"right":"20px","top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;padding-right:20px;flex-basis:12.5%"><!-- wp:image {"id":1601,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/node-link.svg" alt="PPC Advertising" class="wp-image-1601"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"87.5%","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:87.5%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'PPC Advertising', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px;padding-right:10px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","style":{"spacing":{"padding":{"bottom":"33px"}}}} -->
    <div class="wp-block-column" style="padding-bottom:33px"><!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"12.5%","style":{"spacing":{"padding":{"right":"20px","top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;padding-right:20px;flex-basis:12.5%"><!-- wp:image {"id":1600,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/open-book.svg" alt="Hosting Service" class="wp-image-1600"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"87.5%","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:87.5%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Tax Planning', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px;padding-right:10px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","style":{"spacing":{"padding":{"bottom":"33px"}}}} -->
    <div class="wp-block-column" style="padding-bottom:33px"><!-- wp:columns {"isStackedOnMobile":false} -->
    <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"top","width":"12.5%","style":{"spacing":{"padding":{"right":"20px","top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;padding-right:20px;flex-basis:12.5%"><!-- wp:image {"id":1598,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/aspect-ratio.svg" alt="Digital Marketing" class="wp-image-1598"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"87.5%","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:87.5%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Online Investment', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px;padding-right:10px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"13px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:13px"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1140" style="width: 15px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"color":{"background":"#ebf3ff"},"spacing":{"padding":{"top":"80px","bottom":"35px","right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background-color:#ebf3ff;padding-top:80px;padding-right:20px;padding-bottom:35px;padding-left:20px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"50px"}}}} -->
    <div class="wp-block-group alignwide" style="padding-bottom:50px"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.9"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <h6 class="has-primary-color has-text-color has-extra-small-font-size" id="our-core-values" style="font-style:normal;font-weight:700;line-height:1.9;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'OUR TEAM', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
    <h2 id="foundational-pillars-of-our-organization" style="margin-bottom:0px">' . esc_html__( 'Foundational pillars of our organization', 'gutena' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%","className":"is-style-gutena-column-no-margin is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:20%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9">' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"align":"wide","layout":{"wideSize":"918px"}} -->
    <div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":"65px"}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":2389,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/team-1-min.jpg" alt="" class="wp-image-2389"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
    <h4 id="sofia-g-paul">' . esc_html__( 'Sofia G. Paul', 'gutena' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"primary"} -->
    <p class="has-primary-color has-text-color">' . esc_html__( 'Director Green Tech', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"30px"}}}} -->
    <div class="wp-block-group" style="padding-top:4px;padding-bottom:30px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Get started swiftly &amp; easily by importing a demo of your choice in a single click. High quality professionally designed pre-built website concepts to choose from. Gutena is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build one on your own.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"0px"}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"25px"}}}} -->
    <div class="wp-block-group" style="padding-right:25px"><!-- wp:image {"id":1812,"sizeSlug":"large","linkDestination":"custom"} -->
    <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/facebook.svg" alt="facebook" class="wp-image-1812"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"25px"}}}} -->
    <div class="wp-block-group" style="padding-right:25px"><!-- wp:image {"id":1813,"sizeSlug":"large","linkDestination":"custom","style":{"color":{}}} -->
    <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/twitter.svg" alt="twitter" class="wp-image-1813"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:image {"id":1814,"sizeSlug":"large","linkDestination":"custom"} -->
    <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/instagram.svg" alt="instagram" class="wp-image-1814"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"70px"} -->
    <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"65px"}}} -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
    <h4 id="sofia-g-paul">' . esc_html__( 'Justin Hammer', 'gutena' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"primary"} -->
    <p class="has-primary-color has-text-color">' . esc_html__( 'Chief Marketing Officer', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"30px"}}}} -->
    <div class="wp-block-group" style="padding-top:4px;padding-bottom:30px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Get started swiftly &amp; easily by importing a demo of your choice in a single click. High quality professionally designed pre-built website concepts to choose from. Gutena is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build one on your own.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"0px"}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"25px"}}}} -->
    <div class="wp-block-group" style="padding-right:25px"><!-- wp:image {"id":1812,"sizeSlug":"large","linkDestination":"custom"} -->
    <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/facebook.svg" alt="facebook" class="wp-image-1812"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"25px"}}}} -->
    <div class="wp-block-group" style="padding-right:25px"><!-- wp:image {"id":1813,"sizeSlug":"large","linkDestination":"custom","style":{"color":{}}} -->
    <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/twitter.svg" alt="twitter" class="wp-image-1813"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:image {"id":1814,"sizeSlug":"large","linkDestination":"custom"} -->
    <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/instagram.svg" alt="instagram" class="wp-image-1814"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":2390,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/team-2-min.jpg" alt="" class="wp-image-2390"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"70px"} -->
    <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"65px"}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":2391,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/team-3-min.jpg" alt="" class="wp-image-2391"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
    <h4 id="sofia-g-paul">' . esc_html__( 'Robert Jones', 'gutena' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"primary"} -->
    <p class="has-primary-color has-text-color">' . esc_html__( 'Chief Marketing Officer', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"30px"}}}} -->
    <div class="wp-block-group" style="padding-top:4px;padding-bottom:30px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Get started swiftly &amp; easily by importing a demo of your choice in a single click. High quality professionally designed pre-built website concepts to choose from. Gutena is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build one on your own.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"0px"}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"25px"}}}} -->
    <div class="wp-block-group" style="padding-right:25px"><!-- wp:image {"id":1812,"sizeSlug":"large","linkDestination":"custom"} -->
    <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/facebook.svg" alt="facebook" class="wp-image-1812"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"25px"}}}} -->
    <div class="wp-block-group" style="padding-right:25px"><!-- wp:image {"id":1813,"sizeSlug":"large","linkDestination":"custom","style":{"color":{}}} -->
    <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/twitter.svg" alt="twitter" class="wp-image-1813"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:image {"id":1814,"sizeSlug":"large","linkDestination":"custom"} -->
    <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/instagram.svg" alt="instagram" class="wp-image-1814"/></a></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
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
