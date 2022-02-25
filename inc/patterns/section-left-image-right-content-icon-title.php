<?php
/**
 * Gutena block pattern: Two column section left image right content with icon title groups
 */
return array(
	'title'      => __( 'Left image right content with icon title groups', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"90px"}}},"className":"gutena-pattern gutena-h202020-b555555"} -->
    <div class="wp-block-group alignwide gutena-pattern gutena-h202020-b555555" style="padding-top:50px;padding-bottom:90px"><!-- wp:columns {"style":{"spacing":{"blockGap":"80px"}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:image {"id":117,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/gutena-placeholder-1080x1020.jpg" alt="'. esc_html__( 'work', 'gutena' ).'" class="wp-image-117"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"25px"}}}} -->
    <h2 id="why-gutena-is-the-best-theme-in-the-market" style="margin-bottom:25px">'. esc_html__( 'Why gutena is the best theme in the Market', 'gutena' ).'?</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"normal"} -->
    <p class="has-normal-font-size" style="line-height:1.9">'. esc_html__( 'Marketing experts in your niche with proven ROI results, backed by unbiased monitoring. Consistent unbiased monitoring', 'gutena' ).'.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"style":{"color":{"text":"#202020"},"spacing":{"padding":{"top":"5px","bottom":"30px"}}}} -->
    <div class="wp-block-group has-text-color" style="color:#202020;padding-top:5px;padding-bottom:30px"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}}} -->
    <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-right:10px;padding-bottom:15px"><!-- wp:image {"id":1598,"width":20,"height":15,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#202020","#202020"]}}} -->
    <figure class="wp-block-image size-large is-resized"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/aspect-ratio.svg" alt="'. esc_html__( 'Digital Marketing', 'gutena' ).'" class="wp-image-1598" width="20" height="15"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>'. esc_html__( 'Digital Marketing', 'gutena' ).'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-right:10px;padding-bottom:15px"><!-- wp:image {"id":1602,"width":16,"height":16,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#202020","#202020"]}}} -->
    <figure class="wp-block-image size-large is-resized"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/user.svg" alt="'. esc_html__( 'Tax Planning', 'gutena' ).'" class="wp-image-1602" width="16" height="16"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>'. esc_html__( 'Website Design', 'gutena' ).'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-right:10px;padding-bottom:15px"><!-- wp:image {"id":1601,"width":22,"height":12,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#202020","#202020"]}}} -->
    <figure class="wp-block-image size-large is-resized"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/node-link.svg" alt="'. esc_html__( 'PPC Advertising', 'gutena' ).'" class="wp-image-1601" width="22" height="12"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>'. esc_html__( 'Mobile App Design', 'gutena' ).'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-right:10px;padding-bottom:15px"><!-- wp:image {"id":1603,"width":22,"height":18,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#202020","#202020"]}}} -->
    <figure class="wp-block-image size-large is-resized"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/desktop-play-button.svg" alt="'. esc_html__( 'Online Investment', 'gutena' ).'" class="wp-image-1603" width="22" height="18"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>'. esc_html__( 'Logo Design', 'gutena' ).'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-right:10px;padding-bottom:15px"><!-- wp:image {"id":1599,"width":20,"height":15,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#202020","#202020"]}}} -->
    <figure class="wp-block-image size-large is-resized"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/subway.svg" alt="'. esc_html__( 'Ecommerce', 'gutena' ).'" class="wp-image-1599" width="20" height="15"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>'. esc_html__( 'Software Development', 'gutena' ).'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px","right":"10px"}}}} -->
    <div class="wp-block-group" style="padding-right:10px;padding-bottom:15px"><!-- wp:image {"id":1600,"width":22,"height":17,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#202020","#202020"]}}} -->
    <figure class="wp-block-image size-large is-resized"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/open-book.svg" alt="'. esc_html__( 'Hosting Service', 'gutena' ).'" class="wp-image-1600" width="22" height="17"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph -->
    <p>'. esc_html__( 'Print and Videos', 'gutena' ).'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"orange","style":{"border":{"radius":"0px"},"typography":{"fontSize":"17px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"27px","right":"27px"}}},"className":"be-cover-button"} -->
    <div class="wp-block-button has-custom-font-size be-cover-button" style="font-size:17px"><a class="wp-block-button__link has-orange-background-color has-background" href="#" style="border-radius:0px;padding-top:13px;padding-right:27px;padding-bottom:13px;padding-left:27px">'. esc_html__( 'Get Started', 'gutena' ).'    <img class="wp-image-1140" style="width: 15px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/arrow-right.svg" alt="'. esc_html__( 'Get Started', 'gutena' ).'"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
