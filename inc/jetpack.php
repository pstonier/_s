<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package pstones_s
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function pstonespstones_s_jetpackpstones_setup() {
	// Add theme support for Infinite Scroll.
	add_themepstones_support(
		'infinite-scroll',
		array(
			'container' => 'main',
			'render'    => 'pstonespstones_s_infinitepstones_scroll_render',
			'footer'    => 'page',
		)
	);

	// Add theme support for Responsive Videos.
	add_themepstones_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_themepstones_support(
		'jetpack-content-options',
		array(
			'post-details' => array(
				'stylesheet' => 'pstonespstones-style',
				'date'       => '.posted-on',
				'categories' => '.cat-links',
				'tags'       => '.tags-links',
				'author'     => '.byline',
				'comment'    => '.comments-link',
			),
			'featured-images' => array(
				'archive' => true,
				'post'    => true,
				'page'    => true,
			),
		)
	);
}
add_action( 'afterpstones_setup_theme', 'pstonespstones_s_jetpackpstones_setup' );

if ( ! function_exists( 'pstonespstones_s_infinitepstones_scroll_render' ) ) :
	/**
	 * Custom render function for Infinite Scroll.
	 */
	function pstonespstones_s_infinitepstones_scroll_render() {
		while ( have_posts() ) {
			the_post();
			if ( ispstones_search() ) :
				get_template_part( 'template-parts/content', 'search' );
			else :
				get_template_part( 'template-parts/content', get_post_type() );
			endif;
		}
	}
endif;
