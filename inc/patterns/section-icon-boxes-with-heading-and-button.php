<?php
/**
 * Gutena block pattern:  Icon boxes with heading and button
 */
return array(
	'title'      => __( 'Icon boxes with heading and button', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
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
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"65px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
    <div class="wp-block-column" ><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"21px"}}} -->
    <div  class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"top","width":"40px","style":{"spacing":{"padding":{"top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;flex-basis:40px"><!-- wp:image {"id":1605,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/clock.svg" alt="Guten UI Kit" class="wp-image-1605"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" ><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Digital Marketing', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column" ><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"21px"}}} -->
    <div  class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"top","width":"40px","style":{"spacing":{"padding":{"top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;flex-basis:40px"><!-- wp:image {"id":1603,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/desktop-play-button.svg" alt="Online Investment" class="wp-image-1603"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" ><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Ecommerce', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column" ><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"21px"}}} -->
    <div  class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"top","width":"40px","style":{"spacing":{"padding":{"top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;flex-basis:40px"><!-- wp:image {"id":1602,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/user.svg" alt="Tax Planning" class="wp-image-1602"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" ><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Hosting Service', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"65px"} -->
<div style="height:65px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"65px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
    <div class="wp-block-column" ><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"21px"}}} -->
    <div  class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"top","width":"40px","style":{"spacing":{"padding":{"top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;flex-basis:40px"><!-- wp:image {"id":1601,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/node-link.svg" alt="PPC Advertising" class="wp-image-1601"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" ><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'PPC Advertising', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column" ><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"21px"}}} -->
    <div  class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"top","width":"40px","style":{"spacing":{"padding":{"top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;flex-basis:40px"><!-- wp:image {"id":1600,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/open-book.svg" alt="Hosting Service" class="wp-image-1600"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" ><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Tax Planning', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column" ><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"21px"}}} -->
    <div  class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"top","width":"40px","style":{"spacing":{"padding":{"top":"10px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;flex-basis:40px"><!-- wp:image {"id":1598,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/aspect-ratio.svg" alt="Digital Marketing" class="wp-image-1598"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" ><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h6 id="aesthetic-design" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Online Investment', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px"}}}} -->
    <div class="wp-block-group" style="padding-top:12px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is a modern business theme, that lets you build stunning high performance websites.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"13px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:13px"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1140" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->',
);
