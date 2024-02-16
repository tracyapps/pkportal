<?php get_header(); ?>

	<div class="main-two-columns">
		<main id="main" class="main-column" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'single' ); ?>

			<?php endwhile;
			else : ?>
				<?php get_template_part( 'parts/content', 'missing' ); ?>
			<?php endif; ?>

		</main> <!-- end #main -->

		<?php get_sidebar(); ?>
	</div> <!-- end .main-two-columns -->

<?php get_footer(); ?>