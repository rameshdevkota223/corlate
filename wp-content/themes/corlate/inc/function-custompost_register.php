<?php 
/**
 * Register a custom post type called "slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_slide_post() {
	$labels = array(
		'name'                  => _x( 'Sliders', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Slider', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Slider', 'corlate' ),
		'new_item'              => __( 'New Slider', 'corlate' ),
		'edit_item'             => __( 'Edit Slider', 'corlate' ),
		'view_item'             => __( 'View Slider', 'corlate' ),
		'all_items'             => __( 'All Sliders', 'corlate' ),
		'search_items'          => __( 'Search Sliders', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Sliders:', 'corlate' ),
		'not_found'             => __( 'No Sliders found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'slide', $args );
}

add_action( 'init', 'corlate_slide_post' );

/**
 * Register a custom post type called "Feature".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_feature_post() {
	$labels = array(
		'name'                  => _x( 'Features', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Feature', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Features', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Feature', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Feature', 'corlate' ),
		'new_item'              => __( 'New Feature', 'corlate' ),
		'edit_item'             => __( 'Edit Feature', 'corlate' ),
		'view_item'             => __( 'View Feature', 'corlate' ),
		'all_items'             => __( 'All Features', 'corlate' ),
		'search_items'          => __( 'Search Features', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Features:', 'corlate' ),
		'not_found'             => __( 'No Features found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Features found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Feature Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Feature archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Feature', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Feature', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Features list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Features list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Features list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'feature' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'feature', $args );
}

add_action( 'init', 'corlate_feature_post' );

/**
 * Register a custom post type called "Work".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_work_post() {
	$labels = array(
		'name'                  => _x( 'Works', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Work', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Works', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Work', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Work', 'corlate' ),
		'new_item'              => __( 'New Work', 'corlate' ),
		'edit_item'             => __( 'Edit Work', 'corlate' ),
		'view_item'             => __( 'View Work', 'corlate' ),
		'all_items'             => __( 'All Works', 'corlate' ),
		'search_items'          => __( 'Search Works', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Works:', 'corlate' ),
		'not_found'             => __( 'No Works found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Works found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Work Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Work archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Work', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Work', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Works list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Works list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Works list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'work' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'work', $args );
}

add_action( 'init', 'corlate_work_post' );

/**
 * Register a custom post type called "Service".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_service_post() {
	$labels = array(
		'name'                  => _x( 'Services', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Service', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Services', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Service', 'corlate' ),
		'new_item'              => __( 'New Service', 'corlate' ),
		'edit_item'             => __( 'Edit Service', 'corlate' ),
		'view_item'             => __( 'View Service', 'corlate' ),
		'all_items'             => __( 'All Services', 'corlate' ),
		'search_items'          => __( 'Search Services', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Services:', 'corlate' ),
		'not_found'             => __( 'No Services found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Services found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'service', $args );
}

add_action( 'init', 'corlate_service_post' );
    

/**
 * Register a custom post type called "Skill".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_skill_post() {
	$labels = array(
		'name'                  => _x( 'Skills', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Skill', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Skills', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Skill', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Skill', 'corlate' ),
		'new_item'              => __( 'New Skill', 'corlate' ),
		'edit_item'             => __( 'Edit Skill', 'corlate' ),
		'view_item'             => __( 'View Skill', 'corlate' ),
		'all_items'             => __( 'All Skills', 'corlate' ),
		'search_items'          => __( 'Search Skills', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Skills:', 'corlate' ),
		'not_found'             => __( 'No Skills found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Skills found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Skill Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Skill archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Skill', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Skill', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Skills list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Skills list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Skills list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'skill' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'skill', $args );
}

add_action( 'init', 'corlate_skill_post' );

/**
 * Register a custom post type called "Middle".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_middle_post() {
	$labels = array(
		'name'                  => _x( 'Middles', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Middle', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Middles', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Middle', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Middle', 'corlate' ),
		'new_item'              => __( 'New Middle', 'corlate' ),
		'edit_item'             => __( 'Edit Middle', 'corlate' ),
		'view_item'             => __( 'View Middle', 'corlate' ),
		'all_items'             => __( 'All Middles', 'corlate' ),
		'search_items'          => __( 'Search Middles', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Middles:', 'corlate' ),
		'not_found'             => __( 'No Middles found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Middles found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Middle Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Middle archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Middle', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Middle', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Middles list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Middles list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Middles list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'middle' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'middle', $args );
}

add_action( 'init', 'corlate_middle_post' );
    
 
/**
 * Register a custom post type called "Content".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_content_post() {
	$labels = array(
		'name'                  => _x( 'Contents', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Content', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Contents', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Content', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Content', 'corlate' ),
		'new_item'              => __( 'New Content', 'corlate' ),
		'edit_item'             => __( 'Edit Content', 'corlate' ),
		'view_item'             => __( 'View Content', 'corlate' ),
		'all_items'             => __( 'All Contents', 'corlate' ),
		'search_items'          => __( 'Search Contents', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Contents:', 'corlate' ),
		'not_found'             => __( 'No Contents found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Contents found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Content Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Content archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Content', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Content', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Contents list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Contents list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Contents list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'content' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'content', $args );
}

add_action( 'init', 'corlate_content_post' );
       


/**
 * Register a custom post type called "Partner".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_Partner_post() {
	$labels = array(
		'name'                  => _x( 'Partners', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Partner', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Partners', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Partner', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Partner', 'corlate' ),
		'new_item'              => __( 'New Partner', 'corlate' ),
		'edit_item'             => __( 'Edit Partner', 'corlate' ),
		'view_item'             => __( 'View Partner', 'corlate' ),
		'all_items'             => __( 'All Partners', 'corlate' ),
		'search_items'          => __( 'Search Partners', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Partners:', 'corlate' ),
		'not_found'             => __( 'No Partners found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Partners found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Partner Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Partner archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Partner', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Partner', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Partners list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Partners list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Partners list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'partner' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'partner', $args );
}

add_action( 'init', 'corlate_partner_post' );


/**
 * Register a custom post type called "Container".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_container_post() {
	$labels = array(
		'name'                  => _x( 'Containers', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Container', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Containers', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Container', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Container', 'corlate' ),
		'new_item'              => __( 'New Container', 'corlate' ),
		'edit_item'             => __( 'Edit Container', 'corlate' ),
		'view_item'             => __( 'View Container', 'corlate' ),
		'all_items'             => __( 'All Containers', 'corlate' ),
		'search_items'          => __( 'Search Containers', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Containers:', 'corlate' ),
		'not_found'             => __( 'No Containers found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Containers found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Container Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Container archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Container', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Container', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Containers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Containers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Containers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'container' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'container', $args );
}

add_action( 'init', 'corlate_container_post' );


/**
 * Register a custom post type called "Client".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_client_post() {
	$labels = array(
		'name'                  => _x( 'Clients', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Client', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Clients', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Client', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Client', 'corlate' ),
		'new_item'              => __( 'New Client', 'corlate' ),
		'edit_item'             => __( 'Edit Client', 'corlate' ),
		'view_item'             => __( 'View Client', 'corlate' ),
		'all_items'             => __( 'All Clients', 'corlate' ),
		'search_items'          => __( 'Search Clients', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Clients:', 'corlate' ),
		'not_found'             => __( 'No Clients found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Clients found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Client Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Client archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Client', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Client', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Clients list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Clients list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Clients list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'client' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'client', $args );
}

add_action( 'init', 'corlate_client_post' );


/**
 * Register a custom post type called "Map Content".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_map_content_post() {
	$labels = array(
		'name'                  => _x( 'Map Contents', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Map Content', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Map Contents', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Map Content', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Map Content', 'corlate' ),
		'new_item'              => __( 'New Map Content', 'corlate' ),
		'edit_item'             => __( 'Edit Map Content', 'corlate' ),
		'view_item'             => __( 'View Map Content', 'corlate' ),
		'all_items'             => __( 'All Map Contents', 'corlate' ),
		'search_items'          => __( 'Search Map Contents', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Map Contents:', 'corlate' ),
		'not_found'             => __( 'No Map Contents found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Map Contents found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Map Content Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Map Content archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Map Content', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Map Content', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Map Contents list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Map Contents list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Map Contents list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'map_content' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'map_content', $args );
}

add_action( 'init', 'corlate_map_content_post' );

/**
 * Register a custom post type called "Pricing Area".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_pricing_area_post() {
	$labels = array(
		'name'                  => _x( 'Pricing Areas', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Pricing Area', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Pricing Areas', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Pricing Area', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Pricing Area', 'corlate' ),
		'new_item'              => __( 'New Pricing Area', 'corlate' ),
		'edit_item'             => __( 'Edit Pricing Area', 'corlate' ),
		'view_item'             => __( 'View Pricing Area', 'corlate' ),
		'all_items'             => __( 'All Pricing Areas', 'corlate' ),
		'search_items'          => __( 'Search Pricing Areas', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Pricing Areas:', 'corlate' ),
		'not_found'             => __( 'No Pricing Areas found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Pricing Areas found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Pricing Area Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Pricing Area archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Pricing Area', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Pricing Area', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Pricing Areas list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Pricing Areas list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Pricing Areas list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'pricing_area' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'pricing_area', $args );
}

add_action( 'init', 'corlate_pricing_area_post' );


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



/**
 * Register a custom post type called "Our Skill".
 *
 * @see get_post_type_labels() for label keys.
 */
