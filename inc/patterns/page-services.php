<?php
/**
 * Gutena block pattern:  Service page with columns, icon boxes and testimonials
 */
return array(
	'title'      => __( 'Service page with columns, icon boxes and testimonials', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => '<!-- wp:group {"align":"wide","className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"0vh"}}}} -->
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
    <figure class="wp-block-image size-full is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/quote-min-1.jpg" alt="" class="wp-image-2398"/></figure>
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
    <figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/service-intro-img-min-1.png" alt="" class="wp-image-2397"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern" style="padding-top:100px;padding-bottom:100px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px"}}},"layout":{"wideSize":"540px"}} -->
    <div class="wp-block-group" style="padding-right:20px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
    <h2 class="has-text-align-center" id="why-choose-us" style="margin-bottom:5px">' . esc_html__( 'What we do', 'gutena' ) . '</h2>
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

    <!-- wp:group {"align":"full","style":{"color":{"background":"#ebf3ff"},"spacing":{"padding":{"top":"100px","right":"20px","bottom":"70px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background-color:#ebf3ff;padding-top:100px;padding-right:20px;padding-bottom:70px;padding-left:20px"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"bottom":"25px"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-bottom:25px"><!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.9"}},"textColor":"primary","fontSize":"extra-small"} -->
    <h6 class="has-primary-color has-text-color has-extra-small-font-size" id="testimonials" style="font-style:normal;font-weight:700;line-height:1.9;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'TESTIMONIALS', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"16px"}}}} -->
    <h2 id="a-satisfied-customer-is-the-best-strategy" style="margin-top:16px;margin-bottom:0px">' . esc_html__( 'A satisfied customer is the best strategy', 'gutena' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1140" style="width: 15px;" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"44px","right":"36px","bottom":"39px","left":"36px"}}},"backgroundColor":"white","className":"guten-box-shadow is-style-gutena-box-shadow"} -->
    <div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow has-white-background-color has-background" style="padding-top:44px;padding-right:36px;padding-bottom:39px;padding-left:36px"><!-- wp:image {"align":"center","id":1907,"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"is-style-rounded"} -->
    <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/testimonial-1.webp" alt="testimonial" class="wp-image-1907"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:spacer {"height":"19px"} -->
    <div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">"' . esc_html__( "The Big Oxmox advised her not to do so, because there were thousands of bad Commas, devious Semikoli, but the Little Blind Text didn’t listen.", 'gutena' ) . '"</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"31px"} -->
    <div style="height:31px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center","level":6} -->
    <h6 class="has-text-align-center" id="sofia-g-paul">' . esc_html__( 'Sofia G. Paul', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:spacer {"height":"8px"} -->
    <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","lineHeight":"1.2"}},"textColor":"primary"} -->
    <p class="has-text-align-center has-primary-color has-text-color" style="font-size:14px;line-height:1.2">' . esc_html__( 'CEO Green Tech', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"44px","right":"36px","bottom":"39px","left":"36px"}}},"backgroundColor":"white","className":"guten-box-shadow is-style-gutena-box-shadow"} -->
    <div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow has-white-background-color has-background" style="padding-top:44px;padding-right:36px;padding-bottom:39px;padding-left:36px"><!-- wp:image {"align":"center","id":1908,"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"is-style-rounded"} -->
    <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/testimonial-2.webp" alt="testimonial" class="wp-image-1908"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:spacer {"height":"19px"} -->
    <div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">"' . esc_html__( "The Big Oxmox advised her not to do so, because there were thousands of bad Commas, devious Semikoli, but the Little Blind Text didn’t listen.", 'gutena' ) . '"</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"31px"} -->
    <div style="height:31px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center","level":6} -->
    <h6 class="has-text-align-center" id="sofia-g-paul">' . esc_html__( 'Sofia G. Paul', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:spacer {"height":"8px"} -->
    <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","lineHeight":"1.2"}},"textColor":"primary"} -->
    <p class="has-text-align-center has-primary-color has-text-color" style="font-size:14px;line-height:1.2">' . esc_html__( 'CEO Green Tech', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"44px","right":"36px","bottom":"39px","left":"36px"}}},"backgroundColor":"white","className":"guten-box-shadow is-style-gutena-box-shadow"} -->
    <div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow has-white-background-color has-background" style="padding-top:44px;padding-right:36px;padding-bottom:39px;padding-left:36px"><!-- wp:image {"align":"center","id":1909,"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"is-style-rounded"} -->
    <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/testimonial-3.webp" alt="testimonial" class="wp-image-1909"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:spacer {"height":"19px"} -->
    <div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">"' . esc_html__( "The Big Oxmox advised her not to do so, because there were thousands of bad Commas, devious Semikoli, but the Little Blind Text didn’t listen.", 'gutena' ) . '"</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"31px"} -->
    <div style="height:31px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center","level":6} -->
    <h6 class="has-text-align-center" id="sofia-g-paul">' . esc_html__( 'Sofia G. Paul', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:spacer {"height":"8px"} -->
    <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","lineHeight":"1.2"}},"textColor":"primary"} -->
    <p class="has-text-align-center has-primary-color has-text-color" style="font-size:14px;line-height:1.2">' . esc_html__( 'CEO Green Tech', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
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
