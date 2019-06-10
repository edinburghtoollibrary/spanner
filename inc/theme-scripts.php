<?php
/**
 * Enqueue scripts and styles.
 * @package spanner
 */
function spanner_scripts() {
	$template_uri = get_template_directory_uri();

	wp_enqueue_style( 'font-google-heebo', 'https://fonts.googleapis.com/css?family=Heebo:100,300,400,700' );
	#wp_enqueue_style( 'font-google-lato', 'https://fonts.googleapis.com/css?family=Lato:300,700' );
	#wp_enqueue_style( 'font-google-palanquin', 'https://fonts.googleapis.com/css?family=Palanquin:300,700' );
	#wp_enqueue_style( 'font-google-yantramanav', 'https://fonts.googleapis.com/css?family=Yantramanav:300,700' );

	wp_enqueue_style( 'spanner-styles', path_join( $template_uri, 'css/styles.css' ) );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	#wp_enqueue_style( 'ionicons-style', 'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), '2.0.1' );
	wp_enqueue_style( 'icomoon-linearicons-style', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css', array(), '1.0.0' );

	#wp_enqueue_script( 'spanner-navigation',
	#		path_join( $template_uri, 'js/navigation.js' ),
	#		array(), '20151215', true );
	wp_enqueue_script( 'spanner-skip-link-focus-fix',
			path_join( $template_uri, 'js/skip-link-focus-fix.js' ),
			array(), '20151215', true );
	wp_enqueue_script( 'spanner-custom',
			path_join( $template_uri, 'js/spanner.custom.js' ),
			array(), '20171019', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spanner_scripts' );
