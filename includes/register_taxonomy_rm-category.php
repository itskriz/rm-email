<?php
if ( ! function_exists( 'register_rm_email_category' ) ) {

// Register Custom Taxonomy
function register_rm_email_category() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'roarmedia' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'roarmedia' ),
		'menu_name'                  => __( 'Categories', 'roarmedia' ),
		'all_items'                  => __( 'All Category', 'roarmedia' ),
		'parent_item'                => __( 'Parent Category', 'roarmedia' ),
		'parent_item_colon'          => __( 'Parent Category:', 'roarmedia' ),
		'new_item_name'              => __( 'New Category Name', 'roarmedia' ),
		'add_new_item'               => __( 'Add New Category', 'roarmedia' ),
		'edit_item'                  => __( 'Edit Category', 'roarmedia' ),
		'update_item'                => __( 'Update Category', 'roarmedia' ),
		'view_item'                  => __( 'View Category', 'roarmedia' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'roarmedia' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'roarmedia' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'roarmedia' ),
		'popular_items'              => __( 'Popular Categories', 'roarmedia' ),
		'search_items'               => __( 'Search Categories', 'roarmedia' ),
		'not_found'                  => __( 'Not Found', 'roarmedia' ),
		'no_terms'                   => __( 'No categories', 'roarmedia' ),
		'items_list'                 => __( 'Categories list', 'roarmedia' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'roarmedia' ),
	);
	$rewrite = array(
		'slug'                       => 'category',
		'with_front'                 => false,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'rm-email-category', array( 'rm-email' ), $args );

}
add_action( 'init', 'register_rm_email_category', 0 );

}
?>