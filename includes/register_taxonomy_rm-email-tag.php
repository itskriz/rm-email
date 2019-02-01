<?php
if ( ! function_exists( 'register_rm_email_tag' ) ) {

// Register Custom Taxonomy
function register_rm_email_tag() {

	$labels = array(
		'name'                       => _x( 'Tags', 'Taxonomy General Name', 'roarmedia' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'roarmedia' ),
		'menu_name'                  => __( 'Tags', 'roarmedia' ),
		'all_items'                  => __( 'All Tags', 'roarmedia' ),
		'parent_item'                => __( 'Parent Tag', 'roarmedia' ),
		'parent_item_colon'          => __( 'Parent Tag:', 'roarmedia' ),
		'new_item_name'              => __( 'New Tag Name', 'roarmedia' ),
		'add_new_item'               => __( 'Add New Tag', 'roarmedia' ),
		'edit_item'                  => __( 'Edit Tag', 'roarmedia' ),
		'update_item'                => __( 'Update Tag', 'roarmedia' ),
		'view_item'                  => __( 'View Tag', 'roarmedia' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'roarmedia' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'roarmedia' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'roarmedia' ),
		'popular_items'              => __( 'Popular Tags', 'roarmedia' ),
		'search_items'               => __( 'Search Tags', 'roarmedia' ),
		'not_found'                  => __( 'Not Found', 'roarmedia' ),
		'no_terms'                   => __( 'No tags', 'roarmedia' ),
		'items_list'                 => __( 'Tags list', 'roarmedia' ),
		'items_list_navigation'      => __( 'Tags list navigation', 'roarmedia' ),
	);
	$rewrite = array(
		'slug'                       => 'tag',
		'with_front'                 => false,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'rm-email-tag', array( 'rm-email' ), $args );

}
add_action( 'init', 'register_rm_email_tag', 0 );

}
?>