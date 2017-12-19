<?php
/**
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

 <div class="row">
<?php if( get_theme_mod( 'titanium_sidebar_poition','right' ) == 'left' ){ get_sidebar(); } ?>
<section class="container-fluid col-md-7 boxed">
       <article class="container-fluid">
<?php
   /**
     * Start the loop
   */
   while( have_posts() ) : the_post(); 
  get_template_part('template-parts/content', 'page' ); 

?>  <hr>
<?php
			endwhile; // End of the loop.
			?>

       </article>
    </section>
   <?php if( get_theme_mod( 'titanium_sidebar_poition','right' ) == 'right' ){ get_sidebar(); } ?>
</div>   
  

<?php get_footer(); ?>