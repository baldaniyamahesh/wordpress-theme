<?php
// Register Custom Post Type myblog
function create_myblog_cpt() {

	$labels = array(
		'name' => _x( 'myblog', 'Post Type General Name', 'mh' ),
		'singular_name' => _x( 'myblog', 'Post Type Singular Name', 'mh' ),
		'menu_name' => _x( 'myblog', 'Admin Menu text', 'mh' ),
		'name_admin_bar' => _x( 'myblog', 'Add New on Toolbar', 'mh' ),
		'archives' => __( 'myblog Archives', 'mh' ),
		'attributes' => __( 'myblog Attributes', 'mh' ),
		'parent_item_colon' => __( 'Parent myblog:', 'mh' ),
		'all_items' => __( 'All myblog', 'mh' ),
		'add_new_item' => __( 'Add New myblog', 'mh' ),
		'add_new' => __( 'Add New', 'mh' ),
		'new_item' => __( 'New myblog', 'mh' ),
		'edit_item' => __( 'Edit myblog', 'mh' ),
		'update_item' => __( 'Update myblog', 'mh' ),
		'view_item' => __( 'View myblog', 'mh' ),
		'view_items' => __( 'View myblog', 'mh' ),
		'search_items' => __( 'Search myblog', 'mh' ),
		'not_found' => __( 'Not found', 'mh' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'mh' ),
		'featured_image' => __( 'Featured Image', 'mh' ),
		'set_featured_image' => __( 'Set featured image', 'mh' ),
		'remove_featured_image' => __( 'Remove featured image', 'mh' ),
		'use_featured_image' => __( 'Use as featured image', 'mh' ),
		'insert_into_item' => __( 'Insert into myblog', 'mh' ),
		'uploaded_to_this_item' => __( 'Uploaded to this myblog', 'mh' ),
		'items_list' => __( 'myblog list', 'mh' ),
		'items_list_navigation' => __( 'myblog list navigation', 'mh' ),
		'filter_items_list' => __( 'Filter myblog list', 'mh' ),
	);
	$args = array(
		'label' => __( 'myblog', 'mh' ),
		'description' => __( 'display project and comapany logo in caresole', 'mh' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-aside',
		'supports' => array('title', 'editor', 'thumbnail','comments','revisions', 'author', 'page-attributes', 'custom-fields'),
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
		// 'taxonomies' => array( 'category'),
		'taxonomies'   => array( 'category',  'post_tag' ),

	);
	register_post_type( 'myblog', $args );

}
add_action( 'init', 'create_myblog_cpt', 0 );
?>