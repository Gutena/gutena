<?php
/**
 * Gutena block pattern:Header with logo, static menu and button
 */
return array(
	'title'      => __( 'Header with logo, static menu and button', 'gutena' ),
	'categories' => array( 'gutena-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","right":"20px","left":"18px"}}},"className":"gutena-pattern gutena-header-with-button gutena-link-decoration-line-none","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull gutena-pattern gutena-header-with-button gutena-link-decoration-line-none" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:18px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group">
'.( ( function_exists('has_custom_logo') && has_custom_logo() ) ? '<!-- wp:site-logo /-->': '<!-- wp:image {"id":11,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="'.GUTENA_THEME_URI . '/assets/img/icons/gutena-symbol.svg" alt="logo" class="wp-image-11"/></figure>
<!-- /wp:image -->
<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2","fontSize":"28px"}}} /-->' ).'
</div>
<!-- /wp:group -->

<!-- wp:navigation {"className":"is-style-gutena-navigation-style","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","flexWrap":"wrap"},"style":{"typography":{"lineHeight":"1.2"},"spacing":{"blockGap":"34px"}},"fontSize":"small"} -->
	<!-- wp:navigation-link {"label":"home","url":"#","kind":"custom","isTopLevelLink":true} /-->
	<!-- wp:navigation-link {"label":"Company","url":"#","kind":"custom","isTopLevelLink":true} /-->
	<!-- wp:navigation-link {"label":"Service","url":"#","kind":"custom","isTopLevelLink":true} /-->
	<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
	<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"hide-in-mobile","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons hide-in-mobile"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"18px","right":"18px"}}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link" href="/contact" style="border-radius:0px;padding-top:12px;padding-right:18px;padding-bottom:12px;padding-left:18px">'.esc_html__( 'Get in touch', 'gutena' ).'    <img class="wp-image-1140" style="width: 15px;" src="'.GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="'.esc_html__( 'contact us', 'gutena' ).'"></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
    ',
);
