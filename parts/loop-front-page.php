<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="page-header">

	</header> <!-- end page header -->

	<section class="page-content" itemprop="articleBody">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="page-footer">

	</footer> <!-- end page footer -->

</article> <!-- end article -->