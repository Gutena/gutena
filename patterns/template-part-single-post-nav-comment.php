<?php
/**
 * Title: Single Post, post navigation and comment section.
 * Slug: gutena/template-part-single-post-nav-comment
 * Categories: gutena-pages
 * inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|medium"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"40px"}}},"className":"gutena-post-theme-color gutena-post-hero-section","layout":{"contentSize":"780px","type":"constrained"}} -->
<div class="wp-block-group alignfull gutena-post-theme-color gutena-post-hero-section" style="margin-bottom:40px"><!-- wp:group {"className":"gutena-post-feature-image-container","layout":{"contentSize":"776px","type":"constrained"}} -->
<div class="wp-block-group gutena-post-feature-image-container"><!-- wp:post-featured-image /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"740px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"14px","bottom":"26px"}}},"textColor":"secondary","layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group has-secondary-color has-text-color" style="margin-top:14px;margin-bottom:26px"><!-- wp:post-date /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"> <?php esc_html_e( "by", "gutena" ) ; ?> </p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"inherit":true}} /-->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"29px","bottom":"69px"}}},"textColor":"secondary","layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group has-secondary-color has-text-color" style="margin-top:29px;margin-bottom:69px"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( "Category", "gutena" ) ; ?>: </p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"80px"}}},"layout":{"type":"constrained","contentSize":"450px","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:80px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"guten-box-shadow is-style-gutena-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group guten-box-shadow is-style-gutena-box-shadow" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-author {"avatarSize":96,"showBio":true,"className":"is-style-gutena-post-author-card"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:separator {"style":{"color":{"background":"#272a411a"}},"className":"alignwide is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background alignwide is-style-wide" style="background-color:#272a411a;color:#272a411a"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"39px","bottom":"39px"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:39px;padding-bottom:39px"><!-- wp:post-navigation-link {"textAlign":"left","type":"previous","label":"\u0026lt; <?php esc_html_e( "Previous", "gutena" ) ; ?>\u003cbr\u003e","showTitle":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":"<?php esc_html_e( "Next", "gutena" ) ; ?> \u003e\u003cbr\u003e","showTitle":true} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"color":{"background":"#272a411a"}},"className":"alignwide is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background alignwide is-style-wide" style="background-color:#272a411a;color:#272a411a"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:comments {"className":"is-style-gutena-post-comment"} -->
<div class="wp-block-comments is-style-gutena-post-comment"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->