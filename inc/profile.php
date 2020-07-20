<?php
// Register Custom Post Type
function profile_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Profiles', 'Post Type General Name', 'wp6' ),
		'singular_name'         => _x( 'Profile', 'Post Type Singular Name', 'wp6' ),
		'menu_name'             => __( 'Profile', 'wp6' ),
		'name_admin_bar'        => __( 'Profile', 'wp6' ),
		'archives'              => __( 'Profile Archives', 'wp6' ),
		'attributes'            => __( 'Profile Attributes', 'wp6' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wp6' ),
		'all_items'             => __( 'All Profile', 'wp6' ),
		'add_new_item'          => __( 'Add New Profile', 'wp6' ),
		'add_new'               => __( 'Add New Profile', 'wp6' ),
		'new_item'              => __( 'New Profile', 'wp6' ),
		'edit_item'             => __( 'Edit Profile', 'wp6' ),
		'update_item'           => __( 'Update Profile', 'wp6' ),
		'view_item'             => __( 'View Profile', 'wp6' ),
		'view_items'            => __( 'View Profiles', 'wp6' ),
		'search_items'          => __( 'Search Profile', 'wp6' ),
		'not_found'             => __( 'Not found', 'wp6' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wp6' ),
		'featured_image'        => __( 'Featured Image', 'wp6' ),
		'set_featured_image'    => __( 'Set featured image', 'wp6' ),
		'remove_featured_image' => __( 'Remove featured image', 'wp6' ),
		'use_featured_image'    => __( 'Use as featured image', 'wp6' ),
		'insert_into_item'      => __( 'Insert into Profile', 'wp6' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Profile', 'wp6' ),
		'items_list'            => __( 'Profiles list', 'wp6' ),
		'items_list_navigation' => __( 'Profiles list navigation', 'wp6' ),
		'filter_items_list'     => __( 'Filter Profiles list', 'wp6' ),
	);
	
	$args = array(
		'label'                 => __( 'Profile', 'wp6' ),
		'description'           => __( 'To add Profile', 'wp6' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		
		
	);
	register_post_type( 'profile_post_type', $args );

}
add_action( 'init', 'profile_custom_post_type', 0 );