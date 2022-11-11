<?php
/**
 * Gutena Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package gutena
 * @since 0.1
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function gutena_register_block_styles() {
		
		//Image: wave animation 
		register_block_style(
			'core/image',
			array(
				'name'  => 'gutena-image-wave-animation',
				'label' => esc_html__( 'Wave animation', 'gutena' ),
				'inline_style' => 'figure.is-style-gutena-image-wave-animation{
					border-radius: 50%;
					position: relative;
					cursor:pointer;
				}
				.is-style-gutena-image-wave-animation:after, .is-style-gutena-image-wave-animation:before {
					-webkit-animation: gutena-ripple 2.6s cubic-bezier(.25,.9,.2,1) .4s infinite;
					animation: gutena-ripple 2.6s cubic-bezier(.25,.9,.2,1) .4s infinite;
					border: 1px solid hsla(0,0%,100%,.5);
					border-radius: 50%;
					content: "";
					display: block;
					height: 100%;
					left: -1px;
					opacity: 0;
					position: absolute;
					top: -1px;
					transform: scale(.35);
					width: 100%;
				}
				@-webkit-keyframes gutena-ripple{0%{opacity:1;transform:scale(1)}to{opacity:0;transform:scale(1.7)}}@keyframes gutena-ripple{0%{opacity:1;transform:scale(1)}to{opacity:0;transform:scale(1.7)}}
				.is-style-gutena-image-wave-animation:after {
					-webkit-animation-delay: 0s;
					animation-delay: 0s;
				}
				.is-style-gutena-image-wave-animation:before {
					-webkit-animation-delay: .5s;
					animation-delay: .5s;
				}
				',
			)
		);

		// posts featured Image 
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'gutena-post-featured-image-border-box',
				'label' => esc_html__( 'Border box drop shadow', 'gutena' ),
				'inline_style' => 'figure.is-style-gutena-post-featured-image-border-box{ background: var(--wp--preset--color--white);padding: 40px;filter: drop-shadow(0 4px 50px rgba(0, 0, 0, 0.05));border-radius: 10px; }
				@media only screen and (max-width: 768px) {
					figure.is-style-gutena-post-featured-image-border-box{
						padding: 20px;
					}
				}
				',
			)
		);

		// posts terms style for convert in to boxes from comma separated text
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'gutena-post-terms-box-style',
				'label' => esc_html__( 'Box style', 'gutena' ),
				'inline_style' => '.is-style-gutena-post-terms-box-style a { 
					padding: 8px 12px;
					border: 1px solid rgba(0, 0, 0, 0.1);
					border-radius: 5px;
					text-decoration: none;
					margin-right: 17px;
					background:var(--wp--preset--color--white);
				 }
				 .is-style-gutena-post-terms-box-style .wp-block-post-terms__separator{
					display:none;
				 }
				',
			)
		);
		
		// posts pagination 
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'gutena-border-box-pagination',
				'label' => esc_html__( 'Border box', 'gutena' ),
				'inline_style' => '.is-style-gutena-border-box-pagination .wp-block-query-pagination-numbers .page-numbers{
					color: var(--wp--preset--color--secondary);
					border: 1px solid var(--wp--preset--color--secondary);
					text-decoration: none;
					display: inline-flex;
					justify-content: center;
					align-items: center;
					width: 30px;
					height: 30px;
				 }
				 .is-style-gutena-border-box-pagination .wp-block-query-pagination-numbers .page-numbers.current, .is-style-gutena-border-box-pagination .wp-block-query-pagination-numbers .page-numbers:not(.current):hover{   
					color: white;
					background: var(--wp--preset--color--senary);
					border: 1px solid var(--wp--preset--color--senary);
				 }',
			)
		);

		// posts pagination Big
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'gutena-border-box-big-pagination',
				'label' => esc_html__( 'Border box (big)', 'gutena' ),
				'inline_style' => '
				nav.is-style-gutena-border-box-big-pagination{
					justify-content:space-between;
				}

				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-previous,
				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-next,
				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-numbers .page-numbers
				{
					font-size: 14px;
					padding: 9px 13px;
					color: var(--wp--preset--color--secondary);
					text-decoration: none;
					border-radius: 5px;
					background: var(--wp--preset--color--white);
				}

				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-numbers .page-numbers:first-child{
					padding: 9px 14px;
				}

				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-previous,
				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-next{
					padding: 3px 22px;
				}
				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-previous,
				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-next{
					border:1px solid rgba(0,0,0,0.1);
				}
				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-numbers .page-numbers{
					border: 1px solid var(--wp--preset--color--secondary);
					margin-right: 14px;
				 }
				 .is-style-gutena-border-box-big-pagination .wp-block-query-pagination-numbers .page-numbers.current,
				 .is-style-gutena-border-box-big-pagination .wp-block-query-pagination-previous:hover,
				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-next:hover,
				.is-style-gutena-border-box-big-pagination .wp-block-query-pagination-numbers .page-numbers:hover
				 {   
					color: white;
					background: var(--wp--preset--color--secondary);
				 }',
			)
		);

		//Box shadow for group
        register_block_style(
			'core/group',
			array(
				'name'  => 'gutena-box-shadow',
				'label' => esc_html__( 'Box shadow', 'gutena' ),
				'inline_style' => '.is-style-gutena-box-shadow, .guten-pattern-hero .guten-box-shadow{ box-shadow: 0px 6px 30px 7px rgba(33, 37, 71, 0.1); }',
			)
		);

		//group: Position Fixed (Top) 
        register_block_style(
			'core/group',
			array(
				'name'  => 'gutena-position-fixed-top',
				'label' => esc_html__( 'Position fixed - top', 'gutena' ),
				'inline_style' => '.is-style-gutena-position-fixed-top{ 
					position:fixed;
					left:20px; 
					right:20px;
					top:calc(var(--wp-admin--admin-bar--height, 5px) + 15px);
					z-index:9;
				}
				',
			)
		);

		//group: Position Fixed (Bottom)
        register_block_style(
			'core/group',
			array(
				'name'  => 'gutena-position-fixed-bottom',
				'label' => esc_html__( 'Position fixed - bottom', 'gutena' ),
				'inline_style' => '.is-style-gutena-position-fixed-bottom{ 
					position:fixed;
					left:20px; 
					right:20px;
					bottom:20px;
					z-index:9;
				}',
			)
		);

		//Zero margin for column
		register_block_style(
			'core/column',
			array(
				'name'  => 'gutena-column-no-margin',
				'label' => esc_html__( 'No margin', 'gutena' ),
				'inline_style' => '.wp-block-columns .wp-block-column.is-style-gutena-column-no-margin{
					margin: 0 !important;
				}
				@media only screen and (max-width: 768px) {
					.wp-block-columns .wp-block-column.is-style-gutena-column-no-margin:empty{
						flex-basis: 0!important;
					}
				}',
			)
		);
		//Post Author style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'gutena-post-author-card',
				'label' => esc_html__( 'Author Style', 'gutena' ),
				'inline_style' => '.is-style-gutena-post-author-card.wp-block-post-author .wp-block-post-author__content{
					padding-left: 10px;
				 }
				 .is-style-gutena-post-author-card.wp-block-post-author{
				   color: var(--wp--preset--color--secondary);
				 }
				 .is-style-gutena-post-author-card.wp-block-post-author .wp-block-post-author__bio{
				   font-size: var(--wp--custom--typography--font-size--p);
				   line-height: var(--wp--custom--typography--line-height--p);
				 }
				 .is-style-gutena-post-author-card.wp-block-post-author .wp-block-post-author__name{
					font-size: var(--wp--custom--typography--font-size--hfive);
					font-family: var(--wp--preset--font-family--manrope-font);
					font-weight: var(--wp--custom--typography--font-weight--semi-bold);
					line-height: var(--wp--custom--typography--line-height--hfive);
				 }',
			)
		);
		//Navigation styles
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'gutena-navigation-style',
				'label' => esc_html__( 'Navigation Style', 'gutena' ),
				'inline_style' => '.is-style-gutena-navigation-style.wp-block-navigation .wp-block-navigation__responsive-container-open, .is-style-gutena-navigation-style.wp-block-navigation .wp-block-navigation__responsive-container-close{ border:2px solid var(--wp--preset--color--secondary); } 
				.is-style-gutena-navigation-style.white-hamburger-menu .wp-block-navigation__responsive-container-open {border: 2px solid var(--wp--preset--color--background);}',
			)
		);
		
		// social-links
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'gutena-social-links-light-border',
				'label' => esc_html__( 'Light border', 'gutena' ),
				'inline_style' => '.is-style-gutena-social-links-light-border .wp-block-social-link { 
					padding: 5px;
					border: 1px solid rgba(0, 0, 0, 0.1);
				 }
				',
			)
		);
		
		//search form
		register_block_style(
			'core/search',
			array(
				'name'  => 'gutena-search-background-transparent',
				'label' => esc_html__( 'Background transparent white', 'gutena' ),
				'inline_style' => '.is-style-gutena-search-background-transparent .wp-block-search__input{ 
					background: transparent;
				 }

				 .is-style-gutena-search-background-transparent.wp-block-search__button-inside .wp-block-search__inside-wrapper{
					padding: 16px 19px 16px 26px;
					border:none;
					border-radius: 5px;
				 }

				 .is-style-gutena-search-background-transparent.wp-block-search__button-inside .wp-block-search__inside-wrapper:focus-within {
					padding: 15px 18px 15px 25px;
					border:1px solid var(--wp--preset--color--secondary);
					border-radius: 5px;
					background:var(--wp--preset--color--white);
				 }

				 .is-style-gutena-search-background-transparent .wp-block-search__inside-wrapper input:not([type="submit"]):not([type="checkbox"]):focus{
					outline: none;
				 }
				',
			)
		);
		
	}
	add_action( 'init', 'gutena_register_block_styles' );
}
