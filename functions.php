<?php
/**
 * woosta-sf functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package woosta
 */

if ( ! defined( '_WOOSTA_SF_VERSION' ) ) {
	define( '_WOOSTA_SF_VERSION', wp_get_theme()->get( 'Version' ) );
}

/**
 * Returns a string to be used for cache busting
 *
 * @return str
 */
function woosta_sf_cache_buster() {
	static $cache_buster;
	if ( empty( $cache_buster ) ) {
		$cache_buster = _WOOSTA_SF_VERSION;
		$cache_buster = date(time());
	}
	return $cache_buster;
}


function woosta_sf_enqueue_styles() {
	wp_enqueue_style( 'woosta-sf-style',
		get_stylesheet_uri(),
		array( 'woosta-style' ),
		woosta_sf_cache_buster()
	);
	wp_enqueue_style( 'woosta-fonts', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap', array(), NULL );

}
add_action( 'wp_enqueue_scripts', 'woosta_sf_enqueue_styles' );




/**
 * Display Posts, initiatives open
 *
 * @param string $output Output.
 * @param array  $atts Atttributes.
 */
function woosta_sf_dps_select_open( $output, $atts ) {
	if ( 'initiative' === $atts['layout'] ) {
		$output = '<' . $atts['wrapper'] . ' class="' . $atts['wrapper_class'] . ' carousel splide">
		<div class="track splide__track">
		<div class="splide__list">';
	}
	return $output;
}
add_filter( 'display_posts_shortcode_wrapper_open', 'woosta_sf_dps_select_open', 10, 2 );


/**
 * Display Posts, initiatives close
 *
 * @param string $output Output.
 * @param array  $atts Atttributes.
 */
function woosta_sf_dps_select_close( $output, $atts ) {
  if ( 'initiative' === $atts['layout'] ) {
// 		wp_enqueue_script( 'woosta-sf-carousel', get_stylesheet_directory_uri() . '/js/carousel.js', array(), woosta_sf_cache_buster(), TRUE );
		wp_enqueue_script( 'woosta-sf-splide', get_stylesheet_directory_uri() . '/js/splide/js/splide.min.js', array(), woosta_sf_cache_buster(), TRUE );
		wp_enqueue_style( 'woosta-sf-splide', get_stylesheet_directory_uri() . '/js/splide/css/splide.min.css', array(), woosta_sf_cache_buster(), FALSE );

		$output .= '</div></div>';

		$output .= '
		<script>
			window.addEventListener("load", function(){
				var splide = new Splide( ".splide", {
				} );

				splide.mount();
			})
		</script>
		';
	}
		
	return $output;
}
add_filter( 'display_posts_shortcode_wrapper_close', 'woosta_sf_dps_select_close', 10, 2 );




/**
 * Template Parts with Display Posts Shortcode
 * @author Bill Erickson
 * @see https://www.billerickson.net/template-parts-with-display-posts-shortcode
 *
 * @param string $output, current output of post
 * @param array $original_atts, original attributes passed to shortcode
 * @return string $output
 */
function woosta_sf_dps_template_part( $output, $original_atts ) {

	// Return early if our "layout" attribute is not specified
	if( empty( $original_atts['layout'] ) )
		return $output;
	ob_start();
	get_template_part( 'template-parts/dps', $original_atts['layout'] );
	$new_output = ob_get_clean();
	if( !empty( $new_output ) )
		$output = $new_output;
	return $output;
}
add_action( 'display_posts_shortcode_output', 'woosta_sf_dps_template_part', 10, 2 );