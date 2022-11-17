<?php 

/**
 * Add a sidebar.
 */
function corlate_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer First Sidebar', 'corlate' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div  class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Second Sidebar', 'corlate' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<div  class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Third Sidebar', 'corlate' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<div  class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Forth Sidebar', 'corlate' ),
		'id'            => 'sidebar-4',
		'before_widget' => '<div  class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Blog Archives Sidebar', 'corlate' ),
		'id'            => 'sidebar-5',
		'before_widget' => '<div  class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		) );

	register_sidebar( array(
			'name'          => __( 'Blog Gallery Sidebar', 'corlate' ),
			'id'            => 'sidebar-6',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
			) );

	
}
add_action( 'widgets_init', 'corlate_theme_widgets_init' );


; ?>