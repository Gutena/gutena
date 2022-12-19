<?php
/**
 * Title: Background color, transparent pattern image, heading and button arranged vertically.
 * Slug: gutena/cta-bg-color-img-column-heading-btn
 * Categories: gutena-cta
 * Block Types: core/group
 * Keywords: call to action
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"senary"} -->
<div class="wp-block-group alignfull has-senary-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/pattern-top.svg'; ?>","id":16,"dimRatio":0,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"2.5rem","left":"2.5rem"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--medium);padding-right:2.5rem;padding-bottom:var(--wp--preset--spacing--medium);padding-left:2.5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-16" alt="<?php esc_attr_e(  'pattern', 'gutena' ); ?>" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/pattern-top.svg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"28px"}},"layout":{"inherit":false,"contentSize":"527px","type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"medium-large"} -->
<h2 class="has-text-align-center has-white-color has-text-color has-medium-large-font-size"><?php esc_html_e( 'Gutena is a Blockbased WordPress theme.', 'gutena' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"quinary","textColor":"secondary","style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.4rem","left":"1.63rem","right":"1.63rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-quinary-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:1.4rem;padding-right:1.63rem;padding-bottom:1.4rem;padding-left:1.63rem"><?php esc_html_e( 'Discover More', 'gutena' ); ?> <img class="wp-image-15" style="width: 10px;" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/top-right-arrow-black.svg'; ?>" alt="<?php esc_attr_e(  'Discover More', 'gutena' ); ?>"></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->