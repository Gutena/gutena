<?php
/**
 * Gutena block pattern:  Team members with text, image and social media icons
 */
return array(
	'title'      => __( 'Team members with text, image and social media icons', 'gutena' ),
	'categories' => array( 'gutena-team-members' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"color":{"background":"#ebf3ff"},"spacing":{"padding":{"top":"80px","bottom":"35px","right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background-color:#ebf3ff;padding-top:80px;padding-right:20px;padding-bottom:35px;padding-left:20px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"50px"}}}} -->
    <div class="wp-block-group alignwide" style="padding-bottom:50px"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.9"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <h6 class="has-primary-color has-text-color has-extra-small-font-size" id="our-core-values" style="font-style:normal;font-weight:700;line-height:1.9;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'OUR TEAM', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
    <h2 id="foundational-pillars-of-our-organization" style="margin-bottom:0px">' . esc_html__( 'Foundational pillars of our organization', 'gutena' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%","className":"is-style-gutena-column-no-margin is-style-gutena-column-no-margin"} -->
    <div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:20%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9">' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"align":"wide","layout":{"wideSize":"918px"}} -->
    <div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":"65px"}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":2389,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/team-1-min.jpg" alt="" class="wp-image-2389"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
    <h4 id="sofia-g-paul">' . esc_html__( 'Sofia G. Paul', 'gutena' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"primary"} -->
    <p class="has-primary-color has-text-color">' . esc_html__( 'Director Green Tech', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"30px"}}}} -->
    <div class="wp-block-group" style="padding-top:4px;padding-bottom:30px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Get started swiftly &amp; easily by importing a demo of your choice in a single click. High quality professionally designed pre-built website concepts to choose from. Gutena is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build one on your own.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#575B7A","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"25px"}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook","label":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter","label":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links -->
    </div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"70px"} -->
    <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"65px"}}} -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
    <h4 id="sofia-g-paul">' . esc_html__( 'Justin Hammer', 'gutena' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"primary"} -->
    <p class="has-primary-color has-text-color">' . esc_html__( 'Chief Marketing Officer', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"30px"}}}} -->
    <div class="wp-block-group" style="padding-top:4px;padding-bottom:30px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Get started swiftly &amp; easily by importing a demo of your choice in a single click. High quality professionally designed pre-built website concepts to choose from. Gutena is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build one on your own.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    <!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#575B7A","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"25px"}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook","label":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter","label":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":2390,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/team-2-min.jpg" alt="" class="wp-image-2390"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"70px"} -->
    <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"65px"}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":2391,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/team-3-min.jpg" alt="" class="wp-image-2391"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4} -->
    <h4 id="sofia-g-paul">' . esc_html__( 'Robert Jones', 'gutena' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"primary"} -->
    <p class="has-primary-color has-text-color">' . esc_html__( 'Chief Marketing Officer', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"30px"}}}} -->
    <div class="wp-block-group" style="padding-top:4px;padding-bottom:30px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Get started swiftly &amp; easily by importing a demo of your choice in a single click. High quality professionally designed pre-built website concepts to choose from. Gutena is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build one on your own.', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#575B7A","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"25px"}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook","label":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter","label":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links -->
    </div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
