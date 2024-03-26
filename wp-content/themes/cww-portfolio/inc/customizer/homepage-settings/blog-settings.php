<?php
/**
* Settings related to blogs
*
*/
$wp_customize->add_section( 'cww_homepage_blog_section', array(
	      'title'   	=> esc_html__( 'Blog Section', 'cww-portfolio' ),
	      'panel'    	=> 'cww_homepage_panel',
	      'priority'   	=> 60
	    )
	  );

//enable or disable section
$wp_customize->add_setting('cww_blog_enable', 
		array(
	        'default'           	=> $default['cww_blog_enable'],
	        'sanitize_callback' 	=> 'cww_portfolio_sanitize_checkbox',
		)
	);

$wp_customize->add_control( new CWW_Portfolio_Checkbox($wp_customize, 'cww_blog_enable', 
	array(
	    'label' 			=> esc_html__( 'Enable or Disable Section', 'cww-portfolio' ),
	    'section'     		=> 'cww_homepage_blog_section',
	    'priority'			=> 1,
	    
       )
    )
);

$wp_customize->add_setting('cww_blog_title', 
	array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
	)
);

$wp_customize->add_control( 'cww_blog_title', array(
	        'label'         	=> esc_html__( 'Section Title', 'cww-portfolio' ),
	        'section'       	=> 'cww_homepage_blog_section',
	        'type'      		=> 'text',
	        'priority'			=> 30,
	        
	      ) );


$wp_customize->add_setting('cww_blog_sub_title', 
	array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
	)
);

$wp_customize->add_control( 'cww_blog_sub_title', array(
	        'label'         	=> esc_html__( 'Section Subitle', 'cww-portfolio' ),
	        'section'       	=> 'cww_homepage_blog_section',
	        'type'      		=> 'text',
	        'priority'			=> 40,
	        
	      ) );


$wp_customize->add_setting('cww_blog_excerpts', 
	array(
        'sanitize_callback' => 'cww_portfolio_sanitize_number'
	)
);

$wp_customize->add_control( 'cww_blog_excerpts', array(
	        'label'         	=> esc_html__( 'Blog Excerpts', 'cww-portfolio' ),
	        'description' 		=> esc_html__( 'Add excerpts for blog or leave blank to hide excerpt','cww-portfolio'),
	        'section'       	=> 'cww_homepage_blog_section',
	        'type'      		=> 'number',
	        'priority'			=> 50,
	        
	      ) );