<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Titanium
 *
 * @since Titanium 1.0.2
 */
?>

<div class="widget">
  <aside class="container-fluid col-md-4 boxed">
    <?php
      if ( is_active_sidebar( 'sidebar-1' ) ):
	    dynamic_sidebar( 'sidebar-1' );
      endif; ?>
  </aside>
</div>
