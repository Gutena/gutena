<?php
/**
 * Gutena block pattern: Three column portfolio section with image, title and link
 */
return array(
	'title'      => __( 'Portfolio section with image, title and link (3 column)', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"backgroundColor":"quaternary","className":"gutena-pattern  gutena-link-decoration-line-none","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern gutena-link-decoration-line-none has-quaternary-background-color has-background" style="padding-top:100px;padding-bottom:100px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"700"}},"fontSize":"extra-large"} -->
    <h1 class="has-text-align-center has-extra-large-font-size" id="portfolio" style="font-style:normal;font-weight:700;line-height:1.4">'. esc_html__( 'Portfolio', 'gutena' ).'</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"},"color":{"text":"#555555"}},"fontSize":"normal"} -->
    <p class="has-text-align-center has-text-color has-normal-font-size" style="color:#555555;line-height:1.9">'. esc_html__( 'We deliver nothing but best', 'gutena' ).'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"45px"} -->
    <div style="height:45px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"35px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":64,"sizeSlug":"full","linkDestination":"custom"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-680x450.png" alt="'. esc_html__( 'Cherry', 'gutena' ).'" class="wp-image-64"/></a></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"15px"}}}} -->
    <h5 class="has-text-align-center" id="cherry" style="margin-top:15px"><a href="#">'. esc_html__( 'Cherry', 'gutena' ).'</a></h5>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
    <h6 class="has-text-align-center has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#" data-type="page" data-id="214">'. esc_html__( 'Explore now', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="'. esc_html__( 'arrow right', 'gutena' ).'"></a></h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":65,"sizeSlug":"full","linkDestination":"custom"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-680x450.png" alt="'. esc_html__( 'Doughnut', 'gutena' ).'" class="wp-image-65"/></a></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"15px"}}}} -->
    <h5 class="has-text-align-center" id="cherry" style="margin-top:15px"><a href="#">'. esc_html__( 'Doughnut', 'gutena' ).'</a></h5>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
    <h6 class="has-text-align-center has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#" data-type="page" data-id="214">'. esc_html__( 'Explore now', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="'. esc_html__( 'arrow right', 'gutena' ).'"></a></h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":70,"sizeSlug":"full","linkDestination":"custom"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-680x450.png" alt="'. esc_html__( 'Lollypop', 'gutena' ).'" class="wp-image-70"/></a></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"15px"}}}} -->
    <h5 class="has-text-align-center" id="cherry" style="margin-top:15px"><a href="#">'. esc_html__( 'Lollypop', 'gutena' ).'</a></h5>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
    <h6 class="has-text-align-center has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#" data-type="page" data-id="214">'. esc_html__( 'Explore now', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="'. esc_html__( 'arrow right', 'gutena' ).'"></a></h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"35px"} -->
    <div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"35px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":72,"sizeSlug":"full","linkDestination":"custom"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-680x450.png" alt="slice" class="wp-image-72"/></a></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"15px"}}}} -->
    <h5 class="has-text-align-center" id="cherry" style="margin-top:15px"><a href="#">Slice</a></h5>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
    <h6 class="has-text-align-center has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#" data-type="page" data-id="214">'. esc_html__( 'Explore now', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="'. esc_html__( 'arrow right', 'gutena' ).'"></a></h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":73,"sizeSlug":"full","linkDestination":"custom"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-680x450.png" alt="'. esc_html__( 'Pineapple', 'gutena' ).'" class="wp-image-73"/></a></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"15px"}}}} -->
    <h5 class="has-text-align-center" id="cherry" style="margin-top:15px"><a href="#">'. esc_html__( 'Pineapple', 'gutena' ).'</a></h5>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
    <h6 class="has-text-align-center has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#" data-type="page" data-id="214">'. esc_html__( 'Explore now', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="'. esc_html__( 'arrow right', 'gutena' ).'"></a></h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":74,"sizeSlug":"full","linkDestination":"custom"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-680x450.png" alt="'. esc_html__( 'Orange', 'gutena' ).'" class="wp-image-74"/></a></figure></div>
    <!-- /wp:image -->
    
    <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"15px"}}}} -->
    <h5 class="has-text-align-center" id="cherry" style="margin-top:15px"><a href="#">'. esc_html__( 'Orange', 'gutena' ).'</a></h5>
    <!-- /wp:heading -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"}}}} -->
    <div class="wp-block-group" style="padding-top:5px"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"small"} -->
    <h6 class="has-text-align-center has-small-font-size" id="learn-more" style="font-style:normal;font-weight:700;line-height:1.4"><a href="#" data-type="page" data-id="214">'. esc_html__( 'Explore now', 'gutena' ).' <img class="wp-image-1595" style="width: 14px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg" alt="'. esc_html__( 'arrow right', 'gutena' ).'"></a></h6>
    <!-- /wp:heading --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
