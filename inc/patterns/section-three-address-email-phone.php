<?php
/**
 * Gutena block pattern:  Three columns with address, email and phone
 */
return array(
	'title'      => __( 'Three columns with address, email and phone', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"wide","className":"gutena-pattern","layout":{"inherit":false,"wideSize":"730px"}} -->
    <div class="wp-block-group alignwide gutena-pattern"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"40px","bottom":"100px","right":"20px","left":"20px"},"blockGap":"50px"}}} -->
    <div class="wp-block-columns" style="padding-top:40px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
    <h5 id="location">' . esc_html__( 'Location', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( '780, HSR Layout 23A Cross, 8B Main  Sector 7, Bangalore 560102', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
    <h5 id="location">' . esc_html__( 'Email', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( 'Sales@brandexponents.com', 'gutena' ) . '<br>' . esc_html__( 'Info@brandexponents.com', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"><!-- wp:group -->
    <div class="wp-block-group"><!-- wp:heading {"level":5} -->
    <h5 id="location">' . esc_html__( 'Phone', 'gutena' ) . '</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.9"}},"fontSize":"small"} -->
    <p class="has-small-font-size" style="line-height:1.9">' . esc_html__( '123-456-7890', 'gutena' ) . '<br>' . esc_html__( '123-456-7899', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
