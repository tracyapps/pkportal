<?php
/**
 *  Displays archive entries with featured image, tag/category (etc) and short excerpt
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class( 'single_ticket' ); ?> role="article">

	<header class="ticket-header">
		<h3 class="title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h3>
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
	</header> <!-- end article header -->

	<main class="ticket-content" itemprop="articleBody">
		<?php
			$full_description = get_field( 'detailed_description' );
			if( $full_description ) :
				echo '<div class="text_description_container">' . wp_kses_post( $full_description ) . '</div>';
			endif; //end text description
			$screenshots = get_field( 'screenshots' );
			if( $screenshots ) :
				echo '<div class="screenshots_container">';
				foreach( $screenshots as $screenshot ) :
					/*echo '<hr><pre>';
					var_dump( $screenshot );
					echo '</pre>';*/
					echo '<img src="' . esc_url( $screenshot['url'] ) . '" alt="' . esc_html( $screenshot['title'] ) . '">';
				endforeach;
				echo '</div>';
			endif; // end screenshots
		?>
	</main> <!-- end article section -->
	<footer class="ticket-footer">

	</footer>

</article> <!-- end article -->

	