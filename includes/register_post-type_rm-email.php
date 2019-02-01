<?php
if ( ! function_exists('register_rm_email_post_type') ) {

// Register Custom Post Type
function register_rm_email_post_type() {

	$labels = array(
		'name'                  => _x( 'Emails', 'Post Type General Name', 'roarmedia' ),
		'singular_name'         => _x( 'Email', 'Post Type Singular Name', 'roarmedia' ),
		'menu_name'             => __( 'Emails', 'roarmedia' ),
		'name_admin_bar'        => __( 'Emails', 'roarmedia' ),
		'archives'              => __( 'Email Archives', 'roarmedia' ),
		'attributes'            => __( 'Email Attributes', 'roarmedia' ),
		'parent_item_colon'     => __( 'Parent Email:', 'roarmedia' ),
		'all_items'             => __( 'All Emails', 'roarmedia' ),
		'add_new_item'          => __( 'Add New Email', 'roarmedia' ),
		'add_new'               => __( 'Add New', 'roarmedia' ),
		'new_item'              => __( 'New Email', 'roarmedia' ),
		'edit_item'             => __( 'Edit Email', 'roarmedia' ),
		'update_item'           => __( 'Update Email', 'roarmedia' ),
		'view_item'             => __( 'View Email', 'roarmedia' ),
		'view_items'            => __( 'View Emails', 'roarmedia' ),
		'search_items'          => __( 'Search Emails', 'roarmedia' ),
		'not_found'             => __( 'Not found', 'roarmedia' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'roarmedia' ),
		'featured_image'        => __( 'Featured Image', 'roarmedia' ),
		'set_featured_image'    => __( 'Set featured image', 'roarmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'roarmedia' ),
		'use_featured_image'    => __( 'Use as featured image', 'roarmedia' ),
		'insert_into_item'      => __( 'Insert into Emails', 'roarmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this email', 'roarmedia' ),
		'items_list'            => __( 'Emails list', 'roarmedia' ),
		'items_list_navigation' => __( 'Emails list navigation', 'roarmedia' ),
		'filter_items_list'     => __( 'Filter emails list', 'roarmedia' ),
	);
	$rewrite = array(
		'slug'                  => 'email',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Email', 'roarmedia' ),
		'description'           => __( 'Holds HTML Email data', 'roarmedia' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'rm-email-category', ' rm-email-tags' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-email-alt',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => 'emails',
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'rm-email', $args );

}
add_action( 'init', 'register_rm_email_post_type', 0 );

}
?>