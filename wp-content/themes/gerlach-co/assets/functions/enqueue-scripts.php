<?php
function site_scripts() {
	global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

	// fontawesome import
	//wp_enqueue_script( 'font-awesome-pro', 'https://pro.fontawesome.com/releases/v5.8.1/js/all.js', array(), '', true );

	// Load What-Input files in footer
	wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/dist/what-input.min.js',
		array(), '', true );

	// Adding scripts file in the footer
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/allscripts.min.js', array( 'jquery' ), '', true );

	// Register main stylesheet
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

	// Comment reply script for threaded comments
	if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1 ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'site_scripts', 999 );

