<?php 
function register_work_taxonomy() {

	$labels = array(
		'name'              => _x( 'Work Tags', 'taxonomy general name', 'corlate' ),
		'singular_name'     => _x( 'Work Tag', 'taxonomy singular name', 'corlate' ),
		'search_items'      => __( 'Search Work Tags', 'corlate' ),
		'all_items'         => __( 'All Work Tags', 'corlate' ),
		'view_item'         => __( 'View Work Tag', 'corlate' ),
		'parent_item'       => __( 'Parent Work Tag', 'corlate' ),
		'parent_item_colon' => __( 'Parent Work Tag:', 'corlate' ),
		'edit_item'         => __( 'Edit Work Tag', 'corlate' ),
		'update_item'       => __( 'Update Work Tag', 'corlate' ),
		'add_new_item'      => __( 'Add New Work Tag', 'corlate' ),
		'new_item_name'     => __( 'New Work Tag Name', 'corlate' ),
		'not_found'         => __( 'No Work Tags Found', 'corlate' ),
		'back_to_items'     => __( 'Back to Work Tags', 'corlate' ),
		'menu_name'         => __( 'Work Tag', 'corlate' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'work' ),
		'show_in_rest'      => true,
	);


	register_taxonomy( 'work', 'work', $args );
		


}

add_action( 'init', 'register_work_taxonomy', 0 );

?>