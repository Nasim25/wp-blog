<?php

function nasim_theme_setup()
{
    load_theme_textdomain('nasim_blog');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'nasim_blog')
    ));
}
add_action('after_setup_theme', 'nasim_theme_setup');

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function dynamic_widget()
{
    register_sidebar(array(
        'name' => __('Widget', 'nasim_blog'),
        'id' => 'sidebar-1',
        'description' => __('Our Widget', 'nasim_blog'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

add_action('widgets_init','dynamic_widget');

function nasim_blog_script_css()
{
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Droid+Sans:400,700');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/style.css', array(), 'all');
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), 'all');
    wp_enqueue_style('colors-css', get_template_directory_uri() . '/css/colors.css', array(), 'all');
    wp_enqueue_style('garden-css', get_template_directory_uri() . '/css/version/garden.css', array(), 'all');

    wp_enqueue_script('tether-js', get_template_directory_uri() . '/js/tether.min.js', array(), 'all');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'all');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), 'all');
}

add_action('wp_enqueue_scripts', 'nasim_blog_script_css');
