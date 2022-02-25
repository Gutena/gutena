<?php
/**
 * Gutena block pattern:  Contact page with image and columns
 */
return array(
	'title'      => __( 'Contact page with image and columns', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"0px","right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern" style="padding-top:20px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"35px","left":"20px"}}}} -->
    <div class="wp-block-group alignwide" style="padding-top:20px;padding-right:20px;padding-bottom:35px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.4","fontSize":"74px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}}} -->
    <h2 class="has-text-align-center" id="contact" style="font-size:74px;font-style:normal;font-weight:700;line-height:1.4;margin-bottom:20px">' . esc_html__( 'Contact', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"normal"} -->
    <p class="has-text-align-center has-secondary-color has-text-color has-normal-font-size" style="line-height:1.9">' . esc_html__( 'Just tell us about yourself and we’ll figure out the best option for you.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","bottom":"10px","right":"20px","left":"20px"}}},"className":"gutena-pattern"} -->
<div class="wp-block-group alignwide gutena-pattern" style="padding-top:0px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:image {"align":"center","id":2511,"sizeSlug":"full","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/contact-img.jpg" alt="" class="wp-image-2511"/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:group -->
    
    <!-- wp:group {"align":"wide","className":"gutena-pattern","layout":{"inherit":false,"wideSize":"730px"}} -->
    <div class="wp-block-group alignwide gutena-pattern"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"40px","bottom":"100px","right":"20px","left":"20px"},"blockGap":"50px"}}} -->
    <div class="wp-block-columns" style="padding-top:40px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
    <h5 id="location">' . esc_html__( 'Location', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( '780, HSR Layout 23A Cross, 8B Main Sector 7, Bangalore 560102', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
    <h5 id="location">' . esc_html__( 'Email', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Sales@brandexponents.com', 'gutena' ) . '<br>' . esc_html__( 'Info@brandexponents.com', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
    <h5 id="location">' . esc_html__( 'Phone', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( '123-456-7890', 'gutena' ) . '<br>' . esc_html__( '123-456-7899', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
