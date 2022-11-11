<?php
/**
 * Gutena block pattern: Two column features detail with icon and image below heading
 */
return array(
	'title'      => __( 'Two column features detail with icon and image below heading', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"senary","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-senary-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . GUTENA_THEME_URI . '/assets/img/icons/pattern-bottom.svg","id":36,"dimRatio":0,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"2.5rem","left":"2.5rem"}}}} -->
	<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--medium);padding-right:2.5rem;padding-bottom:var(--wp--preset--spacing--medium);padding-left:2.5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-36" alt="'. esc_html__( 'Gutena', 'background' ).'" src="' . GUTENA_THEME_URI . '/assets/img/icons/pattern-bottom.svg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","layout":{"inherit":false,"contentSize":"1000px","type":"constrained"}} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3rem"}}},"layout":{"contentSize":"481px","type":"constrained"}} -->
	<div class="wp-block-group" style="margin-bottom:3rem"><!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"medium-large"} -->
	<h2 class="has-text-align-center has-white-color has-text-color has-medium-large-font-size">'. esc_html__( 'How our A.I works on your applications', 'gutena' ).'</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"40%","layout":{"contentSize":"370px"}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"3.5rem"}},"layout":{"contentSize":"370px","type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":"1.25rem"}}} -->
	<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"25px"} -->
	<div class="wp-block-column" style="flex-basis:25px"><!-- wp:image {"id":30,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/check.svg" alt="'. esc_html__( 'check', 'gutena' ).'" class="wp-image-30"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":""} -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"white"} -->
	<h4 class="has-white-color has-text-color">'. esc_html__( 'Cutting Edge', 'gutena' ).'</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"white"} -->
	<p class="has-white-color has-text-color">'. esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and there live the blind texts', 'gutena' ).'.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":"1.25rem"}}} -->
	<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"25px"} -->
	<div class="wp-block-column" style="flex-basis:25px"><!-- wp:image {"id":30,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/check.svg" alt="'. esc_html__( 'check', 'gutena' ).'" class="wp-image-30"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":""} -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"white"} -->
	<h4 class="has-white-color has-text-color">'. esc_html__( 'Futuristic Design', 'gutena' ).'</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"white"} -->
	<p class="has-white-color has-text-color">'. esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and there live the blind texts', 'gutena' ).'.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:image {"align":"center","id":29,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/reading.svg" alt="'. esc_html__( 'reading', 'gutena' ).'" class="wp-image-29"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->',
);
