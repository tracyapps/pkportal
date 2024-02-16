<?php
function site_scripts() {
	global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

	// Load What-Input files in footer
	//wp_enqueue_script( 'font-awesome-pro', 'https://pro.fontawesome.com/releases/v5.8.1/js/all.js', array(), '', true );

	// Adding Foundation scripts file in the footer
	//wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.js', array( 'jquery' ), '6.2.3', true );

	// Adding scripts file in the footer
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

	// Register main stylesheet
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

	// Comment reply script for threaded comments
	if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1 ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'site_scripts', 999 );

/**
 * Enqueue block editor script.
 *
 *
 * @return void
 */
function start_block_editor_script() {

	wp_enqueue_script( 'start-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'start_block_editor_script' );