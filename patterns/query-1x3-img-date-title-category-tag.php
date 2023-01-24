<?php
/**
 * Title: Latest posts in 3 column with feature image, date, title and category tag.
 * Slug: gutena/query-1x3-img-date-title-category-tag
 * Categories: gutena-query
 * Block Types: core/query
 * Keywords: Latest posts
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"1.25rem","left":"1.25rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:1.25rem;padding-bottom:var(--wp--preset--spacing--medium);padding-left:1.25rem"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
	<!-- wp:group {"style":{"color":{"background":"#e2f2ef"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group  has-background" style="background-color:#e2f2ef;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":280,"isDark":false,"className":"is-style-gutena-single-post-feature-image"} -->
<div class="wp-block-cover is-light is-style-gutena-single-post-feature-image" style="min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size"></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.9rem"}}}} -->
	<div class="wp-block-group" style="padding-top:1.9rem"><!-- wp:post-date /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"15px","bottom":"20px"}}}} -->
	<div class="wp-block-group" style="margin-top:15px;margin-bottom:20px"><!-- wp:post-title {"isLink":true} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"color":{"background":"#e2f2ef"},"spacing":{"padding":{"top":"1px","right":"12px","bottom":"1px","left":"12px"}}}} -->
	<div class="wp-block-group  has-background" style="background-color:#e2f2ef;padding-top:1px;padding-right:12px;padding-bottom:1px;padding-left:12px"><!-- wp:post-terms {"term":"category","style":{"color":{"text":"#015d61"}},"className":"is-style-default"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
	<p></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->