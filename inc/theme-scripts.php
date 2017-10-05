<?php
/**
 * Enqueue scripts and styles.
 * @package spanner
 */
function spanner_scripts() {
	$style_uri = get_stylesheet_directory_uri();
	$template_uri = get_template_directory_uri();

	wp_enqueue_style( 'spanner-style', get_stylesheet_uri() );
	wp_enqueue_style( 'theme-styles', path_join( $style_uri, 'css/styles.css' ) );

	wp_enqueue_script( 'spanner-navigation',
			path_join( $template_uri, 'js/navigation.js' ),
			array(), '20151215', true );
	wp_enqueue_script( 'spanner-skip-link-focus-fix',
			path_join( $template_uri, 'js/skip-link-focus-fix.js' ),
			array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spanner_scripts' );
