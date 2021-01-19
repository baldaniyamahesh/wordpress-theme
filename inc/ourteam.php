<?php
// Register Custom Post Type ourteam
function create_ourteam_cpt() {

	$labels = array(
		'name' => _x( 'ourteam', 'Post Type General Name', 'mh' ),
		'singular_name' => _x( 'ourteam', 'Post Type Singular Name', 'mh' ),
		'menu_name' => _x( 'ourteam', 'Admin Menu text', 'mh' ),
		'name_admin_bar' => _x( 'ourteam', 'Add New on Toolbar', 'mh' ),
		'archives' => __( 'ourteam Archives', 'mh' ),
		'attributes' => __( 'ourteam Attributes', 'mh' ),
		'parent_item_colon' => __( 'Parent ourteam:', 'mh' ),
		'all_items' => __( 'All ourteam', 'mh' ),
		'add_new_item' => __( 'Add New ourteam', 'mh' ),
		'add_new' => __( 'Add New', 'mh' ),
		'new_item' => __( 'New ourteam', 'mh' ),
		'edit_item' => __( 'Edit ourteam', 'mh' ),
		'update_item' => __( 'Update ourteam', 'mh' ),
		'view_item' => __( 'View ourteam', 'mh' ),
		'view_items' => __( 'View ourteam', 'mh' ),
		'search_items' => __( 'Search ourteam', 'mh' ),
		'not_found' => __( 'Not found', 'mh' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'mh' ),
		'featured_image' => __( 'Featured Image', 'mh' ),
		'set_featured_image' => __( 'Set featured image', 'mh' ),
		'remove_featured_image' => __( 'Remove featured image', 'mh' ),
		'use_featured_image' => __( 'Use as featured image', 'mh' ),
		'insert_into_item' => __( 'Insert into ourteam', 'mh' ),
		'uploaded_to_this_item' => __( 'Uploaded to this ourteam', 'mh' ),
		'items_list' => __( 'ourteam list', 'mh' ),
		'items_list_navigation' => __( 'ourteam list navigation', 'mh' ),
		'filter_items_list' => __( 'Filter ourteam list', 'mh' ),
	);
	$args = array(
		'label' => __( 'ourteam', 'mh' ),
		'description' => __( 'display project and comapany logo in caresole', 'mh' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-groups',
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
	register_post_type( 'ourteam', $args );

}
add_action( 'init', 'create_ourteam_cpt', 0 );
?>