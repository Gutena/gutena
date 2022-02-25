<?php
/**
 * Gutena block pattern:Blog Page with Left image right content
 */
return array(
	'title'      => __( 'Blog Page with Left post-image right post-content', 'gutena' ),
	'categories' => array( 'gutena-query','gutena-pages' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"50px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull gutena-pattern" style="padding-top:50px"><!-- wp:query {"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"align":"wide","layout":{"wideSize":"920px"}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"bottom":"70px"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-bottom:70px"><!-- wp:column {"width":"46.5%"} -->
	<div class="wp-block-column" style="flex-basis:46.5%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"400px"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"1%","className":"is-style-gutena-column-no-margin"} -->
	<div class="wp-block-column is-style-gutena-column-no-margin" style="flex-basis:1%"></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"52.5%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52.5%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px"}}}} -->
	<div class="wp-block-group" style="padding-right:20px;padding-left:20px"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"19px","top":"12px"}}},"textColor":"secondary","layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group has-secondary-color has-text-color" style="padding-top:12px;padding-bottom:19px"><!-- wp:post-date /-->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"small"} -->
	<p class="has-secondary-color has-text-color has-small-font-size" style="line-height:1.9"> '.esc_html__( 'by', 'gutena' ).' </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:post-author {"showAvatar":false} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eRead Article \u003cimg class=\u0022wp-image-1595\u0022 style=\u0022width: 14px;\u0022 src=\u0022'.GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg\u0022 alt=\u0022arrow-right\u0022\u003e\u003c/strong\u003e","style":{"typography":{"lineHeight":"1.9","fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"tertiary","fontSize":"normal"} /-->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small","textColor":"secondary"} -->
	<p class="has-small-font-size has-secondary-color has-text-color" style="line-height:1.9">'.esc_html__( 'Category', 'gutena' ).': </p>
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
	<!-- /wp:query --></div>
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:10px"><!-- wp:separator {"color":"light-gray","align":"full","className":"is-style-wide"} -->
<hr class="wp-block-separator alignfull has-text-color has-background has-light-gray-background-color has-light-gray-color is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
	<!-- /wp:group -->',
);
