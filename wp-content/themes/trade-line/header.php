<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trade_Line
 */

?><?php
	/**
	 * Hook - trade_line_action_doctype.
	 *
	 * @hooked trade_line_doctype -  10
	 */
	do_action( 'trade_line_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - trade_line_action_head.
	 *
	 * @hooked trade_line_head -  10
	 */
	do_action( 'trade_line_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	/**
	 * Hook - trade_line_action_before.
	 *
	 * @hooked trade_line_page_start - 10
	 * @hooked trade_line_skip_to_content - 15
	 */
	do_action( 'trade_line_action_before' );
	?>

    <?php
	  /**
	   * Hook - trade_line_action_before_header.
	   *
	   * @hooked trade_line_header_start - 10
	   */
	  do_action( 'trade_line_action_before_header' );
	?>
		<?php
		/**
		 * Hook - trade_line_action_header.
		 *
		 * @hooked trade_line_site_branding - 10
		 */
		do_action( 'trade_line_action_header' );
		?>
    <?php
	  /**
	   * Hook - trade_line_action_after_header.
	   *
	   * @hooked trade_line_header_end - 10
	   * @hooked trade_line_add_primary_navigation - 20
	   */
	  do_action( 'trade_line_action_after_header' );
	?>

	<?php
	/**
	 * Hook - trade_line_action_before_content.
	 *
	 * @hooked trade_line_add_breadcrumb - 7
	 * @hooked trade_line_content_start - 10
	 */
	do_action( 'trade_line_action_before_content' );
	?>
    <?php
	  /**
	   * Hook - trade_line_action_content.
	   */
	  do_action( 'trade_line_action_content' );
