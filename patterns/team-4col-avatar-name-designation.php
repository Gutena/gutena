<?php
/**
 * Title: Background color, 4 column, avatar, name, and designation arranged vertically.
 * Slug: gutena/team-4col-avatar-name-designation
 * Categories: gutena-team-members
 * Block Types: core/group
 * Keywords: team
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#e2f2ef","text":"#21222f"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"1.25rem","left":"1.25rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#e2f2ef;color:#21222f;padding-top:var(--wp--preset--spacing--medium);padding-right:1.25rem;padding-bottom:var(--wp--preset--spacing--medium);padding-left:1.25rem"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"4.5rem","left":"3rem"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"240px"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1008,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/team-01.svg'; ?>" alt="<?php esc_attr_e(  'team', 'gutena' ); ?>" class="wp-image-1008"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
<h6 class="has-text-align-center" style="margin-top:1.5rem"><?php esc_html_e( 'Justin Hammer', 'gutena' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:5px"><?php esc_html_e( 'Founder & CEO', 'gutena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"240px"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1010,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/team-02.svg'; ?>" alt="<?php esc_attr_e(  'team', 'gutena' ); ?>" class="wp-image-1010"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
<h6 class="has-text-align-center" style="margin-top:1.5rem"><?php esc_html_e( 'Anna Miller', 'gutena' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:5px"><?php esc_html_e( 'Business Head', 'gutena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"240px"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1011,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/team-03.svg'; ?>" alt="<?php esc_attr_e(  'team', 'gutena' ); ?>" class="wp-image-1011"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
<h6 class="has-text-align-center" style="margin-top:1.5rem"><?php esc_html_e( 'John Smith', 'gutena' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:5px"><?php esc_html_e( 'Creative Director', 'gutena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"240px"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1012,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GUTENA_THEME_URI  ). '/assets/img/icons/team-04.svg'; ?>" alt="<?php esc_attr_e(  'team', 'gutena' ); ?>" class="wp-image-1012"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
<h6 class="has-text-align-center" style="margin-top:1.5rem"><?php esc_html_e(  'Christine Brown', 'gutena' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:5px"><?php esc_html_e( 'Marketing Head', 'gutena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->