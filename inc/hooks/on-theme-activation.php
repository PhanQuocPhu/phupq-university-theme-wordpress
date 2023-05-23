<?php
function create_page_on_theme_activation() {
	// Set the title, template, etc
	$new_page_title    = __( 'Last events', 'text-domain' ); // Page's title
	$new_page_content  = '';                           // Content goes here
	$new_page_template = 'page-past-events.php';       // The template to use for the page
	$page_check        = get_page_by_title( $new_page_title );   // Check if the page already exists
	// Store the above data in an array
	$new_page = array(
		'post_type'    => 'page',
		'post_title'   => $new_page_title,
		'post_content' => $new_page_content,
		'post_status'  => 'publish',
		'post_author'  => 1,
		'post_name'    => 'about-us'
	);
	// If the page doesn't already exist, create it
	if ( ! isset( $page_check->ID ) ) {
		$new_page_id = wp_insert_post( $new_page );
		if ( ! empty( $new_page_template ) ) {
			update_post_meta( $new_page_id, '_wp_page_template', $new_page_template );
		}
	}
}