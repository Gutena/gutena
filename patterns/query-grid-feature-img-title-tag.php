<?php
/**
 * Title: Posts in grid layout, feature image, category tag and title.
 * Slug: gutena/query-grid-feature-img-title-tag
 * Categories: gutena-query
 * Block Types: core/query
 * Keywords: blogs, posts, grid
 */
?>
<!-- wp:query {"query":{"perPage":"6","pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"senary"} -->
<div class="wp-block-group has-senary-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":534,"contentPosition":"bottom center"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="min-height:534px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","right":"1.5rem","bottom":"1.5rem","left":"1.9rem"}}},"backgroundColor":"white"} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.9rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1px","right":"12px","bottom":"1px","left":"12px"}}},"backgroundColor":"quaternary","layout":{"type":"default"}} -->
<div class="wp-block-group has-quaternary-background-color has-background" style="padding-top:1px;padding-right:12px;padding-bottom:1px;padding-left:12px"><!-- wp:post-terms {"term":"category","textColor":"senary","className":"is-style-default"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
<div class="wp-block-group" style="margin-top:1rem"><!-- wp:post-title {"isLink":true,"textColor":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0.8rem"}}}} -->
<div class="wp-block-group" style="margin-top:0.8rem"><!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem"}}}} -->
<div class="wp-block-group" style="padding-top:6rem"><!-- wp:query-pagination {"align":"center","className":"is-style-gutena-border-box-pagination"} -->
<!-- wp:query-pagination-numbers /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"<?php esc_html_e( 'Add text or blocks that will display when the query returns no results.', 'gutena' ); ?>"} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
