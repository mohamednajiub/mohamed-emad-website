<?php

function add_styles()
{
    wp_enqueue_style('theme_main_styles', '');
}


function add_scripts()
{
    wp_enqueue_script('theme_main_script', '');
}

add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");
