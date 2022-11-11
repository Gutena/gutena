<?php
/**
 * Gutena block pattern:Footer four column with social icons
 */
return array(
	'title'      => __( 'Footer four column with social icons', 'gutena' ),
	'categories' => array( 'gutena-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","right":"1.25rem","bottom":"5rem","left":"1.25rem"},"blockGap":"23px"},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"secondary","textColor":"white","layout":{"inherit":false,"contentSize":"1100px","type":"constrained"},"fontSize":"small"} -->
    <div class="wp-block-group alignfull has-white-color has-secondary-background-color has-text-color has-background has-small-font-size" style="padding-top:5rem;padding-right:1.25rem;padding-bottom:5rem;padding-left:1.25rem;font-style:normal;font-weight:500;line-height:1.2"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"4rem","left":"4rem"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"80%"} -->
    <div class="wp-block-column" style="flex-basis:80%"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"4rem","left":"4rem"}}}} -->
    <div class="wp-block-columns alignfull"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"23px"}},"layout":{"type":"constrained","contentSize":"527px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"white"} -->
    <h5 class="has-white-color has-text-color">'.esc_html__( 'Services', 'gutena' ).'</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'Email Marketing', 'gutena' ).'</a></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'Campaigns', 'gutena' ).'</a></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'Branding', 'gutena' ).'</a></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'Offline', 'gutena' ).'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"23px"}},"layout":{"type":"constrained","contentSize":"527px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"white"} -->
    <h5 class="has-white-color has-text-color">'.esc_html__( 'About', 'gutena' ).'</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'Our Story', 'gutena' ).'</a></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'Benefits', 'gutena' ).'</a></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'Team', 'gutena' ).'</a></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'Careers', 'gutena' ).'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"23px"}},"layout":{"type":"constrained","contentSize":"527px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"white"} -->
    <h5 class="has-white-color has-text-color">'.esc_html__( 'Help', 'gutena' ).'</h5>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'FAQs', 'gutena' ).'</a></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p><a href="#">'.esc_html__( 'Contact Us', 'gutena' ).'</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"527px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"white"} -->
    <h4 class="has-white-color has-text-color">'.esc_html__( 'Follow us on', 'gutena' ).'</h4>
    <!-- /wp:heading -->
    
    <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":"25px"}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
    <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook","label":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter","label":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);