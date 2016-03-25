<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package semplicemente
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function semplicemente_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'semplicemente_jetpack_setup' );
