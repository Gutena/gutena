<?php
/**
 * Gutena block pattern:Default header 
 */
$show_site_title = has_custom_logo()?'':'<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"32px","lineHeight":"1.1"}}} /-->';
return array(
	'title'      => __( 'Default header', 'gutena' ),
	'categories' => array( 'gutena-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"15px","right":"20px","bottom":"15px","left":"18px"}}},"className":"gutena-pattern guten-header-with-tagline","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern guten-header-with-tagline" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:18px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex"}} -->
    <div class="wp-block-group"><!-- wp:site-logo /-->
    '.$show_site_title.'
    </div>
    <!-- /wp:group -->
    
    <!-- wp:navigation {"__unstableLocation":"main_nav","className":"is-style-gutena-navigation-style","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"34px"}}} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
