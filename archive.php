<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Titanium
 *
 * @Since Titanium 1.0
 */

get_header(); ?>
<div class="row">
	<?php if ( get_theme_mod( 'titanium_sidebar_poition','right' ) === 'left' ) { get_sidebar(); } ?>
	<section class="container-fluid col-md-7">
		<article class="container-fluid boxed">
       	    <?php /* Start the Loop */
		    if ( have_posts() ) : while ( have_posts() ) : the_post();
            /*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */   
			get_template_part( 'template-parts/content', get_post_format() );                    
       		endwhile; ?>      
         	<ul class="pager-1">
         		<li class="previous">
            		<?php previous_posts_link( __( 'Newer Posts', 'titanium' ) ); ?>
           		</li>
           		<li class="next">
            		<?php next_posts_link( __( 'Older Posts', 'titanium' ) ); ?>
           		</li>

         	</ul>
       		<?php else : 
            get_template_part( 'template-parts/content', 'none' ); endif; ?>
       </article>
    </section>
   <?php if ( get_theme_mod( 'titanium_sidebar_poition','right' ) === 'right' ) { get_sidebar(); } ?>
</div>
<?php get_footer(); ?>