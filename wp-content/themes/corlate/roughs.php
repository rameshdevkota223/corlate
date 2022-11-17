<?php 
/**
 * Register a custom post type called "About us Slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_aboutus_slider_post() {
	$labels = array(
		'name'                  => _x( 'About us Sliders', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'About us Slider', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'About us Sliders', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'About us Slider', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New About us Slider', 'corlate' ),
		'new_item'              => __( 'New About us Slider', 'corlate' ),
		'edit_item'             => __( 'Edit About us Slider', 'corlate' ),
		'view_item'             => __( 'View About us Slider', 'corlate' ),
		'all_items'             => __( 'All About us Sliders', 'corlate' ),
		'search_items'          => __( 'Search About us Sliders', 'corlate' ),
		'parent_item_colon'     => __( 'Parent About us Sliders:', 'corlate' ),
		'not_found'             => __( 'No About us Sliders found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No About us Sliders found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'About us Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'About us Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into About us Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this About us Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter About us Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'About us Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'About us Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'about_us_slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'about_us_slider', $args );
}

add_action( 'init', 'corlate_aboutus_slider_post' );





; ?>
