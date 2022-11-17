<?php 
/**
 * Add our Customizer content
 */
function mytheme_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'footer' , array(
		'title'      => ( 'Footer Setting' ),
		'priority'   => 10,
	) );

    $wp_customize->add_setting( 'footer-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'footer-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer Part:'),
        'section' => 'footer'
	) ) ;


 };
 add_action( 'customize_register', 'mytheme_customize_register' );



; ?>