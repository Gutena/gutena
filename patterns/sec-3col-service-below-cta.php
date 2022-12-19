<?php
/**
 * Title: Background color, transparent pattern image, 3 feature column with icon, title and text below call to action section
 * Slug: gutena/sec-3col-service-below-cta
 * Categories: gutena-section
 * Block Types: core/group, core/cover, core/columns
 * Keywords: section
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"senary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-senary-background-color has-text-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/pattern-top.svg'; ?>","id":16,"dimRatio":0,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-16" alt="<?php esc_attr_e(  'pattern', 'gutena' ); ?>" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/pattern-top.svg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"3rem","padding":{"bottom":"5rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-bottom:5rem"><!-- wp:heading {"textColor":"white","fontSize":"medium-large"} -->
    <h2 class="has-white-color has-text-color has-medium-large-font-size"><?php esc_html_e( 'Gutena is an awesome', 'gutena' ); ?><br><?php esc_html_e( 'WordPress Theme', 'gutena' ); ?></h2>
    <!-- /wp:heading -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"quinary","textColor":"secondary","style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.4rem","left":"1.63rem","right":"1.63rem"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-quinary-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:1.4rem;padding-right:1.63rem;padding-bottom:1.4rem;padding-left:1.63rem"><?php esc_html_e( 'Discover More', 'gutena' ); ?> <img class="wp-image-15" style="width: 10px;" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/top-right-arrow-black.svg'; ?>" alt="<?php esc_attr_e(  'Discover More', 'gutena' ); ?>"></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"5.5rem","left":"8.5rem"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom"} -->
    <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"layout":{"contentSize":"262px","type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":24,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image  size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/marketing.svg'; ?>" alt="<?php esc_attr_e(  'marketing', 'gutena' ); ?>" class="wp-image-24"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"2.5rem"}}},"textColor":"background"} -->
    <h5 class="has-background-color has-text-color" style="margin-top:2.5rem"><?php esc_html_e( 'Marketing', 'gutena' ); ?></h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1rem"}}},"textColor":"white"} -->
    <p class="has-white-color has-text-color" style="margin-top:1rem"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia', 'gutena' ); ?>.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"bottom"} -->
    <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"layout":{"contentSize":"262px","type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":25,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image  size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/consulting.svg'; ?>" alt="<?php esc_attr_e(  'consulting', 'gutena' ); ?>" class="wp-image-25"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"2.5rem"}}},"textColor":"white"} -->
    <h5 class="has-white-color has-text-color" style="margin-top:2.5rem"><?php esc_html_e( 'Consulting', 'gutena' ); ?></h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1rem"}}},"textColor":"white"} -->
    <p class="has-white-color has-text-color" style="margin-top:1rem"><?php esc_html_e( 'A small river named Duden flows by their place and supplies it with the necessary regelialia', 'gutena' ); ?>.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"bottom"} -->
    <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"layout":{"contentSize":"262px","type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":26,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image  size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/analytics.svg'; ?>" alt="<?php esc_attr_e(  'analytics', 'gutena' ); ?>" class="wp-image-26"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"2.5rem"}}},"textColor":"white"} -->
    <h5 class="has-white-color has-text-color" style="margin-top:2.5rem"><?php esc_html_e( 'Analytics', 'gutena' ); ?></h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1rem"}}},"textColor":"white"} -->
    <p class="has-white-color has-text-color" style="margin-top:1rem"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia', 'gutena' ); ?>.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:group -->