<?php
/**
 * Gutena block pattern:Footer four column with social icons
 */
return array(
	'title'      => __( 'Footer four column with social icons', 'gutena' ),
	'categories' => array( 'gutena-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"20px","left":"20px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull gutena-pattern" style="padding-right:20px;padding-left:20px">
	
	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"65px","bottom":"50px"},"blockGap":"50px"}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:65px;padding-bottom:50px"><!-- wp:column {"width":"30%"} -->
	<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":3} -->
	<h3 id="guten">Gutena</h3>
	<!-- /wp:heading -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"26px","bottom":"16px","right":"20px"}}}} -->
	<div class="wp-block-group" style="padding-top:26px;padding-right:20px;padding-bottom:16px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.9">'.esc_html__( 'Get started swiftly and easily by importing a demo of your choice in a single click. Build your website using a fully visual interface', 'gutena' ).'.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
	<h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">'.esc_html__( 'Learn more', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="arrow-right"></a></h6>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"20%","textColor":"secondary"} -->
	<div class="wp-block-column has-secondary-color has-text-color" style="flex-basis:20%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"20px","top":"12px"}}}} -->
	<h6 id="quick-links" style="margin-top:12px;margin-bottom:20px">'.esc_html__( 'Quick Links', 'gutena' ).'</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.7"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:2.7"><a href="#">'.esc_html__( 'Company', 'gutena' ).'</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.7"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:2.7"><a href="#">'.esc_html__( 'Team', 'gutena' ).'</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.7"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:2.7"><a href="#">'.esc_html__( 'Pricing', 'gutena' ).'</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.7"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:2.7"><a href="#">'.esc_html__( 'Blog', 'gutena' ).'</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"20%","textColor":"secondary"} -->
	<div class="wp-block-column has-secondary-color has-text-color" style="flex-basis:20%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"20px","top":"12px"}}}} -->
	<h6 id="quick-links" style="margin-top:12px;margin-bottom:20px">'.esc_html__( 'Resources', 'gutena' ).'</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.7"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:2.7"><a href="#">'.esc_html__( 'Services', 'gutena' ).'</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.7"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:2.7"><a href="#">'.esc_html__( "FAQ’s", 'gutena' ).'</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.7"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:2.7"><a href="#">'.esc_html__( 'Press Kit', 'gutena' ).'</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.7"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:2.7"><a href="#">'.esc_html__( 'Careers', 'gutena' ).'</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"30%","textColor":"secondary"} -->
	<div class="wp-block-column has-secondary-color has-text-color" style="flex-basis:30%"><!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"27px","top":"12px"}}}} -->
	<h6 id="quick-links" style="margin-top:12px;margin-bottom:27px">Get in touch</h6>
	<!-- /wp:heading -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"45px","right":"15px"}}}} -->
	<div class="wp-block-group" style="padding-right:15px;padding-bottom:45px"><!-- wp:image {"id":1614,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/location.svg" alt="location" class="wp-image-1614"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
	<p style="font-size:14px;line-height:1.6">780, HSR Layout<br> 23A Cross, 8B Main <br> Sector 7, Bangalore 560102</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1px","bottom":"1px"}}},"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group" style="padding-top:1px;padding-bottom:1px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"15px","bottom":"15px"}}}} -->
	<div class="wp-block-group" style="padding-right:15px;padding-bottom:15px;"><!-- wp:image {"id":1615,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/phone-call.svg" alt="contact" class="wp-image-1615"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
	<p style="font-size:14px;line-height:1.6">6547 547 897</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"15px","bottom":"15px"}}}} -->
	<div class="wp-block-group" style="padding-right:15px;padding-bottom:15px;"><!-- wp:image {"id":1616,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#3F6DE4","#3F6DE4"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/email.svg" alt="email" class="wp-image-1616"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
	<p style="font-size:14px;line-height:1.6">Hello@example.com</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"color":"light-gray","align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-background has-light-gray-background-color has-light-gray-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:15px;padding-bottom:15px"><!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"16px"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
	<div class="wp-block-group alignwide" style="padding-top:16px"><!-- wp:site-title {"level":0,"textAlign":"left","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} /-->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"small"} -->
	<p class="has-text-align-center has-secondary-color has-text-color has-small-font-size" style="line-height:1.9">© '.date('Y').'. '.esc_html__( 'All Rights Reserved', 'gutena' ).'</p>
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
