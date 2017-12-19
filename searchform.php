 <?php
/**
 * Template for displaying search forms in Titanium
 *
 * @package Titanium
 *
 * @since Titanium 1.0
 */
?> <form class="form-group" action="<?php echo esc_url( home_url('/') ); ?>" method="get">
   <div class="input-group">
   <input type="search" name="<?php echo esc_attr('s'); ?>" placeholder="<?php esc_attr_e('search..','titanium'); ?>" class="form-control">
   <div class="input-group-btn">
   <button type="submit" class="btn btn-custom">
   <i class="fa fa-search"></i>
   </button>
   </div>
   </div>
   </form>
