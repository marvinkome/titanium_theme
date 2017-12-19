<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Titanium
 *
 * @Since Titanium 1.0
 */

?>
</main>
<footer>
	<?php get_sidebar('footer'); ?>
		<section class="container">
			<article class="text-center footer-tag">
				<h2 class="site-name"><?php bloginfo('name'); ?></h2>
					<?php $titanium_ftag = get_theme_mod('titanium_footer_tagline','' ); ?>
					<p><?php if ( isset( $titanium_ftag ) ): echo esc_html( $titanium_ftag ); endif; ?></p>
			</article>
			<br>
			<div class="container">
			<div class="row">
				<?php if( get_theme_mod('titanium_show_icons', 0) === 1 ) { ?>
            	<div class="col-sm-6 social container-fluild">
         			<article class="row widget">
       					<?php 
 							$titanium_facebook = get_theme_mod('titanium_facebook_id', '' );
  							$titanium_twitter = get_theme_mod('titanium_twitter_id', '' );
  							$titanium_instagram = get_theme_mod('titanium_instagram_id', '' );
  							$titanium_gplus = get_theme_mod('titanium_googleplus_id', '' );
  							$titanium_linkedin = get_theme_mod('titanium_linkedin_id', '' );
 							$titanium_wp = get_theme_mod('titanium_wordpress_id', '' );
  						?>
            			<div class="col-xs-2">
							<?php if ( isset( $titanium_facebook ) ) : ?>
              					<a href="<?php echo esc_url( $titanium_facebook ); ?>"><i class="fa fa-facebook"></i></a>
							<?php endif; ?>
            			</div>
            			<div class="col-xs-2">
							<?php if ( isset( $titanium_twitter ) ) : ?>
              					<a href="<?php echo esc_url( $titanium_twitter ); ?>"><i class="fa fa-twitter"></i></a>
							<?php endif; ?>
            			</div>
            			<div class="col-xs-2">
							<?php if ( isset( $titanium_instagram ) ) : ?>
              					<a href="<?php echo esc_url( $titanium_instagram );  ?>"><i class="fa fa-instagram"></i></a>
							<?php endif; ?>
            			</div>
            			<div class="col-xs-2">
							<?php if( isset( $titanium_gplus ) ) : ?>
              					<a href="<?php echo esc_url( $titanium_gplus ); ?>"><i class="fa fa-google-plus"></i></a>
							<?php endif; ?>
            			</div>
            			<div class="col-xs-2">
							<?php if( isset( $titanium_linkedin ) ) : ?>
              					<a href="<?php echo esc_url( $titanium_linkedin ); ?>"><i class="fa fa-linkedin"></i></a>
							<?php endif; ?>
            			</div>
            			<div class="col-xs-2">
							<?php if( isset( $titanium_wp ) ) : ?>
              						<a href="<?php echo esc_url( $titanium_wp ); ?>"><i class="fa fa-wordpress"></i></a>
							<?php endif; ?>
            			</div>
          		</article>
          	</div> <?php } ?>
          	<div class="col-sm-6 text-center copyright">
            	<p><a href="<?php echo esc_url( __( 'http://marvinkome.tk/', 'titanium' ) ); ?>"><?php esc_html_e('Titanium By Marvin Kome', 'titanium'); ?></a></p>
          	</div>
          </div>
		</div>
	</section>
</footer>
<?php wp_footer(); ?>
</body>
</html>