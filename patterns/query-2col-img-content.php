<?php
/**
 * Title: Posts in two column layout, feature image, title, date, post excerpt category.
 * Slug: gutena/query-2col-img-content
 * Categories: gutena-query
 * Block Types: core/query
 * Keywords: blogs, posts, post excerpt
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"70px","left":"20px","right":"20px"}}},"layout":{"inherit":true,"type":"constrained","contentSize":"920px"}} -->
<div class="wp-block-group alignfull" style="padding-top:70px;padding-right:20px;padding-left:20px"><!-- wp:query {"queryId":17,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"align":"wide","layout":{"wideSize":"920px"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"bottom":"70px"},"blockGap":{"top":"70px","left":"70px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-bottom:70px"><!-- wp:column {"width":"46.5%"} -->
<div class="wp-block-column" style="flex-basis:46.5%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"450px"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"410px","align":"center"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"52.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52.5%"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"440px"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"17px","bottom":"19px"},"blockGap":"5px"}},"textColor":"secondary","layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group has-secondary-color has-text-color" style="margin-top:17px;margin-bottom:19px"><!-- wp:post-date /-->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="line-height:1.9"><?php esc_html_e( 'by', 'gutena' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eRead Article \u003cimg class=\u0022wp-image-1595\u0022 style=\u0022width: 14px\u0022 src=\u0022<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/arrow-right-black.svg'; ?>\u0022 alt=\u0022arrow-right\u0022\u003e\u003c/strong\u003e","style":{"typography":{"lineHeight":"1.9","fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"tertiary","fontSize":"normal"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"15px"}}},"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group" style="margin-top:15px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="line-height:1.9"><?php esc_html_e( 'Category', 'gutena' ); ?>: </p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"is-style-gutena-border-box-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":" "} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":" "} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"70px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:70px"><!-- wp:separator {"style":{"color":{"background":"#2527401a"}},"className":"alignfull is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background alignfull is-style-wide" style="background-color:#2527401a;color:#2527401a"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->