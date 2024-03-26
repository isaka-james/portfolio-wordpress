<?php 

function cww_portfolio_customizer_controller_scripts(){

	wp_enqueue_style( 'cww-portfolio-controller-checkbox', get_theme_file_uri( '/inc/customizer/controllers/checkbox/checkbox.css' ), array(), CWW_PORTFOLIO_VER );

	wp_enqueue_style( 'cww-portfolio-controller-heading', get_theme_file_uri( '/inc/customizer/controllers/controller-heading/controller-heading.css' ), array(), CWW_PORTFOLIO_VER );
	
	
	wp_enqueue_script( 'cww-portfolio-controller-heading', get_theme_file_uri('/inc/customizer/controllers/controller-heading/controller-heading.js'), array('jquery','customize-controls'), CWW_PORTFOLIO_VER, true );

	

}
add_action('customize_controls_enqueue_scripts','cww_portfolio_customizer_controller_scripts');



/**
* Load controllers for customizer
*
*/
$file_loc = get_template_directory().'/inc/customizer/controllers/';

$file_paths = array(

	$file_loc.'checkbox/checkbox',
	$file_loc.'controller-heading/controller-heading',
	$file_loc.'alpha-color-picker/alpha-color-control',
	$file_loc.'custom-controller',

);

foreach ( $file_paths as $file_path ){

	require $file_path.'.php'; 
}