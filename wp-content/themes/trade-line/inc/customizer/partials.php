<?php
/**
 * Customizer partials.
 *
 * @package Trade_Line
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.4.0
 *
 * @return void
 */
function trade_line_customize_partial_blogname() {

	bloginfo( 'name' );

}

/**
 * Render the site description for the selective refresh partial.
 *
 * @since 1.4.0
 *
 * @return void
 */
function trade_line_customize_partial_blogdescription() {

	bloginfo( 'description' );

}
