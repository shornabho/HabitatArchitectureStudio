<?php
/**
 * CSS related hooks.
 *
 * This file contains hook functions which are related to CSS.
 *
 * @package Trade_Line
 */

if ( ! function_exists( 'trade_line_trigger_custom_css_action' ) ) :

	/**
	 * Do action theme custom CSS.
	 *
	 * @since 1.0.0
	 */
	function trade_line_trigger_custom_css_action() {

		/**
		 * Hook - trade_line_action_theme_custom_css.
		 */
		do_action( 'trade_line_action_theme_custom_css' );

	}

endif;

add_action( 'wp_head', 'trade_line_trigger_custom_css_action', 99 );
