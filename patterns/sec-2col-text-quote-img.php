<?php
/**
 * Title: Background color, 2 column, heading, text, avatar quote and image.
 * Slug: gutena/sec-2col-text-quote-img
 * Categories: gutena-section
 * Block Types: core/group, core/columns
 * Keywords: section, quote
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#e2f2ef"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"1.25rem","left":"1.25rem"},"margin":{"top":"0rem","bottom":"0rem"}}},"layout":{"inherit":false,"contentSize":"1107px","type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#e2f2ef;margin-top:0rem;margin-bottom:0rem;padding-top:var(--wp--preset--spacing--medium);padding-right:1.25rem;padding-bottom:var(--wp--preset--spacing--medium);padding-left:1.25rem"><!-- wp:columns {"style":{"spacing":{"blockGap":"7rem"}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"layout":{"contentSize":"448px","type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium-large"} -->
<h2 class="has-medium-large-font-size"><?php esc_html_e( 'Pride ourselves on great service', 'gutena' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts separated they live in Bookmarksgrove.', 'gutena' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"4rem"},"blockGap":{"top":"17px","left":"17px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:4rem"><!-- wp:column {"verticalAlignment":"center","width":"100px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100px"><!-- wp:image {"align":"center","id":23,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/team-1.svg'; ?>" alt="<?php esc_attr_e(  'team', 'gutena' ); ?>" class="wp-image-23"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"225px"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:225px"><!-- wp:group {"style":{"spacing":{"blockGap":"11px"}}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"400"}}} -->
<h5 style="font-style:normal;font-weight:400;line-height:1.6"><?php esc_html_e( 'Far far away, behind the word mountains.', 'gutena' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#21222f"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:#21222f"><?php esc_html_e( 'Vikas Singhal', 'gutena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"align":"center","id":882,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/message.svg'; ?>" alt="<?php esc_attr_e(  'message', 'gutena' ); ?>" class="wp-image-882"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->