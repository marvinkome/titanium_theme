<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Titanium
 */
 
 $titanium_fpimg = get_theme_mod('titanium_use_featured_image_pages', 0);
 ?>

  <div class="entry-header text-center">
	<?php
	 if ( $titanium_fpimg === 0 ) { the_post_thumbnail('full',array('class'=>'img-responsive')); } ?>
	<br>
  </div>
   <article class="entry container-fluid">
 <?php the_content(); ?>       
     </article>
     <div class="entry-footer">
    
<?php wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'titanium' ),
				'after'  => '</div>',
			) );
		?>
     </div>