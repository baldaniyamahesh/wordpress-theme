<?php
// Register Custom Post Type caresole
function create_caresole_cpt() {

	$labels = array(
		'name' => _x( 'caresole', 'Post Type General Name', 'mh' ),
		'singular_name' => _x( 'caresole', 'Post Type Singular Name', 'mh' ),
		'menu_name' => _x( 'caresole', 'Admin Menu text', 'mh' ),
		'name_admin_bar' => _x( 'caresole', 'Add New on Toolbar', 'mh' ),
		'archives' => __( 'caresole Archives', 'mh' ),
		'attributes' => __( 'caresole Attributes', 'mh' ),
		'parent_item_colon' => __( 'Parent caresole:', 'mh' ),
		'all_items' => __( 'All caresole', 'mh' ),
		'add_new_item' => __( 'Add New caresole', 'mh' ),
		'add_new' => __( 'Add New', 'mh' ),
		'new_item' => __( 'New caresole', 'mh' ),
		'edit_item' => __( 'Edit caresole', 'mh' ),
		'update_item' => __( 'Update caresole', 'mh' ),
		'view_item' => __( 'View caresole', 'mh' ),
		'view_items' => __( 'View caresole', 'mh' ),
		'search_items' => __( 'Search caresole', 'mh' ),
		'not_found' => __( 'Not found', 'mh' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'mh' ),
		'featured_image' => __( 'Featured Image', 'mh' ),
		'set_featured_image' => __( 'Set featured image', 'mh' ),
		'remove_featured_image' => __( 'Remove featured image', 'mh' ),
		'use_featured_image' => __( 'Use as featured image', 'mh' ),
		'insert_into_item' => __( 'Insert into caresole', 'mh' ),
		'uploaded_to_this_item' => __( 'Uploaded to this caresole', 'mh' ),
		'items_list' => __( 'caresole list', 'mh' ),
		'items_list_navigation' => __( 'caresole list navigation', 'mh' ),
		'filter_items_list' => __( 'Filter caresole list', 'mh' ),
	);
	$args = array(
		'label' => __( 'caresole', 'mh' ),
		'description' => __( 'display project and comapany logo in caresole', 'mh' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'excerpt', 'thumbnail'),
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
	register_post_type( 'caresole', $args );

}
add_action( 'init', 'create_caresole_cpt', 0 );

?>