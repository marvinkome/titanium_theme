<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Titanium
 *
 * @since Titanium 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function titanium_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'titanium_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function titanium_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'titanium_pingback_header' );

/**
 * Customize Tag Cloud Widget font size.
 */
function titanium_tag_cloud_widget( $args ) {
	$args['largest'] = 17; //largest tag
	$args['smallest'] = 15; //smallest tag
	$args['unit'] = 'px'; //tag font unit

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'titanium_tag_cloud_widget' );

