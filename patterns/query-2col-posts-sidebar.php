<?php
/**
 * Title: Blog posts with sidebar.
 * Slug: gutena/query-2col-posts-sidebar
 * Categories: gutena-query
 * Block Types: core/query
 * Keywords: sidebar, blogs, posts, post excerpt
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"gutena-pattern has-background","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull gutena-pattern has-background" style="padding-top:100px;padding-bottom:100px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"100px"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"align":"full","className":"gutena-pattern","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull gutena-pattern"><!-- wp:query {"queryId":2,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"wideSize":"732px"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained","contentSize":"675px"}} -->
<div class="wp-block-group" style="margin-top:40px;margin-bottom:var(--wp--preset--spacing--medium)">
<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"#21222f"}}},"color":{"text":"#21222f"}}} /-->

<!-- wp:group {"style":{"color":{"text":"#21222f"},"spacing":{"margin":{"top":"17px","bottom":"19px"},"blockGap":"5px"}},"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group has-text-color" style="color:#21222f;margin-top:17px;margin-bottom:19px"><!-- wp:post-date /-->

<!-- wp:paragraph {"style":{"color":{"text":"#21222f"},"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:#21222f;line-height:1.9"><?php esc_html_e( 'by', 'gutena' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eRead Article \u003cimg class=\u0022wp-image-1595\u0022 style=\u0022width: 14px\u0022 src=\u0022<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/arrow-right-black.svg'; ?>\u0022 alt=\u0022arrow-right\u0022\u003e\u003c/strong\u003e","style":{"typography":{"lineHeight":"1.9","fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"text":"#484952","fontSize":"normal"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"15px"}}},"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group" style="margin-top:15px"><!-- wp:paragraph {"style":{"color":{"text":"#21222f"},"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:#21222f;line-height:1.9"><?php esc_html_e( 'Category', 'gutena' ); ?>: </p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"is-style-gutena-border-box-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":" "} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":" "} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%">
<?php 
//include sidebar pattern
if ( file_exists( GUTENA_THEME_DIR .'/patterns/template-part-sidebar.php' ) ) {
    require GUTENA_THEME_DIR .'/patterns/template-part-sidebar.php';
}
?>
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->