<?php get_header(); ?>

	<main id="main" class="full" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/loop', 'page-full-height' ); ?>

		<?php endwhile; endif; ?>
	</main> <!-- end #main -->

<?php get_footer(); ?>
