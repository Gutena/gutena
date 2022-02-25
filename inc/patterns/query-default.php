<?php
/**
 * Gutena block pattern:Default posts
 */
return array(
	'title'      => __( 'Blog Page with above post-image below post-content', 'gutena' ),
	'categories' => array( 'gutena-query','gutena-pages' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern" style="padding-top:100px"><!-- wp:query {"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"wideSize":"732px"}} -->
        <div class="wp-block-query alignwide"><!-- wp:post-template -->
        <!-- wp:post-featured-image /-->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"80px","left":"20px"}}}} -->
        <div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"15px"}}}} /-->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"}}},"layout":{"type":"flex","allowOrientation":false}} -->
        <div class="wp-block-group" style="padding-bottom:10px;"><!-- wp:post-date /-->
        
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
        <!-- /wp:group -->
        <!-- /wp:post-template -->
        
        <!-- wp:query-pagination {"className":"is-style-gutena-border-box-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
        <!-- wp:query-pagination-previous {"label":" "} /-->
        
        <!-- wp:query-pagination-numbers /-->
        
        <!-- wp:query-pagination-next {"label":" "} /-->
        <!-- /wp:query-pagination --></div>
        <!-- /wp:query --></div>
        <!-- /wp:group -->',
);
