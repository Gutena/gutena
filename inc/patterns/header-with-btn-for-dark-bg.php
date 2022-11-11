<?php
/**
 * Gutena block pattern:Header with logo, menu and buttons for dark background
 */
return array(
	'title'      => __( 'Header with logo, menu and buttons for dark background', 'gutena' ),
	'categories' => array( 'gutena-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
    <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/logo-white.svg" alt="'.esc_html__( 'logo', 'gutena' ).'"/></figure>
    <!-- /wp:image -->
        <!-- wp:navigation {"__unstableLocation":"main_nav","textColor":"white","className":"is-style-gutena-navigation-style white-hamburger-menu","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|normal"}}} /-->
        
        <!-- wp:buttons {"className":"hide-in-mobile hide-in-tablet"} -->
    <div class="wp-block-buttons hide-in-mobile hide-in-tablet"><!-- wp:button {"backgroundColor":"quinary","textColor":"secondary","style":{"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem","left":"1.5rem","right":"1.5rem"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-quinary-background-color has-text-color has-background wp-element-button" style="padding-top:1.1rem;padding-right:1.5rem;padding-bottom:1.1rem;padding-left:1.5rem">help@gutena.io <img class="wp-image-15" style="width: 10px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/top-right-arrow-black.svg" alt="top-right-arrow-black"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
        <!-- /wp:group -->
    ',
);
