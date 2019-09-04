<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trade_Line
 */

	/**
	 * Hook - trade_line_action_after_content.
	 *
	 * @hooked trade_line_content_end - 10
	 */
	do_action( 'trade_line_action_after_content' );
?>

	<?php
	/**
	 * Hook - trade_line_action_before_footer.
	 *
	 * @hooked trade_line_footer_start - 10
	 */
	do_action( 'trade_line_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - trade_line_action_footer.
	   *
	   * @hooked trade_line_footer_copyright - 10
	   */
	  do_action( 'trade_line_action_footer' );
	?>
	<?php
	/**
	 * Hook - trade_line_action_after_footer.
	 *
	 * @hooked trade_line_footer_end - 10
	 */
	do_action( 'trade_line_action_after_footer' );
	?>

<?php
	/**
	 * Hook - trade_line_action_after.
	 *
	 * @hooked trade_line_page_end - 10
	 * @hooked trade_line_footer_goto_top - 20
	 */
	do_action( 'trade_line_action_after' );
?>

<?php wp_footer(); ?>
</body>
</html>