function corlate_our_skill_post() {
	$labels = array(
		'name'                  => _x( 'Our Skills', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Our Skill', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Our Skills', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Our Skill', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Our Skill', 'corlate' ),
		'new_item'              => __( 'New Our Skill', 'corlate' ),
		'edit_item'             => __( 'Edit Our Skill', 'corlate' ),
		'view_item'             => __( 'View Our Skill', 'corlate' ),
		'all_items'             => __( 'All Our Skills', 'corlate' ),
		'search_items'          => __( 'Search Our Skills', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Our Skills:', 'corlate' ),
		'not_found'             => __( 'No Our Skills found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Our Skills found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Our Skill Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Our Skill archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Our Skill', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Our Skill', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Our Skills list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Our Skills list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Our Skills list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'our_skill' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'our_skill', $args );
}

add_action( 'init', 'corlate_our_skill_post' );


/**
 * Register a custom post type called "Team".
 *
 * @see get_team_labels() for label keys.
 */
function corlate_team_post() {
	$labels = array(
		'name'                  => _x( 'Teams', 'Post type general name', 'corlate' ),
		'singular_name'         => _x( 'Team', 'Post type singular name', 'corlate' ),
		'menu_name'             => _x( 'Teams', 'Admin Menu text', 'corlate' ),
		'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'corlate' ),
		'add_new'               => __( 'Add New', 'corlate' ),
		'add_new_item'          => __( 'Add New Team', 'corlate' ),
		'new_item'              => __( 'New Team', 'corlate' ),
		'edit_item'             => __( 'Edit Team', 'corlate' ),
		'view_item'             => __( 'View Team', 'corlate' ),
		'all_items'             => __( 'All Teams', 'corlate' ),
		'search_items'          => __( 'Search Teams', 'corlate' ),
		'parent_item_colon'     => __( 'Parent Teams:', 'corlate' ),
		'not_found'             => __( 'No Teams found.', 'corlate' ),
		'not_found_in_trash'    => __( 'No Teams found in Trash.', 'corlate' ),
		'featured_image'        => _x( 'Team Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'corlate' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'corlate' ),
		'archives'              => _x( 'Team archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'corlate' ),
		'insert_into_item'      => _x( 'Insert into Team', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'corlate' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Team', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'corlate' ),
		'filter_items_list'     => _x( 'Filter Teams list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'corlate' ),
		'items_list_navigation' => _x( 'Teams list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'corlate' ),
		'items_list'            => _x( 'Teams list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'corlate' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'team', $args );
}

add_action( 'init', 'corlate_team_post' );
    
    


    
    
    
