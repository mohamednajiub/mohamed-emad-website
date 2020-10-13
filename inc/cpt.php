<?php
function theme_post_types()
{
	register_post_type(
		'technologies',
		// technologies custom post type Options
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
			// the post type doesn't have single page
			'publicly_queryable' => false
		)
	);

	register_post_type(
		'experiences',
		// experience custom post type Options
		array(
			'labels' => array(
				'menu_name' => 'Experiences',
				'name' => 'Experiences',
				'singular_name' => 'Experience',
				'add_new' => 'Add new Experience',
				'add_new_item' => 'Add New Experience',
				'edit_item' => 'Edit Experience',
				'view_item' => 'View Experience',
				'view_items' => 'View All Experiences',
				'search_items' => 'Search in Experiences',
				'not_found' => 'No Experiences found in your search',
				'all_items' => 'All Experiences',
				'insert_into_item' => 'Insert in Experiences Post Type',
				'uploaded_to_this_item' => 'Upload this to Experiences Post Type',
			),
			'description' => 'Experiences is the all work experience that I worked on.',
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-id',
			'supports' => array('title', 'editor', 'thumbnail'),
			'show_in_rest' => true,
		)
	);

	register_post_type(
		'portfolio',
		// experience custom post type Options
		array(
			'labels' => array(
				'menu_name' => 'Portfolio',
				'name' => 'Portfolio',
				'singular_name' => 'Project',
				'add_new' => 'Add new project',
				'add_new_item' => 'Add New project',
				'edit_item' => 'Edit project',
				'view_item' => 'View project',
				'view_items' => 'View All project',
				'search_items' => 'Search in Portfolio',
				'not_found' => 'No projects found in your search',
				'all_items' => 'Portfolio',
				'insert_into_item' => 'Insert in Portfolio Post Type',
				'uploaded_to_this_item' => 'Upload this to Portfolio Post Type',
			),
			'description' => 'Portfolio is the all work experience that I worked on.',
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-vault',
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			'show_in_rest' => true,
		)
	);
}
add_action('init', 'theme_post_types');
