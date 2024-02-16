<?php
/* start Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

*/

// let's create the function for the custom type
function start_custom_post_types() {
	

	/**
	 * CPT: landing page
	 */
	register_post_type( 'landing-page', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array(
			'labels' => array(
				'name' => __( 'Landing Pages', 'start' ),
				'singular_name' => __( 'Landing Page', 'start' ),
				'all_items' => __( 'All Landing Pages', 'start' ),
				'add_new' => __( 'Add New', 'start' ),
				'add_new_item' => __( 'Add New', 'start' ),
				'edit' => __( 'Edit', 'start' ),
				'edit_item' => __( 'Edit', 'start' ),
				'new_item' => __( 'New Landing Page', 'start' ),
				'view_item' => __( 'View Landing Page', 'start' ),
				'search_items' => __( 'Search Pages', 'start' ),
				'not_found' => __( 'Nothing found.', 'start' ),
				'not_found_in_trash' => __( 'Nothing found in Trash', 'start' ),
				'parent_item_colon' => ''
			),
			/* end of arrays */
			'description' => __( 'Landing pages for all the things', 'start' ),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 20,
			'menu_icon' => 'dashicons-welcome-widgets-menus',
			'rewrite' => array(
				'slug' => '😉',
				'with_front' => false
			),
			/* you can specify its url slug */
			'has_archive' => false,
			/* you can rename the slug here */
			'capability_type' => 'page',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array(
				'title',
				'editor',
				'author',
				'excerpt',
				'custom-fields',
				'revisions'
			)
		) /* end of options */
	); /* end of register CPT: landing-page */

	/* this adds your post categories to your custom post type(s) */
	// register_taxonomy_for_object_type( 'category', 'portfolio' );
	/* this adds your post tags to your custom post type(s) */
	// register_taxonomy_for_object_type( 'post_tag', 'portfolio' );

}

// adding the function to the Wordpress init
add_action( 'init', 'start_custom_post_types' );


