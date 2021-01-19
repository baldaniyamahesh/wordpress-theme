<?php
// Register Custom Post Type pricing
function create_pricing_cpt() {

	$labels = array(
		'name' => _x( 'pricing', 'Post Type General Name', 'mh' ),
		'singular_name' => _x( 'pricing', 'Post Type Singular Name', 'mh' ),
		'menu_name' => _x( 'pricing', 'Admin Menu text', 'mh' ),
		'name_admin_bar' => _x( 'pricing', 'Add New on Toolbar', 'mh' ),
		'archives' => __( 'pricing Archives', 'mh' ),
		'attributes' => __( 'pricing Attributes', 'mh' ),
		'parent_item_colon' => __( 'Parent pricing:', 'mh' ),
		'all_items' => __( 'All pricing', 'mh' ),
		'add_new_item' => __( 'Add New pricing', 'mh' ),
		'add_new' => __( 'Add New', 'mh' ),
		'new_item' => __( 'New pricing', 'mh' ),
		'edit_item' => __( 'Edit pricing', 'mh' ),
		'update_item' => __( 'Update pricing', 'mh' ),
		'view_item' => __( 'View pricing', 'mh' ),
		'view_items' => __( 'View pricing', 'mh' ),
		'search_items' => __( 'Search pricing', 'mh' ),
		'not_found' => __( 'Not found', 'mh' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'mh' ),
		'featured_image' => __( 'Featured Image', 'mh' ),
		'set_featured_image' => __( 'Set featured image', 'mh' ),
		'remove_featured_image' => __( 'Remove featured image', 'mh' ),
		'use_featured_image' => __( 'Use as featured image', 'mh' ),
		'insert_into_item' => __( 'Insert into pricing', 'mh' ),
		'uploaded_to_this_item' => __( 'Uploaded to this pricing', 'mh' ),
		'items_list' => __( 'pricing list', 'mh' ),
		'items_list_navigation' => __( 'pricing list navigation', 'mh' ),
		'filter_items_list' => __( 'Filter pricing list', 'mh' ),
	);
	$args = array(
		'label' => __( 'pricing', 'mh' ),
		'description' => __( 'display project and comapany logo in caresole', 'mh' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-tag',
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
	register_post_type( 'pricing', $args );

}
add_action( 'init', 'create_pricing_cpt', 0 );
?>