<?php
/**
 * Gutena block pattern:  Two column content, banner and client logos
 */
return array(
	'title'      => __( 'Two column content, banner and client logos', 'gutena' ),
	'categories' => array( 'gutena-hero-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"color":{"background":"#fff3f0"},"spacing":{"padding":{"top":"100px","bottom":"90px"}}},"className":"gutena-pattern gutena-h202020-b555555","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern gutena-h202020-b555555 has-background" style="background-color:#fff3f0;padding-top:100px;padding-bottom:90px"><!-- wp:group {"align":"wide"} -->
    <div class="wp-block-group alignwide"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"32%"} -->
    <div class="wp-block-column" style="flex-basis:32%"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"10px","top":"25px"}}},"textColor":"orange","fontSize":"small"} -->
    <h6 class="has-orange-color has-text-color has-small-font-size" id="why-choose-us-1" style="font-style:normal;font-weight:700;line-height:1.6;margin-top:25px;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'About GUTENA', 'gutena' ) . '</h6>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"68%"} -->
    <div class="wp-block-column" style="flex-basis:68%"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"bottom":"21px"}}},"fontSize":"medium-large"} -->
    <h1 class="has-medium-large-font-size" id="a-design-agency-from-nyc" style="margin-bottom:21px">' . esc_html__( 'A design agency from NYC', 'gutena' ) . '.</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9">' . esc_html__( 'Guten WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating. On top of a great tool is even better customer support', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"58px"} -->
    <div style="height:58px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:image {"align":"center","id":90,"width":1110,"height":528,"sizeSlug":"large","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-2220x1040.png" alt="' . esc_html__( 'meeting', 'gutena' ) . '" class="wp-image-90" width="1110" height="528"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"67px","bottom":"50px"}}}} -->
    <h5 class="has-text-align-center" id="trusted-by-organizations-with-95-customer-satisfaction-score" style="margin-top:67px;margin-bottom:50px">' . esc_html__( 'Trusted by organizations with 95% customer satisfaction score', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignwide"><!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_slack.svg" alt="' . esc_html__( 'logo slack', 'gutena' ) . '" class="wp-image-31"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":32,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_airtable.svg" alt="' . esc_html__( 'logo airtable', 'gutena' ) . '" class="wp-image-32"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":33,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_losant.svg" alt="' . esc_html__( 'logo losant', 'gutena' ) . '" class="wp-image-33"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":34,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_100tb.svg" alt="' . esc_html__( 'logo 100tb', 'gutena' ) . '" class="wp-image-34"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":36,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_datocms.svg" alt="' . esc_html__( 'logo datocms', 'gutena' ) . '" class="wp-image-36"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":35,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logos_flickr.svg" alt="' . esc_html__( 'logo flicker', 'gutena' ) . '" class="wp-image-35"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
