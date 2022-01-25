<?php
/**
 * Gutena block pattern:Default footer
 */
return array(
	'title'      => __( 'Default footer', 'gutena' ),
	'categories' => array( 'gutena-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:separator {"color":"light-gray","align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-text-color has-background has-light-gray-background-color has-light-gray-color is-style-wide"/>
	<!-- /wp:separator -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--style--block-gap,2em)","right":"20px","left":"20px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--style--block-gap,2em);padding-right:20px;padding-left:20px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"textAlign":"left","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-small-font-size" style="line-height:1.9">  ©  '.date('Y').'. '.esc_html__( 'All Rights Reserved', 'gutena' ).'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%","className":"is-style-gutena-column-no-margin"} -->
<div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:55%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"30px"}}}} -->
<div class="wp-block-group" style="padding-right:30px"><!-- wp:image {"align":"center","id":1170,"sizeSlug":"large","linkDestination":"custom","style":{"color":{}}} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><a href="#" target="_blank" rel="nofollow noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/facebook.svg" alt="facebook" class="wp-image-1170"/></a></figure></div>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"30px"}}}} -->
<div class="wp-block-group" style="padding-right:30px"><!-- wp:image {"align":"center","id":1171,"sizeSlug":"large","linkDestination":"custom","style":{"color":{}}} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><a href="#" target="_blank" rel="nofollow noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/twitter.svg" alt="twitter" class="wp-image-1171"/></a></figure></div>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"30px"}}}} -->
<div class="wp-block-group" style="padding-right:30px"><!-- wp:image {"align":"center","id":1172,"sizeSlug":"large","linkDestination":"custom","style":{"color":{}}} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><a href="#" target="_blank" rel="nofollow noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/linkedin.svg" alt="linkedin" class="wp-image-1172"/></a></figure></div>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"align":"center","id":1173,"sizeSlug":"large","linkDestination":"custom","style":{"color":{}}} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><a href="#" target="_blank" rel="nofollow noopener"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/icons/pinterest.svg" alt="pinterest" class="wp-image-1173"/></a></figure></div>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
