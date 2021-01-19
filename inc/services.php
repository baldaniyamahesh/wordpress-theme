<?php
// Register Custom Post Type services
function create_services_cpt() {

	$labels = array(
		'name' => _x( 'services', 'Post Type General Name', 'mh' ),
		'singular_name' => _x( 'services', 'Post Type Singular Name', 'mh' ),
		'menu_name' => _x( 'services', 'Admin Menu text', 'mh' ),
		'name_admin_bar' => _x( 'services', 'Add New on Toolbar', 'mh' ),
		'archives' => __( 'services Archives', 'mh' ),
		'attributes' => __( 'services Attributes', 'mh' ),
		'parent_item_colon' => __( 'Parent services:', 'mh' ),
		'all_items' => __( 'All services', 'mh' ),
		'add_new_item' => __( 'Add New services', 'mh' ),
		'add_new' => __( 'Add New', 'mh' ),
		'new_item' => __( 'New services', 'mh' ),
		'edit_item' => __( 'Edit services', 'mh' ),
		'update_item' => __( 'Update services', 'mh' ),
		'view_item' => __( 'View services', 'mh' ),
		'view_items' => __( 'View services', 'mh' ),
		'search_items' => __( 'Search services', 'mh' ),
		'not_found' => __( 'Not found', 'mh' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'mh' ),
		'featured_image' => __( 'Featured Image', 'mh' ),
		'set_featured_image' => __( 'Set featured image', 'mh' ),
		'remove_featured_image' => __( 'Remove featured image', 'mh' ),
		'use_featured_image' => __( 'Use as featured image', 'mh' ),
		'insert_into_item' => __( 'Insert into services', 'mh' ),
		'uploaded_to_this_item' => __( 'Uploaded to this services', 'mh' ),
		'items_list' => __( 'services list', 'mh' ),
		'items_list_navigation' => __( 'services list navigation', 'mh' ),
		'filter_items_list' => __( 'Filter services list', 'mh' ),
	);
	$args = array(
		'label' => __( 'services', 'mh' ),
		'description' => __( 'post display theme services', 'mh' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-buddicons-buddypress-logo',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'rest_base' => 'true',
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'create_services_cpt', 0 );
?>