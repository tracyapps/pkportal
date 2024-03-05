<article id="post-<?php the_ID(); ?>" <?php post_class( 'ticket ticket_detail_page' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="ticket-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<div class="ticket-type">
			<?php the_terms( get_the_ID(), 'ticket_type' ); ?>
		</div>
		<div class="ticket-urgency">
			<?php $urgency = get_field( 'urgency');

			if( $urgency ) :
				printf(
					' 
 							<a href="%s" class="urgency_label with_icon">
 								<svg class="%s-dims"><use xlink:href="#%s"></use></svg>
 								<span>%s</span>
 							 </a>
 							',
					'#',
					esc_html( $urgency['value'] ),
					esc_html( $urgency['value'] ),
					esc_html( $urgency['label'] )
				);
			endif;
			?>
		</div>
	</header> <!-- end ticket header -->
	<section class="ticket-content" itemprop="articleBody">
		<div class="ticket-status">
			<?php the_terms( get_the_ID(), 'ticket_status' ); ?>
		</div>

	</section> <!-- end ticket body -->
	<footer class="ticket-footer">


	</footer> <!-- end ticket footer -->


</article> <!-- end ticket -->