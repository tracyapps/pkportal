<?php
/**
 * Block template file: /Users/tracy.apps/Library/CloudStorage/OneDrive-PKWARE,Inc/Desktop/work/_Dev/local/pkPortal/app/public/assets/themes/pkportal/assets/acf-blocks/navigation-grid/navigation-grid.php
 *
 * Navigation Grid Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'navigation-grid-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-navigation-grid';
if ( ! empty( $block['className'] ) ) {
	$classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
	<?php echo '#' . $id; ?> {
	/* Add styles that use ACF values here */
	}
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
	<?php if ( have_rows( 'link' ) ) : ?>
		<?php while ( have_rows( 'link' ) ) : the_row(); ?>
			<?php the_sub_field( 'link_label' ); ?>
			<?php if ( have_rows( 'link_url' ) ) : ?>
				<?php while ( have_rows( 'link_url' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'link_location' ) == 1 ) : ?>
						<?php // echo 'true'; ?>
					<?php else : ?>
						<?php // echo 'false'; ?>
					<?php endif; ?>
					<?php $select_page = get_sub_field( 'select_page' ); ?>
					<?php if ( $select_page ) : ?>
						<?php foreach ( $select_page as $post ) : ?>
							<?php setup_postdata ( $post ); ?>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<?php the_sub_field( 'url' ); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<pre><code><?php echo esc_html( get_sub_field( 'icon' ) ); ?></code></pre>
		<?php endwhile; ?>
	<?php else : ?>
		<?php // No rows found ?>
	<?php endif; ?>
	<?php the_field( 'layout' ); ?>
</div>