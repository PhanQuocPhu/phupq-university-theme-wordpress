<?php

function university_post_types() {
	//Event post types
	//show_in_rest là để edit được post theo cái wysiwig mới
	register_post_type( 'event', array(
		'show_in_rest' => true,
		'supports'     => array( 'title', 'editor', 'excerpt' ),
		'rewrite'      => array( 'slug' => 'events' ),
		'has_archive'  => true,
		'public'       => true,
		'labels'       => array(
			'name'          => 'Events',
			'add_new_item'  => 'Add New Event',
			'edit_item'     => 'Edit Event',
			'all_items'     => 'All Events',
			'singular_name' => 'Event'
		),
		'menu_icon'    => 'dashicons-calendar'
	) );

	//Program post types
	register_post_type('program', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor'),
		'rewrite' => array('slug' => 'programs'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Programs',
			'add_new_item' => 'Add New Program',
			'edit_item' => 'Edit Program',
			'all_items' => 'All Programs',
			'singular_name' => 'Program'
		),
		'menu_icon' => 'dashicons-awards'
	));

}

function university_adjust_queries( $query ) {
	if ( ! is_admin() && is_post_type_archive( 'event' ) && $query->is_main_query() ) {
		$today = date( "Ymd" );
		$query->set( 'posts_per_page', 3 );
		$query->set( 'meta_key', 'event_date' );
		$query->set( 'orderby', 'meta_value_num' );
		$query->set( 'order', 'ASC' );
		$query->set( 'meta_query', [
			[
				'key'     => 'event_date',
				'compare' => '>=',
				'value'   => $today,
				'type'    => 'numeric'
			]
		] );

	}
}
