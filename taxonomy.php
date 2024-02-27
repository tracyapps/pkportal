<?php get_header();

$post_type = get_post_type( get_the_ID() );
?>



	<main id="main" class="main archive taxonomy_archive <?php esc_html_e( $post_type ); ?>_archive" role="main">

		<header>
			<?php start_the_archive_title( '<h1 class="page-title">', '</h1>', 'smaller'); ?>
			<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
		</header>

		<section class="archive_loop_container">
			<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'parts/loop-archive',  esc_html( $post_type ) ); ?>
			<?php endwhile; ?>
		</section>
		<footer class="pagination taxonomy_pagination">
			<?php start_page_navi(); ?>
		</footer>

		<?php endif; ?>

	</main> <!-- end #main -->


<?php get_footer(); ?>