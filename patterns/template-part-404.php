<?php
/**
 * Title: 404 Page with search.
 * Slug: gutena/template-part-404
 * Categories: gutena-pages
 * inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"170px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:100px;padding-bottom:170px"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="has-text-align-center" id="oops-that-page-can-t-be-found"><?php esc_html_e( "404 PAGE NOT FOUND", "gutena" ) ; ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"normal"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-normal-font-size" style="line-height:1.9"><?php esc_html_e( "It seems we can’t find what you’re looking for. Perhaps searching can help.", "gutena" ) ; ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"<?php esc_html_e( "Search", "gutena" ) ; ?>","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->
</div>
<!-- /wp:group -->