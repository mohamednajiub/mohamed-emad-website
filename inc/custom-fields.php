<?php

/**
 * Define the metabox and field configurations.
 */
function cmb2_portfolio_metaboxes()
{

	/**
	 * Initiate the metabox
	 */

	$cmb = new_cmb2_box(
		array(
			'id'            => 'Project Data',
			'title'         => __('Portfolio Company', 'cmb2'),
			'object_types'  => array('portfolio'), // Post type
			'context'       => 'side', // where the fields will appear 'normal/side/advanced'
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left.
		)
	);

	$cmb->add_field(array(
		'name'    => 'Portfolio Company',
		'desc'    => 'Upload company logo where project developed in.',
		'id'      => 'portfolio_company_image',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text' => array(
			'add_upload_file_text' => 'Add Comapny Logo' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			// Or only allow gif, jpg, or png images
			'type' => array(
				'image/gif',
				'image/jpeg',
				'image/png',
				'application/svg+xml'
			),
		),
		'preview_size' => 'large', // Image size to use when previewing in the admin.
	));

	$cmb->add_field(array(
		'name'    => 'Site link',
		'desc'    => 'Published site link',
		'id'      => 'site_link',
		'type'    => 'text_url'
	));

	$cmb->add_field(array(
		'name'    => 'Project Repo',
		'desc'    => 'Project Repo Link.',
		'id'      => 'project_repo',
		'type'    => 'text_url'
	));
}

add_action('cmb2_init', 'cmb2_portfolio_metaboxes');


function cmb2_experiences_metaboxes()
{
	$experience_details = new_cmb2_box(array(
		'id'           => 'experience_details',
		'title'        => 'Experience Details',
		'object_types' => array('experiences'),
		'context'      => 'advanced',
		'priority'     => 'high'
	));

	$experience_details->add_field(array(
		'name' => 'Place Name',
		'id'   => 'mn_experience_place_name',
		'type' => 'text'
	));

	$experience_details->add_field(array(
		'name' => 'Place URL',
		'id'   => 'mn_experience_place_url',
		'type' => 'text_url'
	));

	$job_time_line = new_cmb2_box(array(
		'id'           => 'job_timeline',
		'title'        => 'Job Timeline',
		'object_types' => array('experiences'),
		'context'      => 'advanced',
		'priority'     => 'high'
	));

	$job_time_line->add_field(array(
		'name' => 'Start date',
		'id'   => 'mn_job_start_date',
		'type' => 'text_date'
	));

	$job_time_line->add_field(array(
		'name' => 'End Date',
		'id'   => 'mn_job_end_date',
		'type' => 'text_date'
	));
}
add_action('cmb2_admin_init', 'cmb2_experiences_metaboxes');
