<?php

function myFirstTheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menu('header', 'Header Menu');
}

function myFirstTheme_registerAssets()
{
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['popper', 'jquery_min'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    wp_register_script('jquery_min', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function myFirstTheme_titleSeparator()
{
    return '|';
}

function myFirstTheme_menuClass($classes)
// Set bootstrap class on li tags
{
    $classes[] = 'nav-item';
    return $classes;
}

function myFirstTheme_linkClass($atts)
// Set bootstrap class on links
{
    $atts['class'] = 'nav-link';
    return $atts;
}

add_action('after_setup_theme', 'myFirstTheme_supports');
add_action('wp_enqueue_scripts', 'myFirstTheme_registerAssets');
add_filter('document_title_separator', 'myFirstTheme_titleSeparator');
add_filter('nav_menu_css_class', 'myFirstTheme_menuClass');
add_filter('nav_menu_link_attributes', 'myFirstTheme_linkClass');
