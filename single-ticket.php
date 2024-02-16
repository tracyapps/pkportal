<?php
acf_form_head();
get_header(); ?>

	<div class="main-two-columns">
		<main id="main" class="main-column" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'single-ticket' ); ?>

			<?php endwhile;
			else : ?>
				<?php get_template_part( 'parts/content', 'missing' ); ?>
			<?php endif; ?>

			<?php acf_form(

				array(
					'id'	=> 'ticket-details',
				)
			); ?>

		</main> <!-- end #main -->

		<aside class="secondary-column" role="complementary">
			<?php comments_template(); ?>
		</aside>

	</div> <!-- end .main-two-columns -->

<?php get_footer(); ?>