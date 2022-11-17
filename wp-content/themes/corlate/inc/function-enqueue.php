<?php 
function corlate_scripts() {
	
/* enqueue of style */
wp_enqueue_style('corlate-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION, "all");
wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), _S_VERSION, "all");
wp_enqueue_style('corlate-animate', get_template_directory_uri() . '/css/animate.min.css', array(), _S_VERSION, "all");
wp_enqueue_style('corlate-prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', array(), _S_VERSION, "all");
wp_enqueue_style('corlate-main', get_template_directory_uri() . '/css/main.css', array(), _S_VERSION, "all");
wp_enqueue_style('corlate-responsive', get_template_directory_uri() . '/css/responsive.css', array(), _S_VERSION, "all");
wp_enqueue_style('corlate-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	
	// wp_style_add_data( 'corlate-style', 'rtl', 'replace' );


	/* enqueue of script */
	wp_enqueue_script('corlate-jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true);
	wp_enqueue_script('corlate-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('corlate-prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), _S_VERSION, true);
    wp_enqueue_script('corlate-jquery-isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('corlate-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);
	wp_enqueue_script('corlate-wow-min', get_template_directory_uri() . '/js/wow.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('corlate-script', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true);
    

	wp_enqueue_script( 'corlate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'corlate_scripts' );
; ?>