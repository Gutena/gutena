<?php
/**
 * Gutena block pattern:  Team members with name and position
 */
return array(
	'title'      => __( 'Team members with name and position', 'gutena' ),
	'categories' => array( 'gutena-team-members' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"85px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern" style="padding-top:100px;padding-bottom:85px"><!-- wp:group {"align":"wide"} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.9"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <h6 class="has-primary-color has-text-color has-extra-small-font-size" id="our-team" style="font-style:normal;font-weight:700;line-height:1.9;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'OUR TEAM', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
    <h2 id="scale-your-business-using-our-technology" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Foundational pillars of our organization', 'gutena' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"19%","className":"is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-vertically-aligned-top is-style-gutena-column-no-margin" style="flex-basis:19%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"41%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:41%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9","letterSpacing":"-0.01em"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9;letter-spacing:-0.01em">' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":"35px"} -->
<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"16px"}}},"layout":{"inherit":false}} -->
    <div class="wp-block-group alignwide" style="padding-top:16px"><!-- wp:columns {"style":{"spacing":{"blockGap":"32px"}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":2377,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/team-member-1-min.jpg" alt="" class="wp-image-2377"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}}}} -->
    <h6 class="has-text-align-center" id="justin-hammer" style="margin-top:20px;margin-bottom:0px">' . esc_html__( 'Justin Hammer', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Founder & CEO', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":2378,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/team-member-2-min.jpg" alt="" class="wp-image-2378"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}}}} -->
    <h6 class="has-text-align-center" id="justin-hammer" style="margin-top:20px;margin-bottom:0px">' . esc_html__( 'Clark Roberts', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Chief Finance Officer', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":2379,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/team-member-3-min.jpg" alt="" class="wp-image-2379"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}}}} -->
    <h6 class="has-text-align-center" id="justin-hammer" style="margin-top:20px;margin-bottom:0px">' . esc_html__( 'Ashley Hardy', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'VP Sales and Marketing', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":2380,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/team-member-4-min.jpg" alt="" class="wp-image-2380"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}}}} -->
    <h6 class="has-text-align-center" id="justin-hammer" style="margin-top:20px;margin-bottom:0px">' . esc_html__( 'Dennis Norris', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Chief Marketing Officer', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
