<?php
/**
 * Title: Background color, heading, and client logos.
 * Slug: gutena/sec-heading-client-logos
 * Categories: gutena-section, gutena-clients
 * Block Types: core/group
 * Keywords: section, client-logos
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"senary"} -->
<div class="wp-block-group alignfull has-senary-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"bottom":"60px"}}},"textColor":"white"} -->
<h3 class="has-text-align-center has-white-color has-text-color" id="trusted-by-enterprise-leaders" style="margin-bottom:60px"><?php esc_html_e( 'Trusted by enterprise leaders', 'gutena' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"5","letterSpacing":"80px"}}} -->
<p class="has-text-align-center" style="letter-spacing:80px;line-height:5"> <img class="wp-image-1608" style="width: 117px;" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/common/google-white-logo.webp'; ?>" alt="<?php esc_attr_e(  'google logo', 'gutena' ); ?>"> <img class="wp-image-1609" style="width: 121px;" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/common/amazon-white-logo.webp'; ?>" alt="<?php esc_attr_e(  'amazon logo', 'gutena' ); ?>"> <img class="wp-image-1610" style="width: 134px;" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/common/spotify.webp'; ?>" alt="<?php esc_attr_e(  'spotify logo', 'gutena' ); ?>"> <img class="wp-image-1611" style="width: 113px;" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/common/django-white-logo.webp'; ?>" alt="<?php esc_attr_e(  'django logo', 'gutena' ); ?>"> <img class="wp-image-1612" style="width: 96px;" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/common/drip-white-logo.webp'; ?>" alt="<?php esc_attr_e(  'drip logo', 'gutena' ); ?>"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->