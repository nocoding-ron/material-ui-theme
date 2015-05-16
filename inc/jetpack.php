<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Material UI Theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function material_ui_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'material_ui_theme_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function material_ui_theme_jetpack_setup
add_action( 'after_setup_theme', 'material_ui_theme_jetpack_setup' );

function material_ui_theme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function material_ui_theme_infinite_scroll_render