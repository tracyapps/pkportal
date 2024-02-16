<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function start_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'start-columns-overlap',
				'label' => esc_html__( 'Overlap', 'start' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'start-border',
				'label' => esc_html__( 'Borders', 'start' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'start-border',
				'label' => esc_html__( 'Borders', 'start' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'start-border',
				'label' => esc_html__( 'Borders', 'start' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'start-image-frame',
				'label' => esc_html__( 'Frame', 'start' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'start-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'start' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'start-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'start' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'start-border',
				'label' => esc_html__( 'Borders', 'start' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'start-separator-thick',
				'label' => esc_html__( 'Thick', 'start' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'start-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'start' ),
			)
		);
	}
	add_action( 'init', 'start_register_block_styles' );
}
