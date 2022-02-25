<?php
/**
 * Gutena block pattern:  section featured boxes heading with button
 */
return array(
	'title'      => __( 'Featured Boxes with heading and button', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide gutena-pattern" style="padding-top:100px;padding-bottom:100px"><!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.9"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary","fontSize":"extra-small"} -->
	<h6 class="has-primary-color has-text-color has-extra-small-font-size" id="our-services" style="font-style:normal;font-weight:700;line-height:1.9;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'OUR SERVICES', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
	<div class="wp-block-column" style="flex-basis:45%"><!-- wp:heading -->
	<h2 id="scale-your-business-using-our-technology">' . esc_html__( 'Scale your business using our technology', 'gutena' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top","width":"55%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:55%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"20px"}}}} -->
	<div class="wp-block-buttons" style="margin-top:20px"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px"},"typography":{"fontSize":"16px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
	<div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:16px"><a class="wp-block-button__link has-primary-background-color has-background" href="#" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">' . esc_html__( 'Get Started', 'gutena' ) . '    <img class="wp-image-1594" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="arrow-right"></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1598,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/aspect-ratio.svg" alt="Digital Marketing" class="wp-image-1598"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Digital Marketing', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1599,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/subway.svg" alt="Ecommerce" class="wp-image-1599"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Ecommerce', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1600,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/open-book.svg" alt="Hosting Service" class="wp-image-1600"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Hosting Service', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1601,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/node-link.svg" alt="PPC Advertising" class="wp-image-1601"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'PPC Advertising', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1602,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/user.svg" alt="Tax Planning" class="wp-image-1602"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Tax Planning', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"45px","right":"35px","bottom":"40px","left":"40px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow"} -->
	<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:45px;padding-right:35px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":1603,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/desktop-play-button.svg" alt="Online Investment" class="wp-image-1603"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"22px","bottom":"12px"}}}} -->
	<h6 id="digital-marketing" style="margin-top:22px;margin-bottom:12px">' . esc_html__( 'Online Investment', 'gutena' ) . '</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Gutena is flexible and amazingly easy to use. This alone would be enough for a 5 star rating', 'gutena' ) . '.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px"}}}} -->
	<div class="wp-block-group" style="padding-top:32px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">' . esc_html__( 'Learn more', 'gutena' ) . ' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
