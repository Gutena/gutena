<?php
/**
 * Title:  Background color, heading, image and play icon with animation.
 * Slug: gutena/sec-bg-color-heading-img-anim-play-icon
 * Categories: gutena-section
 * Block Types: core/group, core/cover
 * Keywords: section, animation
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"1.25rem","left":"1.25rem"},"margin":{"top":"0rem","bottom":"0rem"}}},"backgroundColor":"quaternary","layout":{"inherit":false,"contentSize":"1000px","type":"constrained"}} -->
<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="margin-top:0rem;margin-bottom:0rem;padding-top:var(--wp--preset--spacing--medium);padding-right:1.25rem;padding-bottom:var(--wp--preset--spacing--medium);padding-left:1.25rem"><!-- wp:group {"layout":{"contentSize":"970px","type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"4rem"}}},"fontSize":"medium-large"} -->
<h2 class="has-text-align-center has-medium-large-font-size" style="margin-bottom:4rem"><?php esc_html_e( 'Start Gutena Journey..', 'gutena' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:cover {"url":"<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/common/work.png'; ?>","id":29,"dimRatio":0,"minHeight":580,"contentPosition":"center center","isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-29" alt="<?php esc_attr_e(  'work', 'gutena' ); ?>" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/common/work.png'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","id":31,"sizeSlug":"large","linkDestination":"none","className":"is-style-gutena-image-wave-animation"} -->
<figure class="wp-block-image aligncenter size-large is-style-gutena-image-wave-animation"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/play.svg'; ?>" alt="<?php esc_attr_e(  'play', 'gutena' ); ?>" class="wp-image-31"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->