<?php
/**
* Default settings for theme customizer
*
*
*/
if( ! function_exists('cww_portfolio_customizer_defaults')):
	function cww_portfolio_customizer_defaults(){

		$defaults = array();

		$defaults['cww_home_banner']                 	= 0;
		$defaults['cww_header_cta_enable'] 				= 0;
		$defaults['cww_header_cta_text'] 				= esc_html__('Contact Now','cww-portfolio');
		$defaults['cww_header_cta_url'] 				= '#';
		$defaults['cww_header_cta_new_tab'] 			= 0;
		$defaults['cww_header_cta_bg'] 					= '#6138bd';
		$defaults['cww_header_bg'] 						= '#fff';
		$defaults['cww_menu_link_color'] 				= '#11204d';
		$defaults['cww_menu_link_color_hover'] 			= '';
		$defaults['cww_icon_fb']						= '';
		$defaults['cww_icon_insta'] 					= '';
		$defaults['cww_icon_twitter'] 					= '';
		$defaults['cww_icon_lnkedin'] 					= '';
		$defaults['cww_theme_color'] 					= '#ff3d4f';

		$defaults['cww_banner_image'] 					= '';
		$defaults['cww_banner_text_sm'] 				= esc_html__("Hi There, I'm",'cww-portfolio');
		$defaults['cww_banner_text_lg'] 				= esc_html__('John Doe','cww-portfolio');
		$defaults['cww_banner_text_sm2'] 				= esc_html__('based in Los Angeles, USA','cww-portfolio');
		$defaults['cww_banner_btn_text'] 				= esc_html__('View My Works','cww-portfolio');
		$defaults['cww_banner_btn_url'] 				= '#';
		$defaults['cww_banner_btn_text_sec'] 			= esc_html__('Contact Me','cww-portfolio');
		$defaults['cww_banner_btn_url_sec'] 			= '#';
		$defaults['cww_banner_bg'] 						= 'rgba(249, 86, 79, 0.13)';
		$defaults['cww_banner_animated_color'] 			= '#ff3d4f';

		$defaults['cww_about_title'] 					= esc_html__('About Me','cww-portfolio');
		$defaults['cww_about_sub_title'] 				= '';
		$defaults['cww_about_image'] 					= '';
		$defaults['cww_about_counter_value_first'] 		= 155;
		$defaults['cww_about_counter_text_first'] 		= esc_html__('Completed projects','cww-portfolio');
		$defaults['cww_about_counter_value_sec'] 		= 120;
		$defaults['cww_about_counter_text_sec'] 		= esc_html__('Positive reviews','cww-portfolio');


		$defaults['cww_service_title'] 					= esc_html__('What We Offer','cww-portfolio');
		$defaults['cww_service_sub_title'] 				= '';
		$defaults['cww_portfolio_title'] 				= esc_html__('Our Portfolio','cww-portfolio');
		$defaults['cww_portfolio_sub_title'] 			= '';
		$defaults['cww_portfolio_post'] 				= 0;

		$defaults['cww_service_enable'] 				= 1;
		$defaults['cww_portfolio_enable'] 				= 1;
		$defaults['cww_blog_enable'] 					= 1;
		$defaults['cww_contact_enable'] 				= 1;
		$defaults['cww_cta_enable'] 					= 1;
		$defaults['cww_about_enable'] 					= 1;
		

		return $defaults;
	}
endif;