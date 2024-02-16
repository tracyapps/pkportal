<?php get_header(); ?>

	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php

			if ( is_home() ) {
				get_template_part( 'parts/loop', 'archive-list' );
			} else {
				get_template_part( 'parts/loop', 'front-page' );
			}

			?>

		<?php endwhile; endif; ?>
	</main> <!-- end #main -->

<?php get_footer(); ?>