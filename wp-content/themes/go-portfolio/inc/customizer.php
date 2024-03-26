<?php

/**
 * Go Portfolio Theme Customizer
 *
 * @package Go Portfolio
 */



/**
 * Add refresh support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function go_portfolio_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'refresh';
    $wp_customize->get_setting('blogdescription')->transport  = 'refresh';
    $wp_customize->get_setting('header_textcolor')->transport = 'refresh';

    //select sanitization function
    function go_portfolio_sanitize_select($input, $setting)
    {
        $input = sanitize_key($input);
        $choices = $setting->manager->get_control($setting->id)->choices;
        return (array_key_exists($input, $choices) ? $input : $setting->default);
    }
    function go_portfolio_sanitize_image($file, $setting)
    {
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tif|tiff'     => 'image/tiff',
            'ico'          => 'image/x-icon'
        );
        //check file type from file name
        $file_ext = wp_check_filetype($file, $mimes);
        //if file has a valid mime type return it, otherwise return default
        return ($file_ext['ext'] ? $file : $setting->default);
    }

    $wp_customize->add_setting('go_portfolio_site_tagline_show', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  '',
        'sanitize_callback' => 'absint',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_site_tagline_show', array(
        'label'      => __('Hide Site Tagline Only? ', 'go-portfolio'),
        'section'    => 'title_tagline',
        'settings'   => 'go_portfolio_site_tagline_show',
        'type'       => 'checkbox',

    ));

    $wp_customize->add_panel('go_portfolio_settings', array(
        'priority'       => 50,
        'title'          => __('Go Portfolio Theme settings', 'go-portfolio'),
        'description'    => __('All Go Portfolio theme settings', 'go-portfolio'),
    ));
    $wp_customize->add_section('go_portfolio_header', array(
        'title' => __('Go Portfolio Header Settings', 'go-portfolio'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Go Portfolio theme header settings', 'go-portfolio'),
        'panel'    => 'go_portfolio_settings',

    ));
    $wp_customize->add_setting('go_portfolio_main_menu_style', array(
        'default'        => 'style1',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'go_portfolio_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_main_menu_style', array(
        'label'      => __('Main Menu Style', 'go-portfolio'),
        'description' => __('You can set the menu style one or two. ', 'go-portfolio'),
        'section'    => 'go_portfolio_header',
        'settings'   => 'go_portfolio_main_menu_style',
        'type'       => 'select',
        'choices'    => array(
            'style1' => __('Style One', 'go-portfolio'),
            'style2' => __('Style Two', 'go-portfolio'),
        ),
    ));

    //Go Portfolio Home intro
    $wp_customize->add_section('go_portfolio_intro', array(
        'title' => __('Portfolio Intro Settings', 'go-portfolio'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Portfoli profile Intro Settings', 'go-portfolio'),
        'panel'    => 'go_portfolio_settings',

    ));
    $wp_customize->add_setting('go_portfolio_intro_show', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  1,
        'sanitize_callback' => 'absint',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_intro_show', array(
        'label'      => __('Show Header Intro? ', 'go-portfolio'),
        'section'    => 'go_portfolio_intro',
        'settings'   => 'go_portfolio_intro_show',
        'type'       => 'checkbox',

    ));
    $wp_customize->add_setting('go_portfolio_intro_img', array(
        'capability'        => 'edit_theme_options',
        'default'           => get_template_directory_uri() . '/assets/img/profile-img.png',
        'sanitize_callback' => 'go_portfolio_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'go_portfolio_intro_img',
        array(
            'label'    => __('Upload Profile Image', 'go-portfolio'),
            'description'    => __('Image size should be 450px width & 460px height for better view.', 'go-portfolio'),
            'section'  => 'go_portfolio_intro',
            'settings' => 'go_portfolio_intro_img',
        )
    ));
    $wp_customize->add_setting('go_portfolio_intro_subtitle', array(
        'default' => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_intro_subtitle', array(
        'label'      => __('Intro Subtitle', 'go-portfolio'),
        'section'    => 'go_portfolio_intro',
        'settings'   => 'go_portfolio_intro_subtitle',
        'type'       => 'text',
    ));
    $wp_customize->add_setting('go_portfolio_intro_title', array(
        'default' => __('Hey! I\'m', 'go-portfolio'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_intro_title', array(
        'label'      => __('Intro Title', 'go-portfolio'),
        'section'    => 'go_portfolio_intro',
        'settings'   => 'go_portfolio_intro_title',
        'type'       => 'text',
    ));
    $wp_customize->add_setting('go_portfolio_intro_designation', array(
        'default' => __('A Web Designer', 'go-portfolio'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_intro_designation', array(
        'label'      => __('Designation', 'go-portfolio'),
        'section'    => 'go_portfolio_intro',
        'settings'   => 'go_portfolio_intro_designation',
        'type'       => 'text',
    ));
    $wp_customize->add_setting('go_portfolio_intro_desc', array(
        'default' => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_intro_desc', array(
        'label'      => __('Intro Description', 'go-portfolio'),
        'section'    => 'go_portfolio_intro',
        'settings'   => 'go_portfolio_intro_desc',
        'type'       => 'textarea',
    ));
    $wp_customize->add_setting('go_portfolio_btn_text_one', array(
        'default' => __('Hire me', 'go-portfolio'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_btn_text_one', array(
        'label'      => __('Button one text', 'go-portfolio'),
        'section'    => 'go_portfolio_intro',
        'settings'   => 'go_portfolio_btn_text_one',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('go_portfolio_btn_url_one', array(
        'default' => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_btn_url_one', array(
        'label'      => __('Button one url', 'go-portfolio'),
        'description'      => __('Keep url empty for hide this button', 'go-portfolio'),
        'section'    => 'go_portfolio_intro',
        'settings'   => 'go_portfolio_btn_url_one',
        'type'       => 'url',
    ));
    $wp_customize->add_setting('go_portfolio_btn_text_two', array(
        'default'     => __('Download CV', 'go-portfolio'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_btn_text_two', array(
        'label'      => __('Button two text', 'go-portfolio'),
        'section'    => 'go_portfolio_intro',
        'settings'   => 'go_portfolio_btn_text_two',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('go_portfolio_btn_url_two', array(
        'default' => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_btn_url_two', array(
        'label'      => __('Button two url', 'go-portfolio'),
        'description'      => __('Keep url empty for hide this button', 'go-portfolio'),
        'section'    => 'go_portfolio_intro',
        'settings'   => 'go_portfolio_btn_url_two',
        'type'       => 'text',
    ));

    //Go Portfolio blog settings
    $wp_customize->add_section('go_portfolio_blog', array(
        'title' => __('Go Portfolio Blog Settings', 'go-portfolio'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Go Portfolio theme blog settings', 'go-portfolio'),
        'panel'    => 'go_portfolio_settings',

    ));
    $wp_customize->add_setting('go_portfolio_blog_container', array(
        'default'        => 'container',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'go_portfolio_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_blog_container', array(
        'label'      => __('Container type', 'go-portfolio'),
        'description' => __('You can set standard container or full width container. ', 'go-portfolio'),
        'section'    => 'go_portfolio_blog',
        'settings'   => 'go_portfolio_blog_container',
        'type'       => 'select',
        'choices'    => array(
            'container' => __('Standard Container', 'go-portfolio'),
            'container-fluid' => __('Full width Container', 'go-portfolio'),
        ),
    ));
    $wp_customize->add_setting('go_portfolio_blog_layout', array(
        'default'        => 'rightside',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'go_portfolio_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_blog_layout', array(
        'label'      => __('Select Blog Layout', 'go-portfolio'),
        'description' => __('Right and Left sidebar only show when sidebar widget is available. ', 'go-portfolio'),
        'section'    => 'go_portfolio_blog',
        'settings'   => 'go_portfolio_blog_layout',
        'type'       => 'select',
        'choices'    => array(
            'rightside' => __('Right Sidebar', 'go-portfolio'),
            'leftside' => __('Left Sidebar', 'go-portfolio'),
            'fullwidth' => __('No Sidebar', 'go-portfolio'),
        ),
    ));
    $wp_customize->add_setting('go_portfolio_blog_style', array(
        'default'        => 'classic',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'go_portfolio_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_blog_style', array(
        'label'      => __('Select Blog Style', 'go-portfolio'),
        'section'    => 'go_portfolio_blog',
        'settings'   => 'go_portfolio_blog_style',
        'type'       => 'select',
        'choices'    => array(
            'classic' => __('Classic Style', 'go-portfolio'),
            'grid' => __('Grid Style', 'go-portfolio'),
            'list' => __('List Style', 'go-portfolio'),
        ),
    ));
    //Go Portfolio page settings
    $wp_customize->add_section('go_portfolio_page', array(
        'title' => __('Go Portfolio Page Settings', 'go-portfolio'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Go Portfolio theme blog settings', 'go-portfolio'),
        'panel'    => 'go_portfolio_settings',

    ));
    $wp_customize->add_setting('go_portfolio_page_container', array(
        'default'        => 'container',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'go_portfolio_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_page_container', array(
        'label'      => __('Page Container type', 'go-portfolio'),
        'description' => __('You can set standard container or full width container for page. ', 'go-portfolio'),
        'section'    => 'go_portfolio_page',
        'settings'   => 'go_portfolio_page_container',
        'type'       => 'select',
        'choices'    => array(
            'container' => __('Standard Container', 'go-portfolio'),
            'container-fluid' => __('Full width Container', 'go-portfolio'),
        ),
    ));
    $wp_customize->add_setting('go_portfolio_page_header', array(
        'default'        => 'show',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'go_portfolio_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('go_portfolio_page_header', array(
        'label'      => __('Show Page header', 'go-portfolio'),
        'section'    => 'go_portfolio_page',
        'settings'   => 'go_portfolio_page_header',
        'type'       => 'select',
        'choices'    => array(
            'show' => __('Show all pages', 'go-portfolio'),
            'hide-home' => __('Hide Only Front Page', 'go-portfolio'),
            'hide' => __('Hide All Pages', 'go-portfolio'),
        ),
    ));




    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'go_portfolio_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'go_portfolio_customize_partial_blogdescription',
            )
        );
    }
}
add_action('customize_register', 'go_portfolio_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function go_portfolio_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function go_portfolio_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function go_portfolio_customize_preview_js()
{
    wp_enqueue_script('go-portfolio-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), GO_PORTFOLIO_VERSION, true);
}
add_action('customize_preview_init', 'go_portfolio_customize_preview_js');
