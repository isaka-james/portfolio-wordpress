<?php
/**
* Settings related to theme banner section
*
*/

$wp_customize->add_panel( 'cww_homepage_panel', array(
      'priority'         =>      35,
      'capability'       =>      'edit_theme_options',
      'theme_supports'   => '',
      'title'            =>      esc_html__( 'Homepage Options', 'cww-portfolio' ),
      'description'      =>      esc_html__( 'This allows to edit general theme settings', 'cww-portfolio' ),
  ));


$wp_customize->add_section( 'cww_homepage_section', array(
	      'title'    => esc_html__( 'Main Banner', 'cww-portfolio' ),
	      'panel'    => 'cww_homepage_panel',
            'priority' => 1
	    )
	  );