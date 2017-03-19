<?php
function pkslider_scripts() {
	wp_enqueue_style( 'style.css', get_stylesheet_uri() );
	
	wp_enqueue_style( 'fullpage_css', get_template_directory_uri() . '/jquery.fullPage.css', array() );

	//wp_enqueue_script( 'html5shiv', get_template_directory_uri() .'/js/html5shiv.js', true );
	//wp_enqueue_script( 'ie9', get_template_directory_uri() .'/js/ie9.js' );
	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery-1.11.2.min.js', array('jquery'), '1.0.0' );
	
	wp_enqueue_script( 'slimscroll', get_template_directory_uri() . '/jquery.slimscroll.min.js');
	
	wp_enqueue_script( 'fullPage_js', get_template_directory_uri() . '/jquery.fullPage.js' );
	
	wp_enqueue_script( 'fullPage_starter', get_template_directory_uri() . '/fullPage_starter.js');
}
add_action( 'wp_enqueue_scripts', 'pkslider_scripts' );

add_filter('show_admin_bar', '__return_false');