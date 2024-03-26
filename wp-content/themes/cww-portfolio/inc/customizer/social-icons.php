<?php
/**
* Social Icons Settings
*
*
*/

$wp_customize->add_section( 'cww_social_icons_section', array(
	      'title'   	=> esc_html__( 'Social Icons', 'cww-portfolio' ),
	      'priority' 	=> 40
	    )
	  );


$icon_arrays = array(

	'cww_icon_fb'		=> esc_html__('Facebook','cww-portfolio'),
	'cww_icon_insta' 	=> esc_html__('Instagram','cww-portfolio'),
	'cww_icon_twitter'  => esc_html__('Twitter','cww-portfolio'),
	'cww_icon_lnkedin'  => esc_html__('LinkedIn','cww-portfolio'),

);

foreach( $icon_arrays as 	$key => $value ){

	$wp_customize->add_setting( $key , array(
	    'default'               => $default[$key],
	    'sanitize_callback'     => 'esc_url_raw',
	  ) );

	$wp_customize->add_control( $key , array(
        'label'         => $value,
        'description'   => esc_html__('Add url for your social media page','cww-portfolio'),
        'section'       => 'cww_social_icons_section',
        'type'      	=> 'text',
        
      ) );

}