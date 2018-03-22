<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package spanner
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses spanner_header_style()
 */
function spanner_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'spanner_custom_header_args', array(
		'default-image' => '',
		'default-text-color' => '000000',
		'width' => 210,
		'height' => 210,
		'flex-height' => false,
		'wp-head-callback' => 'spanner_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'spanner_custom_header_setup' );

if ( ! function_exists( 'spanner_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see spanner_custom_header_setup().
	 */
	function spanner_header_style() {
		$header_text_color = get_header_textcolor();

		// If no custom options for text are set, let's bail.
		// get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php if ( ! display_header_text() ) : // Has the text been hidden?  ?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php else : // If the user has set a custom color for the text use that.  ?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;

add_filter( 'get_header_image_tag', function ( $html, $header, $attr ) {
	// force our way!
	$attr['height'] = 105;
	$attr['width'] = 105;

	foreach ( $attr as $name => $value ) {
		$atts[] = $name . '="' . $value . '"';
	}

	return sprintf( '<img %s>', join( ' ', $atts ) );
}, 10, 3 );

add_filter( 'wp_head', function () {
	// custom page colors
	// https://webaim.org/resources/contrastchecker/
	$fields = get_post_custom();

	if ( empty( $fields['etl_page_primary_color'] ) ) {
		$fields = get_post_custom( wp_get_post_parent_id( get_the_ID() ) );
	}

	if ( ! empty( $fields['etl_page_primary_color'] ) ) {
		$primary_color = $fields['etl_page_primary_color'];
		$link_color = $fields['etl_page_link_color'] ?: $primary_color;
		$headings_color = $fields['etl_page_headings_color'] ?: $primary_color;

		?>
		<style>
		:root {
			--color-primary: <?php echo reset( $primary_color ); ?>;
			--link-color: <?php echo reset( $link_color ); ?>;
			--headings-color: <?php echo reset( $headings_color ); ?>;
		}
		</style>
		<?php
	}
} );
