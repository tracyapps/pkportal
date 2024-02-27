<?php get_header(); ?>

	<main id="main" class="full" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="padding large login_form">

				<?php
				if (strpos($_SERVER['REQUEST_URI'], "?login=failed") !== false) : ?>
					<div class="login_error error_message">
						<p>Sorry, that was not correct. Please try logging in again.</p>
					</div>
				<?php endif; ?>

				<?php wp_login_form(); ?>

				<p class="lost_password">Did you forget your password? <a href="<?php echo wp_lostpassword_url( home_url() ) ?>">Reset it here &raquo;</a></p>
			</div>

		<?php endwhile; endif; ?>
	</main> <!-- end #main -->

<?php get_footer(); ?>
