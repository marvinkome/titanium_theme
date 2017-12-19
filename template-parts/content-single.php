<?php
/**
 * Template part for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Titanium
 *
 * Since 1.0
 */

 $date = get_option('date_format');
 $titanium_fsimg = get_theme_mod('titanium_use_featured_image_post', 0);
?>

<div class="entry-header text-center">
	<?php 
		if ( $titanium_fsimg === 0 ) { the_post_thumbnail('large', array('class'=>'img-responsive'));} ?>
</div>
<br>
<div class="entry-meta text-center">
	<p><i class="fa fa-calendar"></i> <?php the_time($date); ?></p>    <p><i class="fa fa-folder-o"></i> <?php the_category( ', '); ?></p>
</div>
<br>
<article class="entry container-fluid">
	<?php the_content(); ?>    
</article>
<?php wp_link_pages( array(
				'before'      => '<div>' . __( 'Pages:', 'titanium' ),
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
?>
<div class="entry-footer">
	<p class="tags"><?php the_tags('<i class="fa fa-tags"></i> ',', '); ?></p>   
</div>