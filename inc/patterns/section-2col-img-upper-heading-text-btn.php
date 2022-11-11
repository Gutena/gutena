<?php
/**
 * Gutena block pattern: Two column image, upper heading, text and button
 */
return array(
	'title'      => __( 'Two column image, upper heading, text and button', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"inherit":false,"contentSize":"1000px","type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns {"style":{"spacing":{"blockGap":"3.5rem","padding":{"right":"1.25rem","left":"1.25rem"}}}} -->
	<div class="wp-block-columns" style="padding-right:1.25rem;padding-left:1.25rem"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"align":"center","id":28,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/bigmarketing.svg" alt="'. esc_html__( 'marketing', 'gutena' ).'" class="wp-image-28"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"layout":{"contentSize":"422px","type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"lineHeight":1.3,"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
	<h6 class="has-primary-color has-text-color" style="font-style:normal;font-weight:500;line-height:1.3">'. esc_html__( "WHAT'S NEW", "gutena" ).'</h6>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"fontSize":"medium-large"} -->
	<h2 class="has-medium-large-font-size">'. esc_html__( 'The next big thing in technology', 'gutena' ).'</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"normal"} -->
	<p class="has-normal-font-size">'. esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts', 'gutena' ).'.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2.25rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2.25rem"><!-- wp:button {"backgroundColor":"quinary","textColor":"secondary","style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.4rem","left":"1.63rem","right":"1.63rem"}},"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
	<div class="wp-block-button" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-secondary-color has-quinary-background-color has-text-color has-background wp-element-button" style="padding-top:1.4rem;padding-right:1.63rem;padding-bottom:1.4rem;padding-left:1.63rem">'. esc_html__( 'Discover More', 'gutena' ).' <img class="wp-image-15" style="width: 10px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/top-right-arrow-black.svg" alt="'. esc_html__( 'Discover More', 'gutena' ).'"></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
