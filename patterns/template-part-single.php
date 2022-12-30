<?php
/**
 * Title: Single Post
 * Slug: gutena/template-part-single
 * Categories: gutena-pages
 * inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"4rem"}}},"gradient":"vertical-senary-to-background","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-vertical-senary-to-background-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:4rem"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"6rem"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:6rem">
<?php 
//include dark header pattern
if ( file_exists( GUTENA_THEME_DIR .'/patterns/header-logo-nav-btn-for-dark-bg.php' ) ) {
    require GUTENA_THEME_DIR .'/patterns/header-logo-nav-btn-for-dark-bg.php';
}
?>
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.1rem","right":"0.8rem","bottom":"0.1rem","left":"0.8rem"}}},"backgroundColor":"white"} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:0.1rem;padding-right:0.8rem;padding-bottom:0.1rem;padding-left:0.8rem"><!-- wp:post-terms {"term":"category","className":"is-style-default"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5rem","bottom":"2rem"}}}} -->
<div class="wp-block-group" style="margin-top:1.5rem;margin-bottom:2rem"><!-- wp:post-title {"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
<div class="wp-block-group" style="margin-bottom:3rem"><!-- wp:post-date {"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#e2f2ef"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group has-background" style="background-color:#e2f2ef;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isDark":false,"className":"is-style-gutena-single-post-feature-image"} -->
<div class="wp-block-cover is-light is-style-gutena-single-post-feature-image"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"7.5rem","right":"0px","left":"0px"}}},"layout":{"contentSize":"850px","type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:7.5rem;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"4rem","right":"2rem","left":"2rem"}}},"fontSize":"normal"} -->
<div class="wp-block-group has-normal-font-size" style="padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:post-content {"layout":{"inherit":true}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"2rem","right":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:2rem;padding-left:2rem"><!-- wp:group {"style":{"color":{"background":"#e2f2ef"},"spacing":{"padding":{"top":"0.1rem","right":"0.8rem","bottom":"0.1rem","left":"0.8rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#e2f2ef;padding-top:0.1rem;padding-right:0.8rem;padding-bottom:0.1rem;padding-left:0.8rem"><!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->