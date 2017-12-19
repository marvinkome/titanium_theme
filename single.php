<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Titanium
 *
 * @Since Titanium 1.0

 */

get_header(); ?>
<div class="row">
<div>
  <?php if( get_theme_mod( 'titanium_sidebar_poition','right' ) == 'left' ){  get_sidebar(); } ?>
  <section class="container-fluid col-md-7 boxed">
    <article class="container-fluid">
      <?php 
         // Start the loop
         while( have_posts() ) : the_post(); get_template_part('template-parts/content', 'single' );
      ?>
       <hr>
       <ul class="pager-1">
         <li class="previous">
            <?php previous_post_link('%link'); ?>
         </li>
         <li class="next">
            <?php next_post_link('%link'); ?>
         </li>
        </ul>    
       <?php	
          // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
    </article>
  </section>
  <?php if( get_theme_mod( 'titanium_sidebar_poition','right' ) == 'right' ){ get_sidebar(); } ?>
</div>
</div>
<?php get_footer(); ?>