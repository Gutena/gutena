<?php
/**
 * Gutena block pattern:  Testimonial with image, text and name
 */
return array(
	'title'      => __( 'Testimonial with image, text and name', 'gutena' ),
	'categories' => array( 'gutena-testimonials' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"color":{"background":"#ebf3ff"},"spacing":{"padding":{"top":"100px","right":"20px","bottom":"100px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background-color:#ebf3ff;padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"bottom":"25px"},"blockGap":"35px"}}} -->
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
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1140" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"59px"} -->
<div style="height:59px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"30px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"44px","right":"36px","bottom":"39px","left":"36px"}}},"backgroundColor":"white","className":"guten-box-shadow is-style-gutena-box-shadow"} -->
    <div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow has-white-background-color has-background" style="padding-top:44px;padding-right:36px;padding-bottom:39px;padding-left:36px"><!-- wp:image {"align":"center","id":1907,"sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"is-style-rounded"} -->
    <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/testimonial-1.webp" alt="testimonial" class="wp-image-1907"/></figure></div>
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
    <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/testimonial-2.webp" alt="testimonial" class="wp-image-1908"/></figure></div>
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
    <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/testimonial-3.webp" alt="testimonial" class="wp-image-1909"/></figure></div>
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
    <!-- /wp:group -->',
);
