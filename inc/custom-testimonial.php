<?php

// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'classicsalon' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'classicsalon' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'classicsalon' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'classicsalon' ),
		'archives' => __( 'Testimonial Archives', 'classicsalon' ),
		'attributes' => __( 'Testimonial Attributes', 'classicsalon' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'classicsalon' ),
		'all_items' => __( 'All Testimonials', 'classicsalon' ),
		'add_new_item' => __( 'Add New Testimonial', 'classicsalon' ),
		'add_new' => __( 'Add New', 'classicsalon' ),
		'new_item' => __( 'New Testimonial', 'classicsalon' ),
		'edit_item' => __( 'Edit Testimonial', 'classicsalon' ),
		'update_item' => __( 'Update Testimonial', 'classicsalon' ),
		'view_item' => __( 'View Testimonial', 'classicsalon' ),
		'view_items' => __( 'View Testimonials', 'classicsalon' ),
		'search_items' => __( 'Search Testimonial', 'classicsalon' ),
		'not_found' => __( 'Not found', 'classicsalon' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'classicsalon' ),
		'featured_image' => __( 'Featured Image', 'classicsalon' ),
		'set_featured_image' => __( 'Set featured image', 'classicsalon' ),
		'remove_featured_image' => __( 'Remove featured image', 'classicsalon' ),
		'use_featured_image' => __( 'Use as featured image', 'classicsalon' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'classicsalon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'classicsalon' ),
		'items_list' => __( 'Testimonials list', 'classicsalon' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'classicsalon' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'classicsalon' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'classicsalon' ),
		'description' => __( '', 'classicsalon' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-page',
		'supports' => array('title', 'editor', 'author', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'customtestimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

?>