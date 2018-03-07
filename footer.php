<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spanner
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php wp_nav_menu( array( 'menu' => 'site-footer' ) ); ?>
		<div class="site-info">
			<?php printf( __('© 2017 %s','spanner' ), get_bloginfo( 'name' ) ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
