<?php
/**
 * Title: Single Post
 * Slug: gutena/template-part-sidebar
 * Categories: gutena-pages
 * inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search..","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"is-style-gutena-search-background-transparent"} /-->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"62px","bottom":"14px"}}}} -->
<h5 id="categories" style="margin-top:62px;margin-bottom:14px"><?php esc_html_e( "Categories", "gutena" ) ; ?></h5>
<!-- /wp:heading -->

<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
<hr class="wp-block-separator has-css-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"typography":{"lineHeight":"3"},"spacing":{"padding":{"top":"15px"}}},"textColor":"secondary","fontSize":"small"} -->
<div class="wp-block-group has-secondary-color has-text-color has-small-font-size" style="padding-top:15px;line-height:3"><!-- wp:categories {"className":"is-style-gutena-categories-style-none"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"80px","bottom":"14px"}}}} -->
<h5 id="tags" style="margin-top:80px;margin-bottom:14px"><?php esc_html_e( "Tags", "gutena" ) ; ?></h5>
<!-- /wp:heading -->

<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
<hr class="wp-block-separator has-css-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"typography":{"lineHeight":"1.25"},"spacing":{"padding":{"top":"20px"}}},"textColor":"tertiary","layout":{"inherit":true,"type":"constrained"},"fontSize":"tiny"} -->
<div class="wp-block-group has-tertiary-color has-text-color has-tiny-font-size" style="padding-top:20px;line-height:1.25"><!-- wp:tag-cloud {"numberOfTags":20,"className":"is-style-outline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->