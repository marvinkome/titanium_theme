<?php 
function titanium_dynamic_styles(){
   $titanium_header_image = get_header_image();
   
   $titanium_fsimg = get_theme_mod('titanium_use_featured_image_post', 0);
   
   $titanium_fpimg = get_theme_mod('titanium_use_featured_image_pages', 0);
   
   $titanium_text_color = get_theme_mod('titanium_text_color', '#6d6d6d');
   
   $titanium_header_color = get_theme_mod('titanium_header_color', '#e09b33');
   
   $titanium_header_bg_color = get_theme_mod('titanium_header_bg_color', '#3f3f3f');
   
   $titanium_link_color = get_theme_mod('titanium_link_color', '#0066bf');
   
   $titanium_link_hover_color = get_theme_mod('titanium_link_hover_color', '#2075bf');
   
   $titanium_link_focus_color = get_theme_mod('titanium_link_focus_color', '#116ebf');

   $titanium_link_visited_color = get_theme_mod('titanium_link_visited_color', '#4c89bf');
   
   $titanium_button_color = get_theme_mod('titanium_button_color', '#ffffff');
   
   $titanium_button_bg_color = get_theme_mod('titanium_button_bg_color', '#dd9933');
   
   $titanium_button_hover_color = get_theme_mod('titanium_button_hover_color', '#ddab5f');
   
   $titanium_article_color = get_theme_mod('titanium_article_color', '#ffffff');

   $titanium_nav_color = get_theme_mod('titanium_nav_color', '#ffffff');

   $titanium_nav_link_color = get_theme_mod('titanium_nav_link_color', '#1c1c1c');

   $titanium_nav_link_hover_color = get_theme_mod('titanium_nav_link_hover_color', '#dd9933');

   $titanium_nav_link_focus_color = get_theme_mod('titanium_nav_link_focus_color', '#dd9933');

   $titanium_nav_link_active_color = get_theme_mod('titanium_nav_link_active_color', '#dd9933');

   $titanium_nav_dropdown_color = get_theme_mod('titanium_nav_dropdown_color', '#ffffff');
   
   $titanium_nav_dropdown_icon_color = get_theme_mod('titanium_nav_dropdown_icon_color', '#dd8500');
   
   $titanium_icon_color = get_theme_mod('titanium_icon_color', '#dd9933');
   
   $titanium_others_color = get_theme_mod('titanium_others_color', '#dd9933');
   
   $titanium_hfont = get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif');
   
   $titanium_entryh_trans = get_theme_mod('titanium_header_capitalization', 'capitalize');
   
   $titanium_tfont = get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif');
   
   $titanium_header_text_color = get_header_textcolor();

   if( ( is_single() && $titanium_fsimg == 1 ) || ( is_page() &&  $titanium_fpimg == 1 ) ){
     global $post;
      if( has_post_thumbnail( $post->ID) ){
          $titanium_header_image = esc_url( get_the_post_thumbnail_url( $post->ID, 'full' ) );
         }
   else {
          $titanium_header_image = get_header_image();
        }  
  }
   ?>
  
 <style>
.parralax{
   background-image:url("<?php echo esc_html( $titanium_header_image ); ?>");
   background-attachment:fixed;
   background-size:cover;
   background-repeat:no-repeat;
}

<?php if ( isset($titanium_header_text_color) ){ ?>
.site-title, .site-description{
	clip:auto;
	position: relative;
	color:#<?php echo esc_html( $titanium_header_text_color ); ?>;
}

<?php }  if ( isset($titanium_hfont) ){ ?>
h1,h2,h3,h4,h5,h6,.entry-header,.entry h1,.entry h2,.entry h3,h4,.entry h4,.entry h5,h6,.entry h6,.site-title,.navbar-brand,.site-name,footer h4, aside h4{
    font-family:<?php echo get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif'); ?>;
}

<?php }  if ( isset($titanium_entryh_trans) ){ ?>
.entry-header{
    text-transform:<?php echo esc_html( $titanium_entryh_trans ); ?>;
}

<?php }  if ( isset($titanium_tfont) ){ ?>
li,p,.entry,.entry-summary,.entry-footer,caption,select option,span{
    font-family:<?php echo get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif'); ?>;
}

<?php }  if ( isset($titanium_text_color) ){ ?>
li,p:not(.site-description),.entry,.entry-summary,.entry-footer,caption,select option{
    color:<?php echo esc_html( $titanium_text_color ); ?>;
}

<?php }  if ( isset($titanium_header_color) ){ ?>
h1:not(.site-title),h2,h3,h4,h5,h6,.entry-header,.entry h1 a,.entry h2,.entry h3,h4,.entry h4,.entry h5,h6,.entry h6,footer h4, aside h4{
    color:<?php echo esc_html( $titanium_header_color ); ?>;
}

<?php }  if ( isset($titanium_link_color) ){ ?>
.entry-header a, .entry a, .entry-footer a, .widget .tagcloud a, .commentbox a, footer a, a{
      color:<?php echo esc_html( $titanium_link_color ); ?>;
}

<?php }  if ( isset($titanium_link_hover_color) ){ ?>
.entry-header a:hover, .entry a:hover, .entry-footer a:hover, .widget .tagcloud a:hover, .commentbox a:hover, footer a:hover{
      color:<?php echo esc_html( $titanium_link_hover_color ); ?>;
}

<?php }  if ( isset($titanium_link_focus_color) ){ ?>
.entry-header a:focus, .entry a:focus, .entry-footer a:focus, .widget .tagcloud a:focus, .commentbox a:focus, footer a:focus{
      color:<?php echo esc_html( $titanium_link_focus_color ); ?>;
}

<?php }  if ( isset($titanium_link_visited_color) ){ ?>
.entry-header a:visited, .entry a:visited, .entry-footer a:visited, .widget .tagcloud a:visited, .commentbox a:visited, footer a:visited{
      color:<?php echo esc_html( $titanium_link_visited_color ); ?>;
}

<?php }  if ( isset($titanium_button_color) ){ ?>
button, input[type=button], input[type=reset], input[type=submit], p.form-submit input[type=submit], .btn-custom, .btn-custom:hover, .btn-custom:focus, .btn-custom:active, .open > .dropdown-toggle.btn-info{
  color:<?php echo esc_html( $titanium_button_color ); ?>;
}

<?php }  if ( isset($titanium_button_bg_color) ){ ?>
button, input[type=button], input[type=reset], input[type=submit], p.form-submit input[type=submit], .btn-custom, .btn-custom:hover, .btn-custom:focus, .btn-custom:active, .open > .dropdown-toggle.btn-info{
  background-color:<?php echo esc_html( $titanium_button_bg_color ); ?>;
  border-color:<?php echo esc_html( $titanium_button_bg_color ); ?>;
}
.form-control:focus{
   box-shadow: inset 0 1px 1px <?php echo esc_html( $titanium_button_bg_color ); ?>,0 0 8px <?php echo esc_html( $titanium_button_bg_color ); ?>;
  -webkit-box-shadow: inset 0 1px 1px <?php echo esc_html( $titanium_button_bg_color ); ?>,0 0 8px <?php echo esc_html( $titanium_button_bg_color ); ?>;
}

<?php }  if ( isset($titanium_button_hover_color) ){ ?>
button:hover, input[type=button]:hover, input[type=reset]:hover, .btn-info:hover, input[type=submit]:hover , p.form-submit input[type=submit]:hover, button:focus, p.form-submit input[type=submit]:focus, input[type=button]:focus, input[type=reset]:focus, input[type=submit]:focus, button:active, input[type=button]:active, input[type=reset]:active, input[type=submit]:active, .btn-info:focus, .btn-info.focus, .btn-info:active, .btn-info.active, .open > .dropdown-toggle.btn-info:hover{
  background-color:<?php echo esc_html( $titanium_button_hover_color ); ?>;
  border-color:<?php echo esc_html( $titanium_button_hover_color ); ?>;
} 

<?php }  if ( isset($titanium_article_color) ){ ?>
.boxed, table td, table th, .pager-1{
  background-color:<?php echo esc_html( $titanium_article_color ); ?>;
} 

<?php }  if ( isset($titanium_nav_color) ){ ?>
.navbar-custom{
  background-color:<?php echo esc_html( $titanium_nav_color ); ?>;
}

<?php }  if ( isset($titanium_nav_link_color) ){ ?>
.navbar-custom .navbar-nav > li  a, .navbar-custom .navbar-brand{
  color:<?php echo esc_html( $titanium_nav_link_color ); ?>;
}

<?php }  if ( isset($titanium_nav_link_hover_color) ){ ?>
.navbar-custom .navbar-nav > li  a:hover, .navbar-custom .navbar-brand:hover{
  color:<?php echo esc_html( $titanium_nav_link_hover_color ); ?>;
}

<?php }  if ( isset($titanium_nav_link_focus_color) ){ ?>
.navbar-custom .navbar-nav > li  a:focus, .navbar-custom .navbar-brand:focus{
  color:<?php echo esc_html( $titanium_nav_link_focus_color ); ?>;
}

<?php }  if ( isset($titanium_nav_link_active_color) ){ ?>
.navbar-custom .navbar-nav > li  a:active, .navbar-custom .navbar-brand:active{
  color:<?php echo esc_html( $titanium_nav_link_active_color ); ?>;
}

<?php }  if ( isset($titanium_nav_dropdown_color) ){ ?>
.navbar-custom .navbar-nav > .open > .dropdown-menu{
  background-color:<?php echo esc_html( $titanium_nav_dropdown_color ); ?>;
}

<?php }  if ( isset($titanium_nav_dropdown_icon_color) ){ ?>
 .navbar-custom .navbar-toggle .icon-bar{
  background-color:<?php echo esc_html( $titanium_nav_dropdown_icon_color ); ?>;
}

<?php }  if ( isset($titanium_icon_color) ){ ?>
i.fa:not(button.fa-search), .widget ul > li::before, .entry-meta i{
	color:<?php echo esc_html( $titanium_icon_color ); ?>;
}

<?php }  if ( isset($titanium_others_color) ){ ?>
.pager-1 li > a, .excerpt{
	border-color:<?php echo esc_html( $titanium_others_color ); ?>;
}

hr{
	background-color:<?php echo esc_html( $titanium_others_color ); ?>;
}

<?php } if ( isset($titanium_header_bg_color) ){ ?>
.jumbotron{
	background-color:<?php echo esc_html( $titanium_header_bg_color ); ?>;
}
<?php }

 if( !is_customize_preview() ){
?>
@media screen and ( min-width:480px){
body.admin-bar .navbar-fixed-top{
	top:28px !important; 
}
}
<?php } ?>
 </style>
     
 <?php 
 }
add_action('wp_head','titanium_dynamic_styles'); ?>