<?php
/**
 * Gutena Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package gutena
 * @since 0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Silence is golden.' );
}

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

		//Image: wave animation 
		register_block_style(
			'core/cover',
			array(
				'name'  => 'gutena-single-post-feature-image',
				'label' => esc_html__( 'Single Post feature image', 'gutena' ),
				'inline_style' => '
				.is-style-gutena-single-post-feature-image .wp-block-cover__image-background.wp-post-image {
					border: var(--wp--custom--spacing--single-post-cover-feature-img-border,2.25rem) solid #ffffff;
					box-shadow: 0px 4px 50px 10px rgba(0, 0, 0, 0.05);
					box-sizing: border-box;
				 }
				 
				 .is-style-gutena-single-post-feature-image {
					min-height: var(--wp--custom--spacing--single-post-feature-img-cover-minheight,40rem);
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
					margin-left:12px;
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

		//group row: gutena-flex-wrap-in-mobile-only
        register_block_style(
			'core/group',
			array(
				'name'  => 'gutena-flex-wrap-in-mobile',
				'label' => esc_html__( 'Row wrap in mobile only', 'gutena' ),
				'inline_style' => '@media (max-width: 599px){ .is-layout-flex.is-style-gutena-flex-wrap-in-mobile{ 
					flex-wrap: wrap !important;
      				justify-content: center !important;
				}}',
			)
		);

		/*Wide gap columns
		Query loop column gap : gap and column width are connected
		Cover block inner content width 100%
		*/
		register_block_style(
			'core/post-template',
			array(
				'name'  => 'gutena-wide-gap-columns',
				'label' => esc_html__( 'Wide gap columns', 'gutena' ),
				'inline_style' => '
				.is-style-gutena-wide-gap-columns .wp-block-post .wp-block-cover.has-custom-content-position .wp-block-cover__inner-container {
					width: 100%;
				  }
				  
				  @media (min-width: 821px){
					
					.wp-block-post-template.is-style-gutena-wide-gap-columns.is-flex-container.columns-2 {
					   gap: 3.8rem;
					}
				  
					.wp-block-post-template.is-style-gutena-wide-gap-columns.is-flex-container.is-flex-container.columns-2 > li, 
					.wp-block-query-loop.is-flex-container.is-flex-container.columns-2.is-style-gutena-wide-gap-columns > li {
					   width: calc((100% / 2) - 3.8rem + (3.8rem / 2));
					}
				  
					.wp-block-post-template.is-style-gutena-wide-gap-columns.is-flex-container.columns-3 {
					   gap: 3rem;
					}
				  
					.wp-block-post-template.is-style-gutena-wide-gap-columns.is-flex-container.is-flex-container.columns-3 > li, 
					.wp-block-query-loop.is-flex-container.is-flex-container.columns-3.is-style-gutena-wide-gap-columns > li {
					   width: calc((100% / 3) - 3rem + (3rem / 3));
					}
				  }
				  
				  @media only screen and (min-width: 600px) and (max-width: 820px){
				  
					.wp-block-post-template.is-style-gutena-wide-gap-columns.is-flex-container.columns-2 {
					   gap: 2.5rem;
					}
				  
					.wp-block-post-template.is-style-gutena-wide-gap-columns.is-flex-container.is-flex-container.columns-2 > li, 
					.wp-block-query-loop.is-flex-container.is-flex-container.columns-2.is-style-gutena-wide-gap-columns > li {
					   width: calc((100% / 2) - 2.5rem + (2.5rem / 2));
					}
				  
					.wp-block-post-template.is-style-gutena-wide-gap-columns.is-flex-container.is-flex-container.columns-3 > li, 
					.wp-block-query-loop.is-flex-container.is-flex-container.columns-3.is-style-gutena-wide-gap-columns > li {
					   width: 100%;
					}
				  
					.wp-block-post-template.is-style-gutena-wide-gap-columns.is-flex-container.columns-3, 
					.wp-block-query-loop.is-flex-container.columns-3.is-style-gutena-wide-gap-columns {
					   flex-direction: column;
					   gap: 4em;
					   max-width: 387px;
					   margin: auto;
					}
				  
				  }
				  
				  @media (max-width: 599px){
					.wp-block-post-template.is-style-gutena-wide-gap-columns.is-flex-container, 
					.wp-block-query-loop.is-flex-container.is-style-gutena-wide-gap-columns {
					   gap: 4em;
					}
				  }
				',
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
				   line-height: 1.8;
				   margin-top:0;
				 }
				 .is-style-gutena-post-author-card.wp-block-post-author .wp-block-post-author__name{
					font-size: var(--wp--custom--typography--font-size--hsix);
					font-family: var(--wp--custom--typography--font-family--primary);
					font-weight: var(--wp--custom--typography--font-weight--semi-bold);
					line-height: 1.5;
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

				.is-style-gutena-navigation-style.white-hamburger-menu .wp-block-navigation__responsive-container-open {border: 2px solid var(--wp--preset--color--background);}

				.is-style-gutena-navigation-style.wp-block-navigation .wp-block-navigation-item.current-menu-item > a {
					color:var(--wp--custom--color--navigation-link-hover);
				}
				.is-style-gutena-navigation-style.wp-block-navigation .has-child:where(:not(.open-on-click)):hover>.wp-block-navigation__submenu-container {
					padding-top: calc( var(--wp--custom--spacing--small, 20px) - 5px );
					padding-bottom: calc( var(--wp--custom--spacing--small, 20px) - 5px );
				 }

				 .is-style-gutena-navigation-style.wp-block-navigation .wp-block-navigation__responsive-close {
					padding-top: var(--wp--custom--spacing--small, 20px);
				 }
				',
			)
		);
		
		// social-links - round border
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

		// social-links - square border with no space
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'gutena-social-links-square-border',
				'label' => esc_html__( 'Square border', 'gutena' ),
				'inline_style' => '
				.is-style-gutena-social-links-square-border.wp-block-social-links {
					gap:0;
				}
				.is-style-gutena-social-links-square-border .wp-block-social-link:first-child { 
					border-left: 1px solid #CBDAD7;
				 }

				.is-style-gutena-social-links-square-border .wp-block-social-link { 
					padding: calc( var(--wp--custom--spacing--small, 20px) / 2 );
					border: 1px solid #CBDAD7;
					border-radius:0;
					border-left: 0;
					background-color: transparent !important;
				}
				
				.is-style-gutena-social-links-square-border .wp-block-social-link:hover {
					transform: none;
					color: var(--wp--preset--color--primary) !important;
				}

				.is-style-gutena-social-links-square-border .wp-block-social-link:hover > a {
					transform: scale(1.5);
					transition-delay: 0.2s ease-in-out;
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
				'inline_style' => '.is-style-gutena-search-background-transparent .wp-block-search__input, .is-style-gutena-search-background-transparent .wp-block-search__button{ 
					background-color: transparent;
					color: var(--wp--preset--color--secondary, #000000);
				}
				.is-style-gutena-search-background-transparent.wp-block-search .wp-block-search__input{
					padding-left: 1rem;
				}
				',
			)
		);
		
		//comments form
		register_block_style(
			'core/comments',
			array(
				'name'  => 'gutena-post-comment',
				'label' => esc_html__( 'Comment Style', 'gutena' ),
				'inline_style' => '
					.is-style-gutena-post-comment input:not([type="submit"]):not([type="checkbox"]):focus,textarea:focus{
						outline:solid 1px var(--wp--preset--color--primary);
					}

					.is-style-gutena-post-comment .wp-block-button {
						margin-top: var(--wp--style--block-gap,1.5rem);
					}

					.is-style-gutena-post-comment input[type="submit"]:hover {
						box-shadow: inset 0 0 0 100px rgb(0 0 0 / 10%);
					}
					
					.is-style-gutena-post-comment.wp-block-post-comments .commentlist li.comment{
					padding-top: var(--wp--custom--spacing--small);
					}
					
					.is-style-gutena-post-comment.wp-block-post-comments .reply {
						font-size: .85em;
					}
					
					.is-style-gutena-post-comment.wp-block-post-comments .comment-meta .comment-metadata{
						font-size: 13px;
						padding-top: 5px;
						padding-bottom: 10px;
					}
					
					.is-style-gutena-post-comment.wp-block-post-comments .comment-reply-title {
						padding-bottom: 10px;
					}
					.is-style-gutena-post-comment.wp-block-post-comments .comment-form-cookies-consent {
						padding-top: 10px;
						padding-bottom: 10px;
					}
				',
			)
		);

		//categories list
		register_block_style(
			'core/categories',
			array(
				'name'  => 'gutena-categories-style-none',
				'label' => esc_html__( 'List style none', 'gutena' ),
				'inline_style' => '.is-style-gutena-categories-style-none.wp-block-categories-list{ 
					list-style-type: none;
					padding-left: 0px;
				}
				.is-style-gutena-categories-style-none.wp-block-categories-list li a {
					text-decoration: none;
				}
				',
			)
		);
		
	}
	add_action( 'init', 'gutena_register_block_styles' );
}
