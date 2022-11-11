<?php
/**
 * Gutena block pattern:  Two columns text, button, image animation and quote
 */
return array(
	'title'      => __( 'Two columns text, button, image animation and quote', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"1.25rem","left":"1.25rem"},"margin":{"top":"0rem","bottom":"0rem"}}},"backgroundColor":"quaternary","layout":{"inherit":false,"contentSize":"1000px","type":"constrained"}} -->
    <div class="wp-block-group alignfull has-quaternary-background-color has-background" style="margin-top:0rem;margin-bottom:0rem;padding-top:var(--wp--preset--spacing--medium);padding-right:1.25rem;padding-bottom:var(--wp--preset--spacing--medium);padding-left:1.25rem"><!-- wp:columns {"style":{"spacing":{"blockGap":"7rem"}}} -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"layout":{"contentSize":"411px","type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading {"fontSize":"medium-large"} -->
    <h2 class="has-medium-large-font-size">' . esc_html__( 'Our mission is to power the future', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"fontSize":"normal"} -->
    <p class="has-normal-font-size">' . esc_html__( 'Far far away, behind the word mountains, far from the countries vokalia and consonantia there live the blind texts. Separated they live in Bookmarksgrove right at the coast', 'gutena' ) . '.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2.25rem"}}}} -->
    <div class="wp-block-buttons" style="margin-top:2.25rem"><!-- wp:button {"backgroundColor":"quinary","textColor":"secondary","style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.4rem","left":"1.63rem","right":"1.63rem"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-quinary-background-color has-text-color has-background wp-element-button" style="padding-top:1.4rem;padding-right:1.63rem;padding-bottom:1.4rem;padding-left:1.63rem">' . esc_html__( 'Discover More', 'gutena' ) . ' <img class="wp-image-15" style="width: 10px;" src="' . GUTENA_THEME_URI . '/assets/img/icons/top-right-arrow-black.svg" alt="' . esc_html__( 'Discover More', 'gutena' ) . '"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"layout":{"contentSize":"465px","type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:cover {"url":"' . GUTENA_THEME_URI . '/assets/img/common/work.png","id":29,"dimRatio":0,"minHeight":300,"contentPosition":"center center"} -->
    <div class="wp-block-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-29" alt="' . esc_html__( 'work', 'gutena' ) . '" src="' . GUTENA_THEME_URI . '/assets/img/common/work.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:image {"align":"center","id":31,"sizeSlug":"large","linkDestination":"none","className":"is-style-gutena-image-wave-animation"} -->
    <figure class="wp-block-image aligncenter size-large is-style-gutena-image-wave-animation"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/play.svg" alt="' . esc_html__( 'play', 'gutena' ) . '" class="wp-image-31"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover -->
    
    <!-- wp:columns {"verticalAlignment":"top","isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"2.8rem"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top is-not-stacked-on-mobile" style="margin-top:2.8rem"><!-- wp:column {"verticalAlignment":"top","width":"22%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:22%"><!-- wp:image {"id":23,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/team-1.svg" alt="' . esc_html__( 'team', 'gutena' ) . '" class="wp-image-23"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"78%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:78%"><!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"400"}}} -->
    <h5 style="font-style:normal;font-weight:400;line-height:1.6">“' . esc_html__( "I really recommend this Theme because It's coded well and light", "gutena" ) . '.”</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0.8rem"}}},"fontFamily":"outfit-font"} -->
    <p class="has-outfit-font-font-family" style="margin-top:0.8rem;font-style:normal;font-weight:500;line-height:1.6">' . esc_html__( 'Zack Miller', 'gutena' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"textColor":"primary","fontSize":"tiny"} -->
    <p class="has-primary-color has-text-color has-tiny-font-size">' . esc_html__( 'Founder', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
