<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spanner
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<!-- a href="#menu" class="menu-link">☰</a -->
	<header id="masthead" class="site-header">
		<?php $title_tag = ( is_front_page() || is_home() ) ? 'h1' : 'div'; ?>
		<<?php echo $title_tag; ?> class="site-branding site-title">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			<?php endif; ?>
		</<?php echo $title_tag; ?>>

		<?php $description = get_bloginfo( 'description', 'display' ); ?>
		<?php if ( $description || is_customize_preview() ) : ?>
			<div class="site-branding site-description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
		<?php endif; ?>

		<nav id="site-navigation" class="main-navigation">
			<button class="button-link menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( '☰', 'spanner' ); ?>
			</button>
			<div class="">
				<?php get_sidebar( 'site-navigation' ); ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
