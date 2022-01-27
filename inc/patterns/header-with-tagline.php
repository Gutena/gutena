<?php
/**
 * Gutena block pattern:Header with logo, tagline and menu
 */
return array(
	'title'      => __( 'Header with logo, tagline and menu', 'gutena' ),
	'categories' => array( 'gutena-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","right":"20px","left":"18px"}}},"className":"guten-pattern-hero guten-header-with-taglineguten-pattern-hero guten-header-default","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull guten-pattern-hero guten-header-with-taglineguten-pattern-hero guten-header-default" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:18px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex"}} -->
    <div class="wp-block-group"><!-- wp:site-logo /-->
    
    <!-- wp:group -->
    <div class="wp-block-group"><!-- wp:site-title {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
    
    <!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0.25em","bottom":"0px"}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    
    <!-- wp:navigation {"__unstableLocation":"main_nav","className":"is-style-gutena-navigation-style","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
