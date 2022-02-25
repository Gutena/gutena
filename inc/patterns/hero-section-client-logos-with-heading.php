<?php
/**
 * Gutena block pattern:  Client logos with heading
 */
return array(
	'title'      => __( 'Client logos with heading', 'gutena' ),
	'categories' => array( 'gutena-hero-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"70px"}}},"backgroundColor":"secondary","className":"gutena-pattern"} -->
    <div class="wp-block-group alignfull gutena-pattern has-secondary-background-color has-background" style="padding-top:100px;padding-bottom:70px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"60px"}}},"textColor":"white"} -->
    <h4 class="has-text-align-center has-white-color has-text-color" id="trusted-by-enterprise-leaders" style="margin-bottom:60px">' . esc_html__( 'Trusted by enterprise leaders', 'gutena' ) . '</h4>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"5","letterSpacing":"80px"}}} -->
    <p class="has-text-align-center" style="line-height:5;letter-spacing:80px"> <img class="wp-image-1608" style="width: 117px;" src="' . GUTENA_THEME_URI . '/assets/img/common/google-white-logo.webp" alt="google"> <img class="wp-image-1609" style="width: 121px;" src="' . GUTENA_THEME_URI . '/assets/img/common/amazon-white-logo.webp" alt="amazon"> <img class="wp-image-1610" style="width: 134px;" src="' . GUTENA_THEME_URI . '/assets/img/common/spotify.webp" alt="spotify"> <img class="wp-image-1611" style="width: 113px;" src="' . GUTENA_THEME_URI . '/assets/img/common/django-white-logo.webp" alt="django"> <img class="wp-image-1612" style="width: 96px;" src="' . GUTENA_THEME_URI . '/assets/img/common/drip-white-logo.webp" alt="drip"></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->',
);
