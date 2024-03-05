<?php
/**
 * heeeeere we go
 */

function start_add_block_categories( $categories, $post ) {
	return array_merge(

		array(
			array(
				'slug' => 'pkblocks',
				'title' => __( 'PKblocks', 'pkblocks' ),
			),
		),
		$categories
	);
}
add_filter( 'block_categories', 'start_add_block_categories', 10, 2);

add_action('acf/init', 'start_initialize_acf_blocks');
function start_initialize_acf_blocks()
{
	// Check function exists.

	if ( function_exists( 'acf_register_block_type' ) ) {
		// Register a Guid block block.
		acf_register_block_type( array(
			'name'            => 'navigation-grid',
			'title'           => __( 'Navigation Grid' ),
			'description'     => __( 'Grid of nav items, with icons' ),
			'render_template' => get_template_directory() . '/assets/acf-blocks/navigation-grid/navigation-grid.php',
			'icon'            => file_get_contents( get_template_directory() . '/assets/acf-blocks/_block-assets/navigation-grid-icon.svg' ),
			'category'        => 'igb',
			'example'         => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'is_preview' => true
					)
				)
			)
		) );
	}
}