<?php
/**
 * Gutena block pattern:  Right text and image left aligned
 */
return array(
	'title'      => __( 'Right text and image left aligned', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern"><!-- wp:media-text {"mediaId":2388,"mediaLink":"' . GUTENA_THEME_URI . '/assets/img/common/man-smiling-min.png","mediaType":"image"} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . GUTENA_THEME_URI . '/assets/img/common/man-smiling-min.png" alt="" class="wp-image-2388 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"40px","top":"40px"}}}} -->
    <div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.25em","lineHeight":"1.9"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary","fontSize":"extra-small"} -->
    <h6 class="has-primary-color has-text-color has-extra-small-font-size" id="our-core-values" style="font-style:normal;font-weight:700;line-height:1.9;margin-bottom:10px;text-transform:uppercase;letter-spacing:0.25em">' . esc_html__( 'our core values', 'gutena' ) . '</h6>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"style":{"spacing":{"margin":{"top":"16px"}}}} -->
    <h2 id="start-your-online-business-today" style="margin-top:16px">' . esc_html__( 'The future is changing and we are a part of it', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"}}}} -->
    <div class="wp-block-group" style="padding-bottom:15px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"23px","bottom":"24px"}}}} -->
    <div class="wp-block-group" style="padding-top:23px;padding-bottom:24px"><!-- wp:paragraph -->
    <p>' . esc_html__( 'Get started swiftly & easily by importing a demo of your choice in a single click. Over 30 high quality professionally designed pre-built website concepts to choose from. Gutena is a modern business theme, that lets you build stunning high performance websites using a fully visual interface', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>' . esc_html__( 'Gutena is a popular, creative WordPress theme used by many customers across the world. From Portfolio, Photography, Agency, Blog, Architecture, Business or Shop, build beautiful websites for any purpose with ease', 'gutena' ) . '.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:media-text --></div>
    <!-- /wp:group -->',
);
