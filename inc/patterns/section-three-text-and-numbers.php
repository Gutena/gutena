<?php
/**
 * Gutena block pattern:  Three columns with text and numbers
 */
return array(
	'title'      => __( 'Three columns with text and numbers', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(135deg,rgb(90,133,242) 5%,rgb(61,57,229) 100%)"}},"className":"gutena-pattern","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull gutena-pattern has-background" style="background:linear-gradient(135deg,rgb(90,133,242) 5%,rgb(61,57,229) 100%)"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"65px","right":"20px","left":"20px"},"blockGap":"32px"}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:80px;padding-right:20px;padding-bottom:65px;padding-left:20px"><!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textColor":"white"} -->
    <h2 class="has-white-color has-text-color" id="scale-your-business-using-our-solutions">' . esc_html__( 'Scale your business using our solutions', 'gutena' ) . '</h2>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
    <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"6px"}}},"textColor":"white"} -->
    <h2 class="has-white-color has-text-color" id="98-5" style="margin-bottom:6px">' . esc_html__( '98.5%', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"white"} -->
    <p class="has-white-color has-text-color">' . esc_html__( 'Customer Satisfaction', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
    <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"6px"}}},"textColor":"white"} -->
    <h2 class="has-white-color has-text-color" id="100k" style="margin-bottom:6px">' . esc_html__( '100K+', 'gutena' ) . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"white"} -->
    <p class="has-white-color has-text-color">' . esc_html__( 'New users per week', 'gutena' ) . '</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);
