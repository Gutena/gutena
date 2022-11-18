<?php
/**
 * Title: Header with logo, menu and button for dark background
 * Slug: gutena/header-logo-nav-btn-for-dark-bg
 * Categories: gutena-header
 * Block Types: core/template-part/header
 * Keywords: header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/logo-white.svg'; ?>" alt="<?php esc_attr_e( 'logo', 'gutena' ); ?>"/></figure>
<!-- /wp:image -->
    <!-- wp:navigation {"__unstableLocation":"main_nav","textColor":"white","className":"is-style-gutena-navigation-style white-hamburger-menu","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|normal"}}} /-->
    
    <!-- wp:buttons {"className":"hide-in-mobile hide-in-tablet"} -->
<div class="wp-block-buttons hide-in-mobile hide-in-tablet"><!-- wp:button {"backgroundColor":"quinary","textColor":"secondary","style":{"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-quinary-background-color has-text-color has-background wp-element-button" style="padding-top:1.1rem;padding-right:1.5rem;padding-bottom:1.1rem;padding-left:1.5rem"><?php esc_html_e( 'Get in touch', 'gutena' ); ?> <img class="wp-image-15" style="width: 10px;" src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/top-right-arrow-black.svg'; ?>" alt="<?php esc_attr_e( 'Get in touch', 'gutena' ); ?>"></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->