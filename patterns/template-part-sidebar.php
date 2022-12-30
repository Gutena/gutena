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

<!-- wp:group {"style":{"color":{"text":"#21222f"},"typography":{"lineHeight":"3"},"spacing":{"padding":{"top":"15px"}}},"fontSize":"small"} -->
<div class="wp-block-group has-text-color has-small-font-size" style="color:#21222f;padding-top:15px;line-height:3"><!-- wp:categories {"className":"is-style-gutena-categories-style-none"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"80px","bottom":"14px"}}}} -->
<h5 id="tags" style="margin-top:80px;margin-bottom:14px"><?php esc_html_e( "Tags", "gutena" ) ; ?></h5>
<!-- /wp:heading -->

<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
<hr class="wp-block-separator has-css-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"color":{"text":"#484952"},"typography":{"lineHeight":"1.25"},"spacing":{"padding":{"top":"20px"}}},"layout":{"inherit":true,"type":"constrained"},"fontSize":"tiny"} -->
<div class="wp-block-group has-text-color has-tiny-font-size" style="color:#484952;padding-top:20px;line-height:1.25"><!-- wp:tag-cloud {"numberOfTags":20,"className":"is-style-outline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->