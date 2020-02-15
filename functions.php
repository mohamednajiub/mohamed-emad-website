<?php

function add_styles()
{
    wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.min.css');
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

function theme_post_types(){
    register_post_type( 'technologies',
    // CPT Options
        array(
            'labels' => array(
                'menu_name' => 'Technologies',
                'name' => 'Technologies',
                'singular_name' => 'Technology',
                'add_new' => 'Add Technology',
                'add_new_item' => 'Add Technology',
                'edit_item' => 'Edit Technology',
                'view_item' => 'View Technology',
                'view_items' => 'View All Technologies',
                'search_items' => 'Search in Technologies',
                'not_found' => 'No Technologies found in your search',
                'all_items' => 'All Technologies',
                'insert_into_item' => 'Insert in Technologies Post Type',
                'uploaded_to_this_item' => 'Upload this to Technologies Post Type',
                
            ),
            'description' => 'Technogies is the skills that I Know',
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-dashboard',
            'supports' => array('title', 'excerpt', 'thumbnail'),
        )
    );
}

add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");
add_action("after_setup_theme", "theme_features");
add_action( 'init', 'theme_post_types' );