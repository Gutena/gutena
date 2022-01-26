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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull gutena-pattern" style="padding-top:15px;padding-bottom:15px;padding-right:20px;padding-left:20px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"16px"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:16px"><!-- wp:site-title {"level":0,"textAlign":"left","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-small-font-size" style="line-height:1.9">  ©  '.date('Y').'. '.esc_html__( 'All Rights Reserved', 'gutena' ).'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%","className":"is-style-gutena-column-no-margin"} -->
<div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:55%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%">
<!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#575B7A","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"29px"}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook","label":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter","label":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin","label":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest","label":"pinterest"} /--></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
