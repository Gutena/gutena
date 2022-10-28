<?php
/**
 * Gutena block pattern:page-single-template
 *
 */

return array(
	'title'      => __( 'single page template', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'inserter'   => false,
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"6rem"}}},"gradient":"vertical-senary-to-background","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-vertical-senary-to-background-gradient-background has-background" style="padding-top:3rem;padding-bottom:6rem"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"6rem"}}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="padding-bottom:6rem"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide"><!-- wp:image {"id":283,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="https://demo.gutena.io/creatives/wp-content/uploads/sites/9/2022/10/logo-white.svg" alt="logo" class="wp-image-283"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:navigation {"ref":7,"textColor":"white","className":"is-style-gutena-navigation-style","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"4rem"}}} /-->
		
		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:buttons {"className":"hide-in-mobile"} -->
		<div class="wp-block-buttons hide-in-mobile"><!-- wp:button {"backgroundColor":"quinary","textColor":"secondary","style":{"typography":{"fontSize":"1.0624rem","lineHeight":1.3},"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem","left":"1.5rem","right":"1.5rem"}}}} -->
		<div class="wp-block-button has-custom-font-size" style="font-size:1.0624rem;line-height:1.3"><a class="wp-block-button__link has-secondary-color has-quinary-background-color has-text-color has-background" style="padding-top:1.1rem;padding-right:1.5rem;padding-bottom:1.1rem;padding-left:1.5rem">help@gutena.io <img class="wp-image-15" style="width: 10px;" src="https://demo.gutena.io/creatives/wp-content/uploads/sites/9/2022/10/top-right-arrow-black.svg" alt="top-right-arrow-black"></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		
		
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.1rem","right":"0.8rem","bottom":"0.1rem","left":"0.8rem"}}},"backgroundColor":"white"} -->
		<div class="wp-block-group has-white-background-color has-background" style="padding-top:0.1rem;padding-right:0.8rem;padding-bottom:0.1rem;padding-left:0.8rem"><!-- wp:post-terms {"term":"category","className":"is-style-default"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5rem","bottom":"3rem"}}}} -->
		<div class="wp-block-group" style="margin-top:1.5rem;margin-bottom:3rem"><!-- wp:post-title {"style":{"typography":{"lineHeight":"1.2"}},"textColor":"white","fontSize":"huge"} /--></div>
		<!-- /wp:group -->
		
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
		<div class="wp-block-group" style="margin-bottom:3rem"><!-- wp:post-date {"textColor":"white"} /--></div>
		<!-- /wp:group -->
		<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":638} -->
		<div class="wp-block-cover" style="min-height:638px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
		<p class="has-text-align-center has-large-font-size"></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:cover -->
		</div>
		<!-- /wp:group -->
		<!-- wp:post-content {"layout":{"inherit":true}} /-->
',
);
