<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pstones_s
 */

if ( ! is_activepstones_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamicpstones_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
