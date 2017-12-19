<?php
/**
 * Template Name: no-sidebar
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Titanium
 * 
 * @Since Titanium 1.0
 */

get_header(); ?>

 <section class="container-fluid">
       <article class="container-fluid">
<?php
   /**
     * Start the loop
   */
   while( have_posts() ) : the_post(); 
  get_template_part('template-parts/content', 'page' ); 

?>  <hr>
<?php  // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

       </article>
    </section>
  
<?php get_footer(); ?>