<?php
/**
* Template Name: CWW Home - Customizer
*
*
*
*/
get_header();

/*
* Hooked
* cww_portfolio_banner() 	------------ 10
* cww_portfolio_about()  	------------ 20
* cww_portfolio_cta()    	------------ 30
* cww_portfolio_service() 	------------ 40
* cww_portfolio_gallery() 	------------ 50
* cww_portfolio_blog() 		------------ 60
* cww_portfolio_contact() 	------------ 70
*
*/

do_action('cww_portfolio_home');


get_footer();