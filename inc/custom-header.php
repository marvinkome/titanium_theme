<?php
/**
 * Custom Header feature
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Titanium
 *
 * @since Titanium 1.0
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses titanium_header_style()
 */
function titanium_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'titanium_custom_header_args', array(
		'default-text-color'     => '#ffffff',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
	) ) );
	 register_default_headers(  array(
       'default-image' => array(
          'url'           => '%s/assets/img/head.jpeg',
          'thumbnail_url' => '%s/assets/img/head.jpeg',
          'description'   => __( 'Default Header Image', 'titanium' )
       )
     )
  );
}
add_action( 'after_setup_theme', 'titanium_custom_header_setup' );

 