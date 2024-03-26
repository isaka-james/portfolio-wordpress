<?php

/**
 * Portfolio Canvas Theme Customizer
 *
 * @package Portfolio Canvas
 */



/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_canvas_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    //select sanitization function
    function portfolio_canvas_sanitize_select($input, $setting)
    {
        $input = sanitize_key($input);
        $choices = $setting->manager->get_control($setting->id)->choices;
        return (array_key_exists($input, $choices) ? $input : $setting->default);
    }
    function portfolio_canvas_sanitize_image($file, $setting)
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

    $wp_customize->add_setting('portfolio_canvas_site_tagline_show', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  '',
        'sanitize_callback' => 'absint',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_site_tagline_show', array(
        'label'      => __('Hide Site Tagline Only? ', 'portfolio-canvas'),
        'section'    => 'title_tagline',
        'settings'   => 'portfolio_canvas_site_tagline_show',
        'type'       => 'checkbox',

    ));

    $wp_customize->add_panel('portfolio_canvas_settings', array(
        'priority'       => 50,
        'title'          => __('Portfolio Canvas Theme settings', 'portfolio-canvas'),
        'description'    => __('All Portfolio Canvas theme settings', 'portfolio-canvas'),
    ));
    $wp_customize->add_section('portfolio_canvas_header', array(
        'title' => __('Portfolio Canvas Header Settings', 'portfolio-canvas'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Portfolio Canvas theme header settings', 'portfolio-canvas'),
        'panel'    => 'portfolio_canvas_settings',

    ));
    $wp_customize->add_setting('portfolio_canvas_main_menu_style', array(
        'default'        => 'style1',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'portfolio_canvas_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_main_menu_style', array(
        'label'      => __('Main Menu Style', 'portfolio-canvas'),
        'description' => __('You can set the menu style one or two. ', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_header',
        'settings'   => 'portfolio_canvas_main_menu_style',
        'type'       => 'select',
        'choices'    => array(
            'style1' => __('Style One', 'portfolio-canvas'),
            'style2' => __('Style Two', 'portfolio-canvas'),
        ),
    ));

    //portfolio Canvas  Home intro
    $wp_customize->add_section('portfolio_canvas_intro', array(
        'title' => __('Portfolio Intro Settings', 'portfolio-canvas'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Portfoli profile Intro Settings', 'portfolio-canvas'),
        'panel'    => 'portfolio_canvas_settings',

    ));
    $wp_customize->add_setting('portfolio_canvas_intro_show', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  '1',
        'sanitize_callback' => 'absint',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_intro_show', array(
        'label'      => __('Show Header Intro? ', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_intro',
        'settings'   => 'portfolio_canvas_intro_show',
        'type'       => 'checkbox',

    ));
    $wp_customize->add_setting('portfolio_canvas_intro_img', array(
        'capability'        => 'edit_theme_options',
        'default'           => get_template_directory_uri() . '/assets/img/profile-img.png',
        'sanitize_callback' => 'portfolio_canvas_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'portfolio_canvas_intro_img',
        array(
            'label'    => __('Upload Profile Image', 'portfolio-canvas'),
            'description'    => __('Image size should be 450px width & 460px height for better view.', 'portfolio-canvas'),
            'section'  => 'portfolio_canvas_intro',
            'settings' => 'portfolio_canvas_intro_img',
        )
    ));
    $wp_customize->add_setting('portfolio_canvas_intro_subtitle', array(
        'default' => __('WELCOME TO MY WORLD', 'portfolio-canvas'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_intro_subtitle', array(
        'label'      => __('Intro Subtitle', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_intro',
        'settings'   => 'portfolio_canvas_intro_subtitle',
        'type'       => 'text',
    ));
    $wp_customize->add_setting('portfolio_canvas_intro_title', array(
        'default' => __('Hi, I\'m Jone Doe', 'portfolio-canvas'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_intro_title', array(
        'label'      => __('Intro Title', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_intro',
        'settings'   => 'portfolio_canvas_intro_title',
        'type'       => 'text',
    ));
    $wp_customize->add_setting('portfolio_canvas_intro_designation', array(
        'default' => __('a Designer', 'portfolio-canvas'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_intro_designation', array(
        'label'      => __('Designation', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_intro',
        'settings'   => 'portfolio_canvas_intro_designation',
        'type'       => 'text',
    ));
    $wp_customize->add_setting('portfolio_canvas_intro_desc', array(
        'default' => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_intro_desc', array(
        'label'      => __('Intro Description', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_intro',
        'settings'   => 'portfolio_canvas_intro_desc',
        'type'       => 'textarea',
    ));
    $wp_customize->add_setting('portfolio_canvas_btn_text_one', array(
        'default' => __('Hire me', 'portfolio-canvas'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('portfolio_canvas_btn_text_one', array(
        'label'      => __('Button one text', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_intro',
        'settings'   => 'portfolio_canvas_btn_text_one',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('portfolio_canvas_btn_url_one', array(
        'default' => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_btn_url_one', array(
        'label'      => __('Button one url', 'portfolio-canvas'),
        'description'      => __('Keep url empty for hide this button', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_intro',
        'settings'   => 'portfolio_canvas_btn_url_one',
        'type'       => 'url',
    ));
    $wp_customize->add_setting('portfolio_canvas_btn_text_two', array(
        'default'     => __('Download CV', 'portfolio-canvas'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('portfolio_canvas_btn_text_two', array(
        'label'      => __('Button two text', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_intro',
        'settings'   => 'portfolio_canvas_btn_text_two',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('portfolio_canvas_btn_url_two', array(
        'default' => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_btn_url_two', array(
        'label'      => __('Button two url', 'portfolio-canvas'),
        'description'      => __('Keep url empty for hide this button', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_intro',
        'settings'   => 'portfolio_canvas_btn_url_two',
        'type'       => 'text',
    ));

    //portfolio Canvas  blog settings
    $wp_customize->add_section('portfolio_canvas_blog', array(
        'title' => __('Portfolio Canvas Blog Settings', 'portfolio-canvas'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Portfolio Canvas theme blog settings', 'portfolio-canvas'),
        'panel'    => 'portfolio_canvas_settings',

    ));
    $wp_customize->add_setting('portfolio_canvas_blog_container', array(
        'default'        => 'container',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'portfolio_canvas_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_blog_container', array(
        'label'      => __('Container type', 'portfolio-canvas'),
        'description' => __('You can set standard container or full width container. ', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_blog',
        'settings'   => 'portfolio_canvas_blog_container',
        'type'       => 'select',
        'choices'    => array(
            'container' => __('Standard Container', 'portfolio-canvas'),
            'container-fluid' => __('Full width Container', 'portfolio-canvas'),
        ),
    ));
    $wp_customize->add_setting('portfolio_canvas_blog_layout', array(
        'default'        => 'fullwidth',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'portfolio_canvas_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_blog_layout', array(
        'label'      => __('Select Blog Layout', 'portfolio-canvas'),
        'description' => __('Right and Left sidebar only show when sidebar widget is available. ', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_blog',
        'settings'   => 'portfolio_canvas_blog_layout',
        'type'       => 'select',
        'choices'    => array(
            'rightside' => __('Right Sidebar', 'portfolio-canvas'),
            'leftside' => __('Left Sidebar', 'portfolio-canvas'),
            'fullwidth' => __('No Sidebar', 'portfolio-canvas'),
        ),
    ));
    $wp_customize->add_setting('portfolio_canvas_blog_style', array(
        'default'        => 'list',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'portfolio_canvas_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_blog_style', array(
        'label'      => __('Select Blog Style', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_blog',
        'settings'   => 'portfolio_canvas_blog_style',
        'type'       => 'select',
        'choices'    => array(
            'grid' => __('Grid Style', 'portfolio-canvas'),
            'list' => __('List Style', 'portfolio-canvas'),
            'classic' => __('Classic Style', 'portfolio-canvas'),
        ),
    ));
    //portfolio Canvas  page settings
    $wp_customize->add_section('portfolio_canvas_page', array(
        'title' => __('Portfolio Canvas Page Settings', 'portfolio-canvas'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Portfolio Canvas theme blog settings', 'portfolio-canvas'),
        'panel'    => 'portfolio_canvas_settings',

    ));
    $wp_customize->add_setting('portfolio_canvas_page_container', array(
        'default'        => 'container',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'portfolio_canvas_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_page_container', array(
        'label'      => __('Page Container type', 'portfolio-canvas'),
        'description' => __('You can set standard container or full width container for page. ', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_page',
        'settings'   => 'portfolio_canvas_page_container',
        'type'       => 'select',
        'choices'    => array(
            'container' => __('Standard Container', 'portfolio-canvas'),
            'container-fluid' => __('Full width Container', 'portfolio-canvas'),
        ),
    ));
    $wp_customize->add_setting('portfolio_canvas_page_header', array(
        'default'        => 'show',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'portfolio_canvas_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('portfolio_canvas_page_header', array(
        'label'      => __('Show Page header', 'portfolio-canvas'),
        'section'    => 'portfolio_canvas_page',
        'settings'   => 'portfolio_canvas_page_header',
        'type'       => 'select',
        'choices'    => array(
            'show' => __('Show all pages', 'portfolio-canvas'),
            'hide-home' => __('Hide Only Front Page', 'portfolio-canvas'),
            'hide' => __('Hide All Pages', 'portfolio-canvas'),
        ),
    ));




    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'portfolio_canvas_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'portfolio_canvas_customize_partial_blogdescription',
            )
        );
    }
}
add_action('customize_register', 'portfolio_canvas_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function portfolio_canvas_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function portfolio_canvas_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function portfolio_canvas_customize_preview_js()
{
    wp_enqueue_script('portfolio-canvas-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), PORTFOLIO_CANVAS_VERSION, true);
}
add_action('customize_preview_init', 'portfolio_canvas_customize_preview_js');
