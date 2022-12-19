<?php
/**
 * Title: Background color, transparent pattern image, 3 column statics.
 * Slug: gutena/sec-3col-statics
 * Categories: gutena-section
 * Block Types: core/group, core/columns
 * Keywords: section, statics
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"senary"} -->
<div class="wp-block-group alignfull has-senary-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/pattern-top.svg'; ?>","id":16,"dimRatio":0,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"2.5rem","left":"2.5rem"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--medium);padding-right:2.5rem;padding-bottom:var(--wp--preset--spacing--medium);padding-left:2.5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-16" alt="<?php esc_attr_e(  'pattern', 'gutena' ); ?>" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/pattern-top.svg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"white","layout":{"contentSize":"1000px","type":"constrained"}} -->
<div class="wp-block-group has-white-color has-text-color"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php esc_html_e( '+22k', 'gutena' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_attr_e(  'Client Retention', 'gutena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php esc_html_e( '98.5%', 'gutena' ); ?>98.5%</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_attr_e(  'Customer Satisfaction', 'gutena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php esc_html_e( '20.5%', 'gutena' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Return on Investment', 'gutena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->