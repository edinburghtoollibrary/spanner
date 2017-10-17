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

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation dropdown">
			<button class="menu-toggle dropdown-trigger" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( 'Menu', 'spanner' ); ?>
			</button>
			<div class="dropdown-menu">
				<?php get_sidebar( 'site-navigation' ); ?>
			</div>
		</nav><!-- #site-navigation -->

		<?php $title_tag = ( is_front_page() || is_home() ) ? 'h1' : 'div'; ?>
		<<?php echo $title_tag; ?> class="site-branding site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php has_custom_logo() ? the_custom_logo() : bloginfo( 'name' ); ?>
		</a></<?php echo $title_tag; ?>>

		<?php $description = get_bloginfo( 'description', 'display' ); ?>
		<?php if ( $description || is_customize_preview() ) : ?>
			<div class="site-branding site-description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
		<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
