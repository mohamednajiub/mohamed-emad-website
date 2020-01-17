<?php

function add_styles()
{
    wp_enqueue_style('theme_main_styles', get_template_directory_uri().'/css/main.css');
}


function add_scripts()
{
    wp_enqueue_script('theme_main_script', );
}


function theme_features()
{
    add_theme_support('title-tag');
}

add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");
add_action("after_setup_theme", "theme_features");