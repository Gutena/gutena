<?php
/**
 * Gutena block pattern:Header with logo, menu and buttons
 */
$show_site_title = has_custom_logo()?'':'<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"32px","lineHeight":"1.1"}}} /-->';
return array(
	'title'      => __( 'Header with logo, menu and buttons', 'gutena' ),
	'categories' => array( 'gutena-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","right":"20px","left":"18px"}}},"className":"gutena-pattern gutena-header-with-button","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull gutena-pattern gutena-header-with-button" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:18px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->
'.$show_site_title.'
</div>
<!-- /wp:group -->

<!-- wp:navigation {"__unstableLocation":"main_nav","textColor":"secondary","className":"is-style-gutena-navigation-style","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","flexWrap":"wrap"},"style":{"typography":{"lineHeight":"1.2"},"spacing":{"blockGap":"34px"}},"fontSize":"small"} /-->

<!-- wp:buttons {"className":"hide-in-mobile","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons hide-in-mobile"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"18px","right":"18px"}}},"className":"be-cover-button","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size be-cover-button has-small-font-size"><a class="wp-block-button__link has-primary-background-color has-background" href="/contact" style="border-radius:0px;padding-top:12px;padding-right:18px;padding-bottom:12px;padding-left:18px">'.esc_html__( 'Get in touch', 'gutena' ).'    <img class="wp-image-1140" style="width: 15px;" src="'.GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
    ',
);
