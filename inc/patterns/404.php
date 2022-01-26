<?php
/**
 * Gutena block pattern:404 Page with search
 *
 */

return array(
	'title'      => __( '404 Page with search', 'gutena' ),
	'categories' => array( 'gutena-pages' ),
	'inserter'   => false,
	'content'    => '<!-- wp:group -->
    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"150px","bottom":"50px","right":"20px","left":"20px"}}}} -->
    <div class="wp-block-columns" style="padding-top:150px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis:60%">
    <!-- wp:heading {"textAlign":"center","level":1} -->
    <h2 class="has-text-align-center" id="oops-that-page-can-t-be-found">' . esc_html__( "404 PAGE NOT FOUND", "gutena" ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.9"}},"textColor":"secondary","fontSize":"normal"} -->
    <p class="has-text-align-center has-secondary-color has-text-color has-normal-font-size" style="line-height:1.9">' . esc_html__( "It seems we can’t find what you’re looking for. Perhaps searching can help.", "gutena" ) . '</p>
    <!-- /wp:paragraph -->
    <!-- wp:spacer -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    <!-- wp:spacer {"height":"150px"} -->
    <div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
',
);
