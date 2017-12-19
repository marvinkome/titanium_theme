<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Titanium
 *
 * Since 1.0
 */


$date = get_option('date_format');
?>

 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           <div class="entry-header">
            <h3><a href="<?php echo esc_url( get_permalink() ); ?>">  <?php the_title(); ?></a></h3>
           </div>
           <?php if( !is_search() ) : ?> 
           <div class="entry-meta text-muted">
              <p><span><a href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-calendar"></i> <?php the_time($date); ?></a></span> // <span> <i class="fa fa-folder-o"></i> <?php the_category( ' ' ); ?></span><?php if( is_multi_author() ) : ?> // <span><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span> 
  <?php endif; ?><span><?php the_tags('// <i class="fa fa-tags"></i> ', ', '); ?></span> // <span><i class="fa fa-comments"></i> <?php comments_popup_link( __('Leave a comment','titanium'), __('1 Comment','titanium'), __(' % Comments','titanium') ); ?></span> <span><?php edit_post_link('Edit', '// <i class="fa fa-pencil-square-o"></i>', ''); ?></span></p>
           </div>
           <?php endif; ?>
           <div class="entry-summary text-muted">
       <?php the_post_thumbnail( 'full', array('class' => 'img-responsive') ); ?>
             <br>
             <?php the_excerpt(); ?>
           </div>           <hr>                  
         </div>