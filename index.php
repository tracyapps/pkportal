<?php get_header(); ?>

	<div class="main-two-columns">
		<main id="main" class="main-column" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive' ); ?>

			<?php endwhile; ?>

				<?php start_page_navi(); ?>

			<?php else : ?>
				<?php get_template_part( 'parts/content', 'missing' ); ?>
			<?php endif; ?>

		</main> <!-- end #main -->

		<?php get_sidebar(); ?>
	</div> <!-- end .main-two-columns -->

<?php get_footer(); ?>