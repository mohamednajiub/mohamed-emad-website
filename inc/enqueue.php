
<?php

/*
@package najiub theme
    ======================
        Admin Page Enqueue
    ======================
*/

function najiub_load_admin_scripts($hook)
{
    echo $hook;
    if( $hook != 'toplevel_page_najiub' ) { return; }

    wp_register_style( 'najiub_admin_styles', get_template_directory_uri() . '/css/najiub_admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'najiub_admin_styles' );

}

add_action( 'admin_enqueue_scripts', 'najiub_load_admin_scripts');