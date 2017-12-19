<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package titanium 
 */

?>
<div class="container widget-area">
      <section class="row">
        <article class="col-sm-3 widget">
      <?php
				if ( is_active_sidebar( 'sidebar-2' ) ):
					dynamic_sidebar( 'sidebar-2' );
endif; ?>
        </article>
        <article class="col-sm-3 widget">
        <?php
				if ( is_active_sidebar( 'sidebar-3' ) ):
					dynamic_sidebar( 'sidebar-3' );
endif; ?>
        </article>
     
        <article class="col-sm-3 widget">
        <?php
				if ( is_active_sidebar( 'sidebar-4' ) ):
					dynamic_sidebar( 'sidebar-4' );
endif; ?>
        </article> 
        <article class="col-sm-3 widget">
        <?php
				if ( is_active_sidebar( 'sidebar-5' ) ):
					dynamic_sidebar( 'sidebar-5' );
endif; ?>
        </article>
      </section>        
      </div>
