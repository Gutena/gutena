<?php
/**
 * Gutena block pattern:Hero Section above text below image with play button
 */
return array(
	'title'      => __( 'Hero Section above text below image with play button', 'gutena' ),
	'categories' => array( 'gutena-hero-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"color":{"background":"#ebf3ff"},"spacing":{"padding":{"top":"90px","bottom":"100px","right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
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
    
    <!-- wp:cover {"url":"' . GUTENA_THEME_URI . '/assets/img/common/video-img-min.jpg","id":2375,"dimRatio":30,"isDark":false,"align":"wide"} -->
    <div class="wp-block-cover alignwide is-light"><span aria-hidden="true" class="has-background-dim-30 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2375" alt="" src="' . GUTENA_THEME_URI . '/assets/img/common/video-img-min.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":1597,"sizeSlug":"large","linkDestination":"custom","className":"no-hover-color"} -->
    <div class="wp-block-image no-hover-color"><figure class="aligncenter size-large"><a href="#"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/play-button.svg" alt="play-button" class="wp-image-1597"/></a></figure></div>
    <!-- /wp:image --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
