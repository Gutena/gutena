<?php
/**
 * Gutena block pattern:  Testimonial with image and text
 */
return array(
	'title'      => __( 'Testimonial with image and text', 'gutena' ),
	'categories' => array( 'gutena-testimonials' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"90px","bottom":"100px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern" style="padding-top:90px;padding-bottom:100px"><!-- wp:group {"align":"wide"} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"50px"}}}} -->
    <h2 class="has-text-align-center" id="client-saying" style="margin-bottom:50px">' . esc_html__( 'Client saying', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"45px"}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"17px","right":"17px","bottom":"17px","left":"17px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
    <div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:17px;padding-right:17px;padding-bottom:17px;padding-left:17px"><!-- wp:media-text {"mediaId":2383,"mediaLink":"' . GUTENA_THEME_URI . '/assets/img/common/testimonial-headshot-1-min.jpg","mediaType":"image","mediaWidth":38} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:38% auto"><figure class="wp-block-media-text__media"><img src="' . GUTENA_THEME_URI . '/assets/img/common/testimonial-headshot-1-min.jpg" alt="" class="wp-image-2383 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"0px","left":"0px"}}}} -->
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
    <div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:17px;padding-right:17px;padding-bottom:17px;padding-left:17px"><!-- wp:media-text {"mediaId":2384,"mediaLink":"' . GUTENA_THEME_URI . '/assets/img/common/testimonial-headshot-2-min.jpg","mediaType":"image","mediaWidth":38} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:38% auto"><figure class="wp-block-media-text__media"><img src="' . GUTENA_THEME_URI . '/assets/img/common/testimonial-headshot-2-min.jpg" alt="" class="wp-image-2384 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"0px","left":"0px"}}}} -->
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
    <!-- /wp:group -->',
);
