<?php
/**
* Settings for theme header
*
*
*/

$wp_customize->add_section( 'cww_header_section', array(
	      'title'   	=> esc_html__( 'Header Options', 'cww-portfolio' ),
	      'priority' 	=> 30
	    )
	  );

/**
* Setting accordion
*
*/
$wp_customize->add_setting( 'cww_header_cta_accordion', 
			array(
			    'capability'        => 'edit_theme_options',
			    'sanitize_callback' => 'sanitize_text_field'
	        )
		);

$wp_customize->add_control( new CWW_Portfolio_Heading($wp_customize, 'cww_header_cta_accordion', 
	array(
	    'label' 			=> esc_html__( 'Header Button Settings', 'cww-portfolio' ),
	    'section'     		=> 'cww_header_section',
	    'class'			=> 'advanced-header-cta-accordion',
	    'accordion'			=> true,
	    'expanded'         		=> true,
	    'priority'			=> 10,
	    'controls_to_wrap'  	=> 4,
	    
       )
    )
);

//enable cta button
$wp_customize->add_setting('cww_header_cta_enable', 
		array(
	        'default'           	=> $default['cww_header_cta_enable'],
	        'sanitize_callback' 	=> 'cww_portfolio_sanitize_checkbox',
	        'transport' 		=> 'postMessage',
		)
	);

$wp_customize->add_control( new CWW_Portfolio_Checkbox($wp_customize, 'cww_header_cta_enable', 
	array(
	    'label' 			=> esc_html__( 'Show Button', 'cww-portfolio' ),
	    'description' 		=> esc_html__('Show or hide button on header','cww-portfolio'),
	    'section'     		=> 'cww_header_section',
	    'priority'			=> 20,
	    
       )
    )
);

 //selective refresh for header button
$wp_customize->selective_refresh->add_partial( 'cww_header_cta_enable', array(
        'selector'        => '.header-cta-wrapp',
        'render_callback' => 'cww_portfolio_header_button',
    ) );

//cta button text
$wp_customize->add_setting('cww_header_cta_text', 
		array(
	        'default'           => $default['cww_header_cta_text'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'transport'         => 'postMessage'
		)
	);

$wp_customize->add_control( 'cww_header_cta_text', array(
	        'label'         	=> esc_html__( 'Button Text', 'cww-portfolio' ),
	        'section'       	=> 'cww_header_section',
	        'active_callback' 	=> 'cww_portfolio_header_cta_cb',
	        'type'      		=> 'text',
	        'priority'		=> 30,
	        
	      ) );

//cta button URL
$wp_customize->add_setting('cww_header_cta_url', 
		array(
	        'default'           => $default['cww_header_cta_url'],
	        'sanitize_callback' => 'esc_url_raw',
	        'transport'         => 'postMessage'
		)
	);

$wp_customize->add_control( 'cww_header_cta_url', array(
	        'label'         	=> esc_html__( 'Button URL', 'cww-portfolio' ),
	        'section'       	=> 'cww_header_section',
	        'active_callback' 	=> 'cww_portfolio_header_cta_cb',
	        'type'      		=> 'text',
	        'priority'			=> 40,
	        
	      ) );



/**
 * open button URL to new tab 
 * @since: 1.1.4
 * 
 * 
 */
$wp_customize->add_setting('cww_header_cta_new_tab', 
		array(
	        'default'           	=> $default['cww_header_cta_new_tab'],
	        'sanitize_callback' 	=> 'cww_portfolio_sanitize_checkbox',
	        
		)
	);

$wp_customize->add_control( new CWW_Portfolio_Checkbox($wp_customize, 'cww_header_cta_new_tab', 
	array(
	    'label' 			=> esc_html__( 'Open In New Tab?', 'cww-portfolio' ),
	    'description' 		=> esc_html__('Enable the option to open button URL to new tab.','cww-portfolio'),
	    'section'     		=> 'cww_header_section',
	    'active_callback' 		=> 'cww_portfolio_header_cta_cb',
	    'priority'			=> 41,
	    
       )
    )
);


//cta button bg color
$wp_customize->add_setting('cww_header_cta_bg', 
			array(
		        'default'           => $default['cww_header_cta_bg'],
		        'sanitize_callback' => 'cww_portfolio_sanitize_color',
		        'transport'         => 'postMessage'
		    )
		);

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cww_header_cta_bg', 
	array(
        'label'           	=> esc_html__( 'Button Background Color', 'cww-portfolio' ),
        'active_callback' 	=> 'cww_portfolio_header_cta_cb',
        'section'         	=> 'cww_header_section',
        'priority'		=> 50,
    ) ) );



/**
* Setting accordion
*
*/
$wp_customize->add_setting( 'cww_header_additional_accordion', 
			array(
			    'capability'        => 'edit_theme_options',
			    'sanitize_callback' => 'sanitize_text_field'
	        )
		);

$wp_customize->add_control( new CWW_Portfolio_Heading($wp_customize, 'cww_header_additional_accordion', 
	array(
	    'label' 			=> esc_html__( 'Additional Options', 'cww-portfolio' ),
	    'section'     		=> 'cww_header_section',
	    'class'			=> 'advanced-header-options-accordion',
	    'accordion'			=> true,
	    'expanded'         		=> false,
	    'priority'			=> 60,
	    'controls_to_wrap'  	=> 8,
	    
       )
    )
);



//header bg color
$wp_customize->add_setting('cww_header_bg', 
			array(
		        'default'           => $default['cww_header_bg'],
		        'sanitize_callback' => 'cww_portfolio_sanitize_color',
		        'transport'         => 'postMessage'
		    )
		);

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cww_header_bg', 
	array(
        'label'           	=> esc_html__( 'Header Background Color', 'cww-portfolio' ),
        'section'         	=> 'cww_header_section',
        'priority'		=> 80,
    ) ) );


//Menu link colors
$wp_customize->add_setting('cww_menu_link_color', 
			array(
		        'default'           => $default['cww_menu_link_color'],
		        'sanitize_callback' => 'cww_portfolio_sanitize_color',
		        'transport'         => 'postMessage'
		    )
		);

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cww_menu_link_color', 
	array(
        'label'           	=> esc_html__( 'Menu Link Color', 'cww-portfolio' ),
        'section'         	=> 'cww_header_section',
        'priority'		=> 90,
    ) ) );


//Menu link color:hover
$wp_customize->add_setting('cww_menu_link_color_hover', 
			array(
		        'default'           => $default['cww_menu_link_color_hover'],
		        'sanitize_callback' => 'cww_portfolio_sanitize_color',
		        'transport'         => 'postMessage'
		    )
		);

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cww_menu_link_color_hover', 
	array(
        'label'           	=> esc_html__( 'Menu Link Color:Hover', 'cww-portfolio' ),
        'section'         	=> 'cww_header_section',
        'priority'		=> 100,
    ) ) );
