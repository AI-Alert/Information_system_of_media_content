<?php
/**
 * Сайдбар, содержащий основную область с виджетами
 *
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>