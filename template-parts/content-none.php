<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Titanium
 *
 * Since 1.0
 */
 ?>

<article class="container-fluid">
<?php if( is_home() ) : ?>
<h3 class="error"><?php esc_html_e('Soorry', 'titanium'); ?></h3>

<p><?php esc_html_e(' No posts yet to display', 'titanium' ) ?></p>

<?php endif;

      if( is_404() ) : ?>

<h3 class="error text-center"><?php esc_html_e('404', 'titanium'); ?></h3>

<p class="error-text text-center"> <?php esc_html_e('Seems this page doesn\'t exist go back to the ','titanium'); ?><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e('home page','titanium'); ?></a><?php esc_html_e(' or search','titanium'); ?></p>

<div class="container-fluid text-center">
<?php get_search_form(); ?>
</div>
<?php endif;
      if ( is_search() ) : ?>

<h3 class="error"><?php esc_html_e('Oops', 'titanium'); ?></h3>

<p><?php esc_html_e(' Your requested page wasnt found. Maybe try searching again', 'titanium' ) ?></p>

<?php endif; ?>
