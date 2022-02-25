<?php
/**
 * Gutena block pattern:  Call to action with image, text and button
 */
return array(
	'title'      => __( 'Call to action with image, text and button', 'gutena' ),
	'categories' => array( 'gutena-cta' ),
	'content'    => '<!-- wp:group {"align":"full","className":"gutena-pattern","layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull gutena-pattern"><!-- wp:cover {"url":"' . GUTENA_THEME_URI . '/assets/img/common/CTA.png","id":2400,"dimRatio":40,"overlayColor":"black","style":{"spacing":{"padding":{"top":"80px","bottom":"90px","right":"20px","left":"20px"}}}} -->
    <div class="wp-block-cover" style="padding-top:80px;padding-right:20px;padding-bottom:90px;padding-left:20px"><span aria-hidden="true" class="has-black-background-color has-background-dim-40 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2400" alt="" src="' . GUTENA_THEME_URI . '/assets/img/common/CTA.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"wideSize":"534px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"white","fontSize":"large"} -->
    <h2 class="has-text-align-center has-white-color has-text-color has-large-font-size" id="the-modern-wayto-build-for-web" style="font-style:normal;font-weight:700;line-height:1.4;margin-bottom:20px">' . esc_html__( 'Convinced ? Well Let’s have a talk then', 'gutena' ) . '.</h2>
    <!-- /wp:heading -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"21px","right":"21px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-primary-background-color has-background" href="#" style="border-radius:0px;padding-top:15px;padding-right:21px;padding-bottom:15px;padding-left:21px">' . esc_html__( 'Download Theme Now', 'gutena' ) . '    <img class="wp-image-1594" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->',
);
