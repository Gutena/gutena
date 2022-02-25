<?php
/**
 * Gutena block pattern:Blog Page with sidebar
 */
return array(
	'title'      => __( 'Blog Page with sidebar', 'gutena' ),
	'categories' => array( 'gutena-query','gutena-pages' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"100px"}}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide gutena-pattern" style="padding-top:50px;padding-bottom:100px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"16px"}}},"fontSize":"extra-large"} -->
    <h1 class="has-text-align-center has-extra-large-font-size" id="blog" style="font-style:normal;font-weight:700;line-height:1.2;margin-bottom:16px">'.esc_html__( 'Blog', 'gutena' ).'</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"fontSize":"normal"} -->
    <p class="has-text-align-center has-normal-font-size" style="line-height:1.9">'.esc_html__( 'Latest News and official announcement', 'gutena' ).'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"100px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"align":"full","className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern"><!-- wp:query {"queryId":2,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"wideSize":"732px"}} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template -->
    <!-- wp:post-featured-image /-->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"80px","left":"20px"}}}} -->
    <div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"15px"}}}} /-->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"}}},"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group" style="padding-bottom:10px"><!-- wp:post-date /-->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"small"} -->
    <p class="has-secondary-color has-text-color has-small-font-size" style="line-height:1.9">'.esc_html__( 'by', 'gutena' ).' </p>
    <!-- /wp:paragraph -->
    
    <!-- wp:post-author {"showAvatar":false} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eRead Article \u003cimg class=\u0022wp-image-1595\u0022 style=\u0022width: 14px;\u0022 src=\u0022'.GUTENA_THEME_URI . '/assets/img/icons/arrow-right-black.svg\u0022 alt=\u0022arrow-right\u0022\u003e\u003c/strong\u003e","style":{"typography":{"lineHeight":"1.9","fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"tertiary","fontSize":"normal"} /-->
    
    <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"small"} -->
    <p class="has-secondary-color has-text-color has-small-font-size" style="line-height:1.9">'.esc_html__( 'Category', 'gutena' ).': </p>
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
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"'.esc_html__( 'Search', 'gutena' ).'..","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->
    
    <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"62px","bottom":"14px"}}}} -->
    <h5 id="categories" style="margin-top:62px;margin-bottom:14px">'.esc_html__( 'Categories', 'gutena' ).'</h5>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"className":"is-style-wide"} -->
    <hr class="wp-block-separator is-style-wide"/>
    <!-- /wp:separator -->
    
    <!-- wp:group {"style":{"typography":{"lineHeight":"3"},"spacing":{"padding":{"top":"15px"}}},"textColor":"secondary","fontSize":"small"} -->
    <div class="wp-block-group has-secondary-color has-text-color has-small-font-size" style="line-height:3;padding-top:15px"><!-- wp:categories /--></div>
    <!-- /wp:group -->
    
    <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"80px","bottom":"14px"}}}} -->
    <h5 id="tags" style="margin-top:80px;margin-bottom:14px">'.esc_html__( 'Tags', 'gutena' ).'</h5>
    <!-- /wp:heading -->
    
    <!-- wp:separator {"className":"is-style-wide"} -->
    <hr class="wp-block-separator is-style-wide"/>
    <!-- /wp:separator -->
    
    <!-- wp:group {"style":{"typography":{"lineHeight":"1.25"},"spacing":{"padding":{"top":"20px"}}},"textColor":"tertiary","layout":{"inherit":true},"fontSize":"tiny"} -->
    <div class="wp-block-group has-tertiary-color has-text-color has-tiny-font-size" style="line-height:1.25;padding-top:20px"><!-- wp:tag-cloud {"numberOfTags":20,"className":"is-style-outline"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
