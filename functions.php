<?php
/**
 * spanner functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package spanner
 */
!defined( 'ABSPATH' ) && exit;

// use locate_template rather than require/require_once so we can override in
// a child theme if desired
locate_template( array( 'inc/theme-setup.php' ) , true );
locate_template( array( 'inc/theme-widgets.php' ), true );
locate_template( array( 'inc/theme-scripts.php' ), true );
locate_template( array( 'inc/custom-header.php' ), true );
locate_template( array( 'inc/template-tags.php' ), true );
locate_template( array( 'inc/template-functions.php' ), true );
locate_template( array( 'inc/customizer.php' ), true );

if ( defined( 'JETPACK__VERSION' ) ) {
	locate_template( array( 'inc/jetpack.php' ), true );
}
