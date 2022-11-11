<?php
/**
 * Gutena block pattern:Header with cover hero section 
 */
return array(
	'title'      => __( 'Header with cover hero section', 'gutena' ),
	'categories' => array( 'gutena-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . GUTENA_THEME_URI . '/assets/img/icons/bg.svg","id":12,"dimRatio":0,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem"}}}} -->
        <div class="wp-block-cover alignfull is-light" style="padding-top:0rem;padding-bottom:0rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-12" alt="background" src="' . GUTENA_THEME_URI . '/assets/img/icons/bg.svg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
        <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide">
        '.(function_exists('gutena_get_pattern_content')?gutena_get_pattern_content([
            'header-with-button']):'').'
        </div>
        <!-- /wp:group -->
       
        <!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignwide">
        <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}},"layout":{"contentSize":"502px","type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:3rem;padding-bottom:3rem">
        
        <!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"fontFamily":"\u0022Outfit\u0022, sans-serif","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.05em"}},"className":"has-outfit-font-font-family","fontFamily":"outfit-font"} -->
        <p class="has-outfit-font-font-family" style="font-family:&quot;Outfit&quot;, sans-serif;font-style:normal;font-weight:600;letter-spacing:0.05em;line-height:1.3">'.esc_html__( 'MEET GUTENA THEME', 'gutena' ).'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:heading {"style":{"spacing":{"padding":{"bottom":"3rem"}}},"fontSize":"huge"} -->
        <h2 class="has-huge-font-size" style="padding-bottom:3rem">'.esc_html__( 'Build a', 'gutena' ).' <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">'.esc_html__( 'better site', 'gutena' ).'</mark> '.esc_html__( 'for your business', 'gutena' ).'.</h2>
        <!-- /wp:heading -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"1.63rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"quinary","textColor":"secondary","style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.4rem","left":"1.63rem","right":"1.63rem"}}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-quinary-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:1.4rem;padding-right:1.63rem;padding-bottom:1.4rem;padding-left:1.63rem">Discover More <img class="wp-image-15" style="width: 10px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/top-right-arrow-black.svg" alt="top-right-arrow-black"></a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/star.svg" alt="'.esc_html__( 'star', 'gutena' ).'" class="wp-image-13"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/star.svg" alt="'.esc_html__( 'star', 'gutena' ).'" class="wp-image-13"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/star.svg" alt="'.esc_html__( 'star', 'gutena' ).'" class="wp-image-13"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/star.svg" alt="'.esc_html__( 'star', 'gutena' ).'" class="wp-image-13"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/star.svg" alt="'.esc_html__( 'star', 'gutena' ).'" class="wp-image-13"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->
        
        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"has-outfit-font-font-family","fontSize":"extra-small","fontFamily":"outfit-font"} -->
        <p class="has-outfit-font-font-family has-extra-small-font-size" style="font-style:normal;font-weight:500">5/5 WordPress.org</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"id":27,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/common/creative.png" alt="'.esc_html__( 'creative', 'gutena' ).'" class="wp-image-27"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:cover --></div>
        <!-- /wp:group -->',
);
