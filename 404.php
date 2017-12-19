<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Titanium
 *
 * @subpackage Titanium
 *
 * @Since Titanium 1.0
 */
get_header(); ?>
<section class="container-fluid">
	<article class="container-fluid">
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	</article>
</section>    
<?php get_footer(); ?>