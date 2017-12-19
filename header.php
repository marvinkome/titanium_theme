<?php
/**
 * The template for header of the theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Titanium
 *
 * @Since Titanium 1.0
 */


?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
<?php wp_head(); ?>
</head>

<body id="page" <?php body_class(); ?>>
 <nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".mynav" onclick="myFunction(this)">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  <?php
  $titanium_custom_logo_id = get_theme_mod( 'custom_logo' );
  $titanium_logo = wp_get_attachment_image_src( $titanium_custom_logo_id , 'full' );
  $titanium_blogname = get_bloginfo('name');
  if ( has_custom_logo() ) {
        echo '<div class="navbar-brand"><img src="'. esc_url( $titanium_logo[0] ) .'"></div>';
  } else {
        echo '<a class="navbar-brand" href="'. esc_url( home_url('/') ) .'">'. esc_html( $titanium_blogname ) .'</a>';
  }
  ?>
  </div>
 <?php 
/**
 * Use Bootstrap nav walker for responsive nav menu.
 *
 * @Since Titanium 1.0
 */

wp_nav_menu( array( 
   'theme_location' => 'primary',
   'depth' => 2,
   'container' => 'div', 
   'container_class' => 'collapse navbar-collapse mynav',
   'menu_class' => 'nav navbar-right navbar-nav', 
   'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 
   'walker' => new wp_bootstrap_navwalker()
            ) ); ?>   
  </div>
  </nav><!--/nav-->
 
     <header class="text-center jumbotron parralax">
    <?php if( is_singular() ) : ?>  
  <h2 class="site-title"><?php single_post_title() ?></h2>
    <?php endif; ?>
 <?php
/**
 * Use description for home and front-page.
 *
 * @Since Titanium 1.1
 */

// Make sure it is home and front page
   if( is_home() && is_front_page() ) : ?>
   <h1 class="site-title"><?php bloginfo('name'); ?></h1>
   <p class="site-description"><?php bloginfo('description'); ?></p>

<?php endif; ?>
    </header><!--/header-->
    
  <main class="container-fluid">