<?php

require(get_template_directory() . '/inc/function-admin.php');
require(get_template_directory() . '/inc/cpt.php');
require(get_template_directory() . '/inc/custom-fields.php');

function add_styles()
{
	wp_enqueue_style('normalize', get_template_directory_uri() . '/dest/css/base/normalize.min.css');
	wp_enqueue_style('bootstrap_grid', get_template_directory_uri() . '/dest/css/layout/bootstrap-grid.min.css');
	wp_enqueue_style('theme_main_styles', get_template_directory_uri() . '/dest/css/main.css');

	if (is_front_page())
	{
		// horizontal timeline 2.0
		wp_enqueue_style('horizontal', 'https://cdn.jsdelivr.net/gh/ycodetech/horizontal-timeline-2.0@2/css/horizontal_timeline.2.0.min.css');
		wp_enqueue_style('front-page-style', get_template_directory_uri() . '/dest/css/front-page.css');
	}

	if (is_home()||is_singular())
	{
		// index page style
		wp_enqueue_style('index-page-style', get_template_directory_uri() . '/dest/css/page.css');
	}

	if (is_singular())
	{
		// index page style
		wp_enqueue_style('single-page-style', get_template_directory_uri() . '/dest/css/single.css');
	}
}

function add_scripts()
{
	// remove default jquery
	wp_deregister_script('jquery');
	// add jquery v1.12.0
	wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js", array(), '1.12.0');
	wp_enqueue_script('jquery');
	wp_enqueue_script('theme_main_script', get_template_directory_uri() . '/dest/js/main.bundle.js', array('jquery'));

	if (is_front_page()) {
		// horizontal timeline 2.0
		wp_enqueue_script('horizontal', 'https://cdn.jsdelivr.net/gh/ycodetech/horizontal-timeline-2.0@2/JavaScript/horizontal_timeline.2.0.min.js', array('jquery'));
		wp_enqueue_script('front-page-scripts', get_template_directory_uri() . '/dest/js/front-page.bundle.js', array('jquery'));
	}
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
	add_theme_support('html5', $html5_args);
}

function mohamed_najiub_metabox()
{
	$cmb = new_cmb2_box(array(
		'id'           => 'job_timeline',
		'title'        => 'Job Timeline',
		'object_types' => array('experience'),
		'context'      => 'advanced',
		'priority'     => 'high'
	));

	$cmb->add_field(array(
		'name' => 'Start date',
		'id'   => 'mn_job_start_date',
		'type' => 'text_date'
	));

	$cmb->add_field(array(
		'name' => 'End Date',
		'id'   => 'mn_job_end_date',
		'type' => 'text_date'
	));
}
add_action('cmb2_admin_init', 'mohamed_najiub_metabox');

add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");
add_action("after_setup_theme", "theme_features");
