<?php

function add_styles()
{
    wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css');
    wp_enqueue_style('bootstrap_grid', get_template_directory_uri().'/css/bootstrap-grid.min.css');
    wp_enqueue_style('theme_main_styles', get_template_directory_uri().'/css/main.css');
}


function add_scripts()
{
    wp_enqueue_script('theme_main_script' );
}


function theme_features()
{
    add_theme_support('title-tag');
    // Enable support for Post Thumbnails and featured images on posts and pages.
    add_theme_support('post-thumbnails');
    // html5 features
    $html5_args = array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    );
    add_theme_support( 'html5', $html5_args );
}

add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");
add_action("after_setup_theme", "theme_features");