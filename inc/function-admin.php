<?php

/*
@package Mohamed Najiub theme
    ==================
        Admin Page
    ==================
*/
function najiub_admin_page()
{
    // add najiub page in admin side bar menu
    add_menu_page( 'Najiub Theme Options', 'Najiub', 'manage_options', 'najiub', 'najiub_theme_create_page', get_template_directory_uri() . '/images/icons/favicon-16x16.png', 110 );
    
    // add najiub admin subpages

    add_submenu_page( 'najiub', 'Najiub Theme Options', 'General', 'manage_options', 'najiub', 'najiub_theme_create_page');

    // activate custom settings
    add_action( 'admin_init', 'najiub_custom_settings' );
}

function najiub_theme_create_page()
{
    require_once( get_template_directory() . '/inc/templates/najiub-admin.php');
}

function najiub_custom_settings()
{
    /* 
        ===========================
            add section to page
        ===========================
    */
    add_settings_section( 'najiub-contact-info-group', 'Contact Information', 'najiub_contact_info_message', 'najiub' );

    /* 
        ========================
            Register options
        ========================
    */

    /* register social Media fields */
    register_setting( 'najiub-contact-info-group', 'github', 'najiub_sanitize_handler' );
    register_setting( 'najiub-contact-info-group', 'linkedin', 'najiub_sanitize_handler' );
    register_setting( 'najiub-contact-info-group', 'medium', 'najiub_sanitize_handler' );
    register_setting( 'najiub-contact-info-group', 'twitter', 'najiub_sanitize_handler' );
    register_setting( 'najiub-contact-info-group', 'facebook', 'najiub_sanitize_handler' );
    register_setting( 'najiub-contact-info-group', 'instagram', 'najiub_sanitize_handler' );

    /* register contact information fields */

    /* email */
    register_setting( 'najiub-contact-info-group', 'email', 'najiub_sanitize_handler' );

    /* phone numbers */
    register_setting( 'najiub-contact-info-group', 'mobile_phone_number', 'najiub_sanitize_handler' );
    register_setting( 'najiub-contact-info-group', 'landline_phone_number', 'najiub_sanitize_handler' );

    /* location */
    register_setting( 'najiub-contact-info-group', 'location', 'najiub_sanitize_handler' );

    /* 
        ==============================
            add Fields to the page
        ==============================
    */

    /* github */
    add_settings_field(
        'github-link',
        'Github',
        'najiub_input_field',
        'najiub',
        'najiub-contact-info-group',
        array(
            'handler'=>'github',
            'input_type'=>'url',
            'place_holder' => 'https://www.github.com/'
        )
    );
    
    /* linkedin */
    add_settings_field(
        'linkedin-link',
        'Linkedin',
        'najiub_input_field',
        'najiub',
        'najiub-contact-info-group',
        array(
            'handler'=>'linkedin',
            'input_type'=>'url',
            'place_holder' => 'https://www.linkedin.com/'
        )
    );

    /* Medium */
    add_settings_field(
        'medium-link',
        'Medium',
        'najiub_input_field',
        'najiub',
        'najiub-contact-info-group',
        array(
            'handler'=>'medium',
            'input_type'=>'url',
            'place_holder' => 'https://www.medium.com/'
        )
    );

    /* twitter */
    add_settings_field(
        'twitter-link',
        'Twitter',
        'najiub_input_field',
        'najiub',
        'najiub-contact-info-group',
        array(
            'handler'=>'twitter',
            'input_type'=>'url',
            'place_holder' => 'https://www.twitter.com/'
        )
    );

    /* facebook */
    add_settings_field(
        'facebook-link',
        'Facebook',
        'najiub_input_field',
        'najiub',
        'najiub-contact-info-group',
        array(
            'handler'=>'facebook',
            'input_type'=>'url',
            'place_holder' => 'https://www.facebook.com/'
        )
    );
    
    /* insatgram */
    add_settings_field(
        'instagram-link',
        'Instagram',
        'najiub_input_field',
        'najiub',
        'najiub-contact-info-group',
        array(
            'handler'=>'instagram',
            'input_type'=>'url',
            'place_holder' => 'https://www.instagram.com/'
        )
    );

    /* email */
    add_settings_field(
        'contact-email',
        'Email:',
        'najiub_input_field',
        'najiub',
        'najiub-contact-info-group',
        array(
            'handler'=>'email',
            'input_type'=>'email',
            'place_holder' => 'prefix@domain.ext'
        )
    );

    /* mobile phone number */
    add_settings_field(
        'mobile-phone-number',
        'Mobile Phone Number',
        'najiub_input_field',
        'najiub',
        'najiub-contact-info-group',
        array(
            'handler'=>'mobile_phone_number',
            'input_type'=>'tel',
            'place_holder' => '+20-1000000000'
        )
    );

    /* location text */
    add_settings_field(
        'contact-location',
        'Location',
        'najiub_input_field',
        'najiub',
        'najiub-contact-info-group',
        array(
            'handler'=>'location',
            'input_type'=>'text',
            'place_holder' => 'Provide your city and country'
        )
    );
}

/*
    =========================
        Social Media settings
    =========================
*/
function najiub_contact_info_message()
{
    echo 'Customize your Contact Information Links';
}

function najiub_input_field (array $arr)
{
    $handler_value = esc_attr(get_option( $arr["handler"] ));

    echo '<input type="'.$arr["input_type"].'" class="admin_input" name="'.$arr["handler"].'" value="'.$handler_value.'" placeholder="'.$arr["place_holder"].'">';
}

function najiub_sanitize_handler($input)
{
    $output = sanitize_text_field( $input );
    return $output;
}

add_action( 'admin_menu', 'najiub_admin_page' );

require('enqueue.php');