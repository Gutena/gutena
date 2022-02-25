<?php
/**
 * Gutena block pattern: two columns - left content right image above client logos
 */
return array(
	'title'      => __( 'Left content right image above client logos', 'gutena' ),
	'categories' => array( 'gutena-hero-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"color":{"background":"#f5e9e6"},"spacing":{"padding":{"top":"60px","bottom":"90px"}}},"className":"gutena-pattern gutena-h202020-b555555","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern gutena-h202020-b555555 has-background" style="background-color:#f5e9e6;padding-top:60px;padding-bottom:90px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"60px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
    <h5 id="a-digital-agency-from-nyc">' . esc_html__( 'A digital agency from NYC', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"21px","bottom":"19px"}}},"fontSize":"medium-large"} -->
    <h2 class="has-medium-large-font-size" id="work-with-the-top-agency-to-grow" style="font-style:normal;font-weight:600;line-height:1.3;margin-top:21px;margin-bottom:19px">' . esc_html__( 'Work with the top agency to grow', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9">' . esc_html__( 'Gutena theme is insanely flexible & amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"34px","bottom":"10px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:34px;margin-bottom:10px"><!-- wp:button {"backgroundColor":"orange","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-orange-background-color has-background" href="#" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1140" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:image {"id":24,"sizeSlug":"large","linkDestination":"custom"} -->
    <figure class="wp-block-image size-large"><a href="#"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/triangle-right.svg" alt="' . esc_html__( 'play button', 'gutena' ) . '" class="wp-image-24"/></a></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"level":6,"style":{"typography":{"lineHeight":"1.4"},"spacing":{"margin":{"top":"10px"}}},"fontSize":"small"} -->
    <h6 class="has-small-font-size" id="watch-the-intro-video" style="line-height:1.4;margin-top:10px">' . esc_html__( 'Watch the intro video', 'gutena' ) . '</h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":17,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-1080x1020.jpg" alt="' . esc_html__( 'agency', 'gutena' ) . '" class="wp-image-17"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"67px","bottom":"50px"}}}} -->
    <h5 class="has-text-align-center" id="trusted-by-organizations-with-95-customer-satisfaction-score" style="margin-top:67px;margin-bottom:50px">' . esc_html__( 'Trusted by organizations with 95% customer satisfaction score', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignwide"><!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_slack.svg" alt="' . esc_html__( 'logo', 'gutena' ) . ' slack" class="wp-image-31"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":32,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_airtable.svg" alt="' . esc_html__( 'logo', 'gutena' ) . ' airtable" class="wp-image-32"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":33,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_losant.svg" alt="' . esc_html__( 'logo', 'gutena' ) . ' losant" class="wp-image-33"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":34,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_100tb.svg" alt="' . esc_html__( 'logo', 'gutena' ) . ' 100tb" class="wp-image-34"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":36,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_datocms.svg" alt="' . esc_html__( 'logo', 'gutena' ) . ' datocms" class="wp-image-36"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":35,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_flickr.svg" alt="' . esc_html__( 'logo', 'gutena' ) . ' flicker" class="wp-image-35"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
