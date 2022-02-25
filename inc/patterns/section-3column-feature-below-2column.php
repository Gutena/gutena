<?php
/**
 * Gutena block pattern: Three column section with image, heading and description below two columns content
 */
return array(
	'title'      => __( '3 column section with image, heading and description below 2 column content', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"gutena-pattern gutena-h202020-b555555","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern gutena-h202020-b555555" style="padding-top:100px;padding-bottom:100px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"30px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading -->
    <h2 id="gutena-is-a-pixel-perfect-theme">'. esc_html__( 'Gutena is a pixel perfect theme', 'gutena' ).'</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9">' . esc_html__( 'Gutena WordPress theme is insanely flexible and amazingly easy to use. This alone would be enough for a 5 star rating. On top of a great tool is even better customer support', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"25px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":44,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-700x350.png" alt="'. esc_html__( 'pixel perfect', 'gutena' ).'" class="wp-image-44"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"23px","bottom":"11px"}}}} -->
    <h5 id="design" style="margin-top:23px;margin-bottom:11px">'. esc_html__( 'Design', 'gutena' ).'</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">'. esc_html__( 'Get started swiftly and easily by importing a demo of your choice in a single click. Mix & Match layouts from different demos', 'gutena' ).'.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"25px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px;padding-bottom:25px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
    <h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">'. esc_html__( 'Learn more', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="'. esc_html__( 'arrow right', 'gutena' ).'"></a></h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":46,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-700x350.png" alt="'. esc_html__( 'pixel perfect', 'gutena' ).'" class="wp-image-46"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"23px","bottom":"11px"}}}} -->
    <h5 id="design" style="margin-top:23px;margin-bottom:11px">'. esc_html__( 'Marketing', 'gutena' ).'</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">'. esc_html__( 'Get started swiftly and easily by importing a demo of your choice in a single click. Mix & Match layouts from different demos', 'gutena' ).'.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"25px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px;padding-bottom:25px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
    <h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">'. esc_html__( 'Learn more', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="'. esc_html__( 'arrow right', 'gutena' ).'"></a></h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":47,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-700x350.png" alt="'. esc_html__( 'pixel perfect', 'gutena' ).'" class="wp-image-47"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"23px","bottom":"11px"}}}} -->
    <h5 id="design" style="margin-top:23px;margin-bottom:11px">'. esc_html__( 'Development', 'gutena' ).'</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">'. esc_html__( 'Get started swiftly and easily by importing a demo of your choice in a single click. Mix & Match layouts from different demos', 'gutena' ).'.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"25px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px;padding-bottom:25px"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
    <h6 class="has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#">'. esc_html__( 'Learn more', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="'. esc_html__( 'arrow right', 'gutena' ).'"></a></h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
