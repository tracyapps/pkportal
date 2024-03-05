<?php

/**
 *
 *  mods to WP functionality.
 *
 */

/**
 * Use radio inputs instead of checkboxes for term checklists in specified taxonomies.
 *
 * @param   array   $args
 * @return  array
 */
function start_term_radio_checklist( $args ) {
	if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'ticket_status' ) {
		if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { // Don't override 3rd party walkers.
			if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
				/**
				 * Custom walker for switching checkbox inputs to radio.
				 *
				 * @see Walker_Category_Checklist
				 */
				class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
					function walk( $elements, $max_depth, ...$args ) {
						$output = parent::walk( $elements, $max_depth, ...$args );
						$output = str_replace(
							array( 'type="checkbox"', "type='checkbox'" ),
							array( 'type="radio"', "type='radio'" ),
							$output
						);

						return $output;
					}
				}
			}

			$args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
		}
	}

	return $args;
}

