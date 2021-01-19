<?php
// Register Custom Post Type docterintro
function create_docterintro_cpt() {

	$labels = array(
		'name' => _x( 'docterintro', 'Post Type General Name', 'mh' ),
		'singular_name' => _x( 'docterintro', 'Post Type Singular Name', 'mh' ),
		'menu_name' => _x( 'docterintro', 'Admin Menu text', 'mh' ),
		'name_admin_bar' => _x( 'docterintro', 'Add New on Toolbar', 'mh' ),
		'archives' => __( 'docterintro Archives', 'mh' ),
		'attributes' => __( 'docterintro Attributes', 'mh' ),
		'parent_item_colon' => __( 'Parent docterintro:', 'mh' ),
		'all_items' => __( 'All docterintro', 'mh' ),
		'add_new_item' => __( 'Add New docterintro', 'mh' ),
		'add_new' => __( 'Add New', 'mh' ),
		'new_item' => __( 'New docterintro', 'mh' ),
		'edit_item' => __( 'Edit docterintro', 'mh' ),
		'update_item' => __( 'Update docterintro', 'mh' ),
		'view_item' => __( 'View docterintro', 'mh' ),
		'view_items' => __( 'View docterintro', 'mh' ),
		'search_items' => __( 'Search docterintro', 'mh' ),
		'not_found' => __( 'Not found', 'mh' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'mh' ),
		'featured_image' => __( 'Featured Image', 'mh' ),
		'set_featured_image' => __( 'Set featured image', 'mh' ),
		'remove_featured_image' => __( 'Remove featured image', 'mh' ),
		'use_featured_image' => __( 'Use as featured image', 'mh' ),
		'insert_into_item' => __( 'Insert into docterintro', 'mh' ),
		'uploaded_to_this_item' => __( 'Uploaded to this docterintro', 'mh' ),
		'items_list' => __( 'docterintro list', 'mh' ),
		'items_list_navigation' => __( 'docterintro list navigation', 'mh' ),
		'filter_items_list' => __( 'Filter docterintro list', 'mh' ),
	);
	$args = array(
		'label' => __( 'docterintro', 'mh' ),
		'description' => __( 'display project and comapany logo in docterintro', 'mh' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'thumbnail'),
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
	register_post_type( 'docterintro', $args );

}
add_action( 'init', 'create_docterintro_cpt', 0 );
?>