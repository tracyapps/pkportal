<?php

// Adding WP Functions & Theme Support
function start_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	// Default thumbnail size
	set_post_thumbnail_size( 125, 125, true );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
		)
	);

	
} /* end theme support */

add_action( 'after_setup_theme', 'start_theme_support' );