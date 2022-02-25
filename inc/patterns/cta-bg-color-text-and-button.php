<?php
/**
 * Gutena block pattern:  Call to action with background color, text and button
 */
return array(
	'title'      => __( 'Call to action with background color, text and button', 'gutena' ),
	'categories' => array( 'gutena-cta' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"orange","className":"gutena-pattern gutena-h202020-b555555","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull gutena-pattern gutena-h202020-b555555 has-orange-background-color has-background" style="padding-top:100px;padding-bottom:100px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"35px"}}} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4"}},"textColor":"white","fontSize":"medium-large"} -->
	<h2 class="has-white-color has-text-color has-medium-large-font-size" id="convinced-well-let-s-have-a-talk" style="line-height:1.4">' . esc_html__('Convinced ? Well Let’s have a talk', 'gutena') . '.</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}},"color":{"text":"#202020"}},"className":"be-cover-button"} -->
	<div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-white-background-color has-text-color has-background" style="border-radius:0px;color:#202020;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__('Get Started', 'gutena') . '    <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="' . esc_html__('Get Started', 'gutena') . '"></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
