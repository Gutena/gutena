<?php
/**
 * Gutena block pattern:  Team members with rounded image, name and social icons
 */
return array(
	'title'      => __( 'Team members with rounded image, name and social icons', 'gutena' ),
	'categories' => array( 'gutena-team-members' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}},"color":{"background":"#fff3f0"}},"className":"gutena-pattern gutena-h202020-b555555","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern gutena-h202020-b555555 has-background" style="background-color:#fff3f0;padding-top:100px;padding-bottom:100px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"11px"}}}} -->
    <h2 class="has-text-align-center" id="our-leadership" style="margin-bottom:11px">' . esc_html__( 'Our Leadership', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"normal"} -->
    <p class="has-text-align-center has-normal-font-size" style="line-height:1.9">' . esc_html__( 'Foundational pillars of our organization', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"62px"} -->
    <div style="height:62px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"55px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:image {"align":"center","id":156,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
    <div class="wp-block-image is-style-default"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-444x444.png" alt="' . esc_html__( 'leader', 'gutena' ) . '" class="wp-image-156"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"22px"}}}} -->
    <h6 class="has-text-align-center" id="sofia-smith" style="margin-top:22px">' . esc_html__( 'Sofia Smith', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Founder', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#575B7A","size":"has-small-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"25px","margin":{"top":"13px"}}}} -->
    <ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:13px"><!-- wp:social-link {"url":"#","service":"facebook","label":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter","label":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:image {"align":"center","id":163,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
    <div class="wp-block-image is-style-default"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-444x444.png" alt="' . esc_html__( 'leader', 'gutena' ) . '" class="wp-image-163"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"22px"}}}} -->
    <h6 class="has-text-align-center" id="sofia-smith" style="margin-top:22px">' . esc_html__( 'Robert Fox', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Developer', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#575B7A","size":"has-small-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"25px","margin":{"top":"13px"}}}} -->
    <ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:13px"><!-- wp:social-link {"url":"#","service":"facebook","label":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter","label":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:image {"align":"center","id":164,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
    <div class="wp-block-image is-style-default"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-444x444.png" alt="' . esc_html__( 'leader', 'gutena' ) . '" class="wp-image-164"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"22px"}}}} -->
    <h6 class="has-text-align-center" id="sofia-smith" style="margin-top:22px">' . esc_html__( 'Jerome Bell', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Creative Director', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#575B7A","size":"has-small-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"25px","margin":{"top":"13px"}}}} -->
    <ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:13px"><!-- wp:social-link {"url":"#","service":"facebook","label":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter","label":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:image {"align":"center","id":165,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
    <div class="wp-block-image is-style-default"><figure class="aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-444x444.png" alt="' . esc_html__( 'leader', 'gutena' ) . '" class="wp-image-165"/></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"22px"}}}} -->
    <h6 class="has-text-align-center" id="sofia-smith" style="margin-top:22px">' . esc_html__( 'Darlene Brown', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size" style="line-height:1.9">' . esc_html__( 'Marketing Head', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#575B7A","size":"has-small-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"25px","margin":{"top":"13px"}}}} -->
    <ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:13px"><!-- wp:social-link {"url":"#","service":"facebook","label":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter","label":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
