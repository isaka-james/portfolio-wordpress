<?php
/**
* Dynamic styles for theme
*
*
*/

add_action( 'wp_enqueue_scripts', 'cww_portfolio_dynamic_styles' );

if( ! function_exists('cww_portfolio_dynamic_styles')):
	function cww_portfolio_dynamic_styles(){

		ob_start();

		$default 					= cww_portfolio_customizer_defaults();
		$cww_header_cta_bg 			= get_theme_mod( 'cww_header_cta_bg', $default['cww_header_cta_bg'] );
		$cww_header_bg 				= get_theme_mod( 'cww_header_bg', $default['cww_header_bg'] );
		$cww_menu_link_color 		= get_theme_mod( 'cww_menu_link_color', $default['cww_menu_link_color'] );
		$cww_menu_link_color_hover 	= get_theme_mod( 'cww_menu_link_color_hover', $default['cww_menu_link_color_hover'] );
		$cww_banner_bg 				= get_theme_mod( 'cww_banner_bg', $default['cww_banner_bg'] );
		$cww_banner_animated_color  = get_theme_mod( 'cww_banner_animated_color', $default['cww_banner_animated_color'] );
		$cww_theme_color 			= get_theme_mod( 'cww_theme_color', $default['cww_theme_color'] );


		 if($cww_header_cta_bg != $default['cww_header_cta_bg'] ){ ?>
			.header-cta-wrapp a{
				background-color: <?php echo  cww_portfolio_sanitize_color($cww_header_cta_bg);?>;
			}
		<?php }

		if( $cww_header_bg != $default['cww_header_bg'] ){ ?>
			header.site-header{
				background-color: <?php echo  cww_portfolio_sanitize_color($cww_header_bg);?>;
			}
		<?php } 

		if( $cww_menu_link_color != $default['cww_menu_link_color'] ){?>
			.main-navigation a{
				color: <?php echo  cww_portfolio_sanitize_color($cww_menu_link_color);?>;
			}
		<?php }

		if( $cww_menu_link_color_hover != $default['cww_menu_link_color_hover'] ){?>
			.main-navigation a:hover{
				color: <?php echo  cww_portfolio_sanitize_color($cww_menu_link_color_hover);?>;
			}
		<?php }

		if( $cww_banner_bg != $default['cww_banner_bg'] ){?>
			section.cww-main-banner{
				background: <?php echo  cww_portfolio_sanitize_color($cww_banner_bg);?>;
			}

		<?php }

		if( $cww_banner_animated_color != $default['cww_banner_animated_color'] ){?>
			section.cww-main-banner .animated-bg{
				background: <?php echo  cww_portfolio_sanitize_color($cww_banner_animated_color);?>;
			}

		<?php }

		if( $cww_theme_color != $default['cww_theme_color'] ){?>
			:root{
				--theme-color: <?php echo  cww_portfolio_sanitize_color($cww_theme_color);?>;
			}

		<?php }

		$custom_css = ob_get_clean();
		$custom_css = cww_portfolio_strip_css_whitespace( $custom_css );

		wp_add_inline_style( 'cww-portfolio-style', $custom_css );

	}
endif;