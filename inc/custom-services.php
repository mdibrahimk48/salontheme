<?php

// Register Custom Post Type Custom Service
function create_customservice_cpt() {

	$labels = array(
		'name' => _x( 'Custom Services', 'Post Type General Name', 'classicsalon' ),
		'singular_name' => _x( 'Custom Service', 'Post Type Singular Name', 'classicsalon' ),
		'menu_name' => _x( 'Custom Services', 'Admin Menu text', 'classicsalon' ),
		'name_admin_bar' => _x( 'Custom Service', 'Add New on Toolbar', 'classicsalon' ),
		'archives' => __( 'Custom Service Archives', 'classicsalon' ),
		'attributes' => __( 'Custom Service Attributes', 'classicsalon' ),
		'parent_item_colon' => __( 'Parent Custom Service:', 'classicsalon' ),
		'all_items' => __( 'All Custom Services', 'classicsalon' ),
		'add_new_item' => __( 'Add New Custom Service', 'classicsalon' ),
		'add_new' => __( 'Add New', 'classicsalon' ),
		'new_item' => __( 'New Custom Service', 'classicsalon' ),
		'edit_item' => __( 'Edit Custom Service', 'classicsalon' ),
		'update_item' => __( 'Update Custom Service', 'classicsalon' ),
		'view_item' => __( 'View Custom Service', 'classicsalon' ),
		'view_items' => __( 'View Custom Services', 'classicsalon' ),
		'search_items' => __( 'Search Custom Service', 'classicsalon' ),
		'not_found' => __( 'Not found', 'classicsalon' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'classicsalon' ),
		'featured_image' => __( 'Featured Image', 'classicsalon' ),
		'set_featured_image' => __( 'Set featured image', 'classicsalon' ),
		'remove_featured_image' => __( 'Remove featured image', 'classicsalon' ),
		'use_featured_image' => __( 'Use as featured image', 'classicsalon' ),
		'insert_into_item' => __( 'Insert into Custom Service', 'classicsalon' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Custom Service', 'classicsalon' ),
		'items_list' => __( 'Custom Services list', 'classicsalon' ),
		'items_list_navigation' => __( 'Custom Services list navigation', 'classicsalon' ),
		'filter_items_list' => __( 'Filter Custom Services list', 'classicsalon' ),
	);
	$args = array(
		'label' => __( 'Custom Service', 'classicsalon' ),
		'description' => __( '', 'classicsalon' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-products',
		'supports' => array('title', 'editor', 'thumbnail', 'author', 'post-formats', 'custom-fields'),
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
	register_post_type( 'customservice', $args );

}
add_action( 'init', 'create_customservice_cpt', 0 );

?>