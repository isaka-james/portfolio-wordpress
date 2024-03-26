<?php
/**
 * CWW Portfolio Theme Customizer
 *
 * @package CWW_Portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cww_portfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'cww_portfolio_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'cww_portfolio_customize_partial_blogdescription',
			)
		);
	}



	$default = cww_portfolio_customizer_defaults();

	$wp_customize->register_control_type( 'CWW_Portfolio_Checkbox' );
	$wp_customize->register_control_type( 'CWW_Portfolio_Heading' );
	

	/**
	 * Theme color 
	 * 
	 * 
	 */ 
	$wp_customize->add_setting('cww_theme_color', 
			array(
		        'default'           => $default['cww_theme_color'],
		        'sanitize_callback' => 'cww_portfolio_sanitize_color',
		    )
		);

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cww_theme_color', 
		array(
	        'label'           	=> esc_html__( 'Theme Color', 'cww-portfolio' ),
	        'active_callback' 	=> 'cww_portfolio_header_cta_cb',
	        'section'         	=> 'colors',
	        'priority'			=> 50,
	    ) ) );




	/**
	* Header Options
	*
	*/
	require get_template_directory() . '/inc/customizer/header-settings.php';


	/**
	* Main Banner
	*/
	require get_template_directory() . '/inc/customizer/homepage-settings/banner-settings.php';

	
	//portfolio settings
	require get_template_directory() . '/inc/customizer/homepage-settings/portfolio-settings.php';

	
	//Blog settings
	require get_template_directory() . '/inc/customizer/homepage-settings/blog-settings.php';



	/**
	* Social Icons
	*/
	require get_template_directory() . '/inc/customizer/social-icons.php';

	//footer settings
	require get_template_directory() . '/inc/customizer/footer-settings.php';



	if( ! class_exists('CWW_Portfolio_Pro') ):
		// Register custom section types.
		$wp_customize->register_section_type( 'CWW_Portfolio_Customize_Section_Pro' );

		// Register sections.
		$wp_customize->add_section(
		    new CWW_Portfolio_Customize_Section_Pro(
		        $wp_customize,
		        'cww-portfolio-pro',
		        array(
		            'title'    => esc_html__( 'Premium Addons Available', 'cww-portfolio' ),
		            'pro_text' => esc_html__( 'Buy Now','cww-portfolio' ),
		            'pro_text1' => esc_html__( 'Compare','cww-portfolio' ),
		            'pro_url'  => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
		            'priority' => 0,
		        )
		    )
		);
		$wp_customize->add_setting(
			'cww_portfolio_upgrade',
			array(
				'section' => 'cww-portfolio-pro',
				'sanitize_callback' => 'esc_attr',
			)
		);

		$wp_customize->add_control(
			'cww_portfolio_upgrade',
			array(
				'section' => 'cww-portfolio-pro'
			)
		);

	endif;


	
}
add_action( 'customize_register', 'cww_portfolio_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cww_portfolio_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cww_portfolio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cww_portfolio_customize_preview_js() {
	wp_enqueue_script( 'cww-portfolio-customizer', get_theme_file_uri('/assets/js/customizer.js'), array( 'customize-preview' ), CWW_PORTFOLIO_VER, true );
}
add_action( 'customize_preview_init', 'cww_portfolio_customize_preview_js' );


function cww_portfolio_header_cta_cb($control){
	$cww_header_cta_enable = get_theme_mod('cww_header_cta_enable', 1 );
	if( $cww_header_cta_enable ){
		return true;
	}else{
		return false;
	}
}