<?php
// Register Custom Post Type review
function create_review_cpt() {

	$labels = array(
		'name' => _x( 'review', 'Post Type General Name', 'mh' ),
		'singular_name' => _x( 'review', 'Post Type Singular Name', 'mh' ),
		'menu_name' => _x( 'review', 'Admin Menu text', 'mh' ),
		'name_admin_bar' => _x( 'review', 'Add New on Toolbar', 'mh' ),
		'archives' => __( 'review Archives', 'mh' ),
		'attributes' => __( 'review Attributes', 'mh' ),
		'parent_item_colon' => __( 'Parent review:', 'mh' ),
		'all_items' => __( 'All review', 'mh' ),
		'add_new_item' => __( 'Add New review', 'mh' ),
		'add_new' => __( 'Add New', 'mh' ),
		'new_item' => __( 'New review', 'mh' ),
		'edit_item' => __( 'Edit review', 'mh' ),
		'update_item' => __( 'Update review', 'mh' ),
		'view_item' => __( 'View review', 'mh' ),
		'view_items' => __( 'View review', 'mh' ),
		'search_items' => __( 'Search review', 'mh' ),
		'not_found' => __( 'Not found', 'mh' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'mh' ),
		'featured_image' => __( 'Featured Image', 'mh' ),
		'set_featured_image' => __( 'Set featured image', 'mh' ),
		'remove_featured_image' => __( 'Remove featured image', 'mh' ),
		'use_featured_image' => __( 'Use as featured image', 'mh' ),
		'insert_into_item' => __( 'Insert into review', 'mh' ),
		'uploaded_to_this_item' => __( 'Uploaded to this review', 'mh' ),
		'items_list' => __( 'review list', 'mh' ),
		'items_list_navigation' => __( 'review list navigation', 'mh' ),
		'filter_items_list' => __( 'Filter review list', 'mh' ),
	);
	$args = array(
		'label' => __( 'review', 'mh' ),
		'description' => __( 'display project and comapany logo in review', 'mh' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-quote',
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
	register_post_type( 'review', $args );

}
add_action( 'init', 'create_review_cpt', 0 );

?>