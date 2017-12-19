<?php
/**
 * Titanium Theme Customizer
 *
 * @package Titanium 
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function titanium_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'custom_logo' )->transport = 'refresh';

/**
 * Social Icons
 *
 * @since 1.0
*/
/*----------------------------------SETTINGS----------------------------------*/
$wp_customize->add_setting( 'titanium_show_icons', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => 0,
  'sanitize_callback' => 'titanium_sanitize_checkbox',
  'transport' => 'refresh' ) );

$wp_customize->add_setting( 'titanium_facebook_id', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
  'transport' => 'refresh' ) );
 

$wp_customize->add_setting( 'titanium_twitter_id', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
  'transport' => 'refresh' ) );
 

$wp_customize->add_setting( 'titanium_instagram_id', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
  'transport' => 'refresh' ) );
 
$wp_customize->add_setting( 'titanium_googleplus_id', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
  'transport' => 'refresh' ) );
 
$wp_customize->add_setting( 'titanium_linkedin_id', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
  'transport' => 'refresh' ) );
 

  $wp_customize->add_setting( 'titanium_wordpress_id', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
  'transport' => 'refresh' ) );
 
/*--------------------------------SECTION------------------------------------*/

$wp_customize->add_section( 'titanium_social_icons', array(
  'title' => __( 'Social', 'titanium' ),
  'description' => __( 'Add your social details here', 'titanium' ),
  'panel' => '',
  'priority' => 105,
  'capability' => 'edit_theme_options',
) );

/*--------------------------------CONTROLS------------------------------------*/

$wp_customize->add_control('titanium_show_icons', array(
   'type' => 'checkbox',
   'priority' => 10,
   'section' => 'titanium_social_icons',
   'label' => __('Show Icons ?', 'titanium'),
  ) );

$wp_customize->add_control('titanium_facebook_id', array(
   'type' => 'text',
   'priority' => 20,
   'section' => 'titanium_social_icons',
   'label' => __('Facebook', 'titanium'),
   'description' => __('Add your Facebook profile ID', 'titanium'), ) );

$wp_customize->add_control('titanium_twitter_id', array(
   'type' => 'text',
   'priority' => 30,
   'section' => 'titanium_social_icons',
   'label' => __('Twitter', 'titanium'),
   'description' => __('Add your Twitter profile ID', 'titanium'), ) );

$wp_customize->add_control('titanium_instagram_id', array(
   'type' => 'text',
   'priority' => 40,
   'section' => 'titanium_social_icons',
   'label' => __('Instagram ', 'titanium'),
   'description' => __('Add your Instagram profile ID', 'titanium'), ) );

$wp_customize->add_control('titanium_googleplus_id', array(
   'type' => 'text',
   'priority' => 50,
   'section' => 'titanium_social_icons',
   'label' => __('Google Plus', 'titanium'),
   'description' => __('Add your Google Plus profile ID', 'titanium'), ) );

$wp_customize->add_control('titanium_linkedin_id', array(
   'type' => 'text',
   'priority' => 60,
   'section' => 'titanium_social_icons',
   'label' => __('LinkedIn', 'titanium'),
   'description' => __('Add your LinkedIn profile ID', 'titanium'), ) );

 $wp_customize->add_control('titanium_wordpress_id', array(
   'type' => 'text',
   'priority' => 70,
   'section' => 'titanium_social_icons',
   'label' => __('Wordpress', 'titanium'),
   'description' => __('Add your WordPress profile ID', 'titanium'), ) );

/**
 * Add footer tagline
 * @since 1.0
 */
/*----------------------------------SETTINGS----------------------------------*/
$wp_customize->add_setting( 'titanium_footer_tagline', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field',
  'transport' => 'postMessage' ) );

/*--------------------------------CONTROLS------------------------------------*/

$wp_customize->add_control('titanium_footer_tagline', array(
   'type' => 'text',
   'priority' => 30,
   'section' => 'title_tagline',
   'label' => __('Footer Tagline', 'titanium'),
  ) );

/**
 * Jumbotron Panel 
 *
 * @since 1.0
*/
/*-------------------------SETTINGS FOR POST SETTINGS-------------------------*/

$wp_customize->add_setting( 'titanium_use_featured_image_post', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => 0,
  'sanitize_callback' => 'titanium_sanitize_checkbox',
  'transport' => 'refresh' ) );

/*-------------------------SETTINGS FOR PAGE SETTINGS-------------------------*/

$wp_customize->add_setting( 'titanium_use_featured_image_pages', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => 0,
  'sanitize_callback' => 'titanium_sanitize_checkbox',
  'transport' => 'refresh' ) );

/*----------------------CONTROLS FOR POST SETTINGS----------------------------*/

$wp_customize->add_control('titanium_use_featured_image_post', array(
   'type' => 'checkbox',
   'priority' => 20,
   'section' => 'titanium_post_settings',
   'label' => __('Use Featured image as header image in single post?', 'titanium'),
  ) );

/*----------------------CONTROLS FOR PAGE SETTINGS----------------------------*/

$wp_customize->add_control('titanium_use_featured_image_pages', array(
   'type' => 'checkbox',
   'priority' => 20,
   'section' => 'titanium_page_settings',
   'label' => __('Use Featured image as header image in pages?', 'titanium'),
  ) );


/*--------------------------------SECTION------------------------------------*/

$wp_customize->add_section( 'titanium_post_settings', array(
  'title' => __( 'Post Header Settings', 'titanium' ),
  'description' => __( 'Congifure your post jumbotron setting', 'titanium' ),
  'panel' => 'titanium_header_settings',
  'priority' => 10,
) );

$wp_customize->add_section( 'titanium_page_settings', array(
  'title' => __( 'Page Header Settings', 'titanium' ),
  'description' => __( 'Congifure your post jumbotron setting', 'titanium' ),
  'panel' => 'titanium_header_settings',
  'priority' => 20,
) );

$wp_customize->get_section( 'header_image' )->panel = 'titanium_header_settings';

$wp_customize->get_section( 'header_image' )->priority = 30;

/*-----------------------------------PANEL------------------------------------*/


$wp_customize->add_panel( 'titanium_header_settings',
    array(
        'priority'          => 80,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'Header Image Settings ', 'titanium' ),
        'description'       => __( 'Control various options for header image for posts and pages', 'titanium' ),
    )
);

/**
 * Fonts Panel 
 *
 * @since 1.0
*/
/*------------------------SETTINGS FOR HEADER SETTINGS------------------------*/

$wp_customize->add_setting( 'titanium_header_fonts', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '\'Montserrat\',san-serif',
  'sanitize_callback' => 'titanium_sanitize_select',
  'transport' => 'refresh' ) );

$wp_customize->add_setting( 'titanium_header_capitalization', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => 'capitalize',
  'sanitize_callback' => 'titanium_sanitize_select',
  'transport' => 'refresh' ) );

/*------------------------SETTINGS FOR TEXT SETTINGS------------------------*/

$wp_customize->add_setting( 'titanium_text_fonts', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '\'Lato\',san-serif',
  'sanitize_callback' => 'titanium_sanitize_select',
  'transport' => 'refresh' ) );


/*---------------------CONTROLS FOR HEADER SETTINGS---------------------------*/

$wp_customize->add_control('titanium_header_fonts', array(
   'type' => 'select',
   'priority' => 10,
   'section' => 'titanium_header_font_settings',
   'label' => __('Headers Font', 'titanium'),
   'choices' => array(
        '\'Baloo Bhaina\',cursive' => __('Baloo Bhaina','titanium'),
        '\'Indie Flower\',cursive' => __('Indie Flower','titanium'),
        '\'Ranga\',cursive' => __('Ranga','titanium'),
        '\'Dosis\',san-serif' => __('Dosis','titanium'),
        '\'Lato\',san-serif' => __('Lato','titanium'),
        '\'Poppins\',san-serif' => __('Poppins','titanium'),
        '\'Roboto Condensed\',san-serif' => __('Roboto Condensed','titanium'),
        '\'Ubuntu\',san-serif' => __('Ubuntu','titanium'),
        '\'Montserrat\',san-serif' => __('Montserrat','titanium'),
        '\'Raleway\',san-serif' => __('Raleway','titanium'),
        '\'Roboto\',san-serif' => __('Roboto','titanium'),
        '\'Spirax\',cursive' => __('Spirax','titanium'),
        '\'Open Sans\',san-serif' => __('Open Sans','titanium'),
        '\'Maconda\',cursive' => __('Maconda','titanium'),
        '\'Merriweather\',serif' => __('Merriweather','titanium'),
        '\'Open Sans Condensed\',san-serif' => __('Open Sans Condensed','titanium'),
        '\'Palanquin Dark\',san-serif' => __('Palanquin Dark','titanium'),
        '\'Titillium Web\',san-serif' => __('Titillium Web','titanium')
),
  ) );

$wp_customize->add_control('titanium_header_capitalization', array(
   'type' => 'select',
   'priority' => 20,
   'section' => 'titanium_header_font_settings',
   'label' => __('Entry Header Transform', 'titanium'),
   'choices' => array(
        'capitalize' => __('Capitalize','titanium'),
        'lowercase' => __('Lowercase','titanium'),
        'uppercase' => __('Uppercase','titanium'),
),
  ) );

/*-----------------------CONTROLS FOR TEXT SETTINGS---------------------------*/

$wp_customize->add_control('titanium_text_fonts', array(
   'type' => 'select',
   'priority' => 10,
   'section' => 'titanium_text_font_settings',
   'label' => __('Text Font', 'titanium'),
   'choices' => array(
        '\'Baloo Bhaina\',cursive' => __('Baloo Bhaina','titanium'),
        '\'Indie Flower\',cursive' => __('Indie Flower','titanium'),
        '\'Ranga\',cursive' => __('Ranga','titanium'),
        '\'Dosis\',san-serif' => __('Dosis','titanium'),
        '\'Lato\',san-serif' => __('Lato','titanium'),
        '\'Poppins\',san-serif' => __('Poppins','titanium'),
        '\'Roboto Condensed\',san-serif' => __('Roboto Condensed','titanium'),
        '\'Ubuntu\',san-serif' => __('Ubuntu','titanium'),
        '\'Montserrat\',san-serif' => __('Montserrat','titanium'),
        '\'Raleway\',san-serif' => __('Raleway','titanium'),
        '\'Roboto\',san-serif' => __('Roboto','titanium'),
        '\'Spirax\',cursive' => __('Spirax','titanium'),
        '\'Open Sans\',san-serif' => __('Open Sans','titanium'),
        '\'Maconda\',cursive' => __('Maconda','titanium'),
        '\'Merriweather\',serif' => __('Merriweather','titanium'),
        '\'Open Sans Condensed\',san-serif' => __('Open Sans Condensed','titanium'),
        '\'Palanquin Dark\',san-serif' => __('Palanquin Dark','titanium'),
        '\'Titillium Web\',san-serif' => __('Titillium Web','titanium')
),
  ) );


/*--------------------------------SECTION------------------------------------*/

$wp_customize->add_section( 'titanium_header_font_settings', array(
  'title' => __( 'Header Font', 'titanium' ),
  'description' => __( 'Congifure your header font setting', 'titanium' ),
  'panel' => 'titanium_font_settings',
  'priority' => 10,
) );

$wp_customize->add_section( 'titanium_text_font_settings', array(
  'title' => __( 'Text Font', 'titanium' ),
  'description' => __( 'Congifure your text setting', 'titanium' ),
  'panel' => 'titanium_font_settings',
  'priority' => 20,
) );


/*-----------------------------------PANEL------------------------------------*/


$wp_customize->add_panel( 'titanium_font_settings',
    array(
        'priority'          => 70,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'Fonts', 'titanium' ),
    )
);

/**
 * Sidebar layout 
 *
 * @since 1.0
*/
/*----------------------------------SETTINGS----------------------------------*/
$wp_customize->add_setting( 'titanium_sidebar_poition', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => 'right',
  'sanitize_callback' => 'titanium_sanitize_select',
  'transport' => 'refresh' ) );
  
$wp_customize->add_setting( 'titanium_excerpt_number', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => 35,
  'sanitize_callback' => 'sanitize_text_field',
  'transport' => 'refresh' ) );

/*-------------------------------CONTROLS-------------------------------------*/

$wp_customize->add_control('titanium_sidebar_poition', array(
   'type' => 'select',
   'priority' => 20,
   'section' => 'titanium_settings',
   'label' => __('Sidebar Position', 'titanium'),
   'choices' => array(
        'right' => __('Right','titanium'),
        'left' => __('Left','titanium'),
),
  ) );
  
$wp_customize->add_control('titanium_excerpt_number', array(
   'type' => 'text',
   'priority' => 35,
   'section' => 'titanium_settings',
   'label' => __('No. of words in excerpt', 'titanium')
  ) );

/*--------------------------------SECTION------------------------------------*/

$wp_customize->add_section( 'titanium_settings', array(
  'title' => __( 'Additional Settings', 'titanium' ),
  'panel' => '',
  'priority' => 115,
  'capability' => 'edit_theme_options',
) );

/**
 * Color Theme 
 *
 * @since 1.0.2
*/
/*----------------------------------SETTINGS----------------------------------*/
$wp_customize->add_setting( 'titanium_text_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#6d6d6d',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );

$wp_customize->add_setting( 'titanium_header_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#e09b33',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );
  
$wp_customize->add_setting( 'titanium_header_bg_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#3f3f3f',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );
  
$wp_customize->add_setting( 'titanium_link_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#0066bf',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );

$wp_customize->add_setting( 'titanium_link_hover_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#2075bf',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'refresh' ) );

$wp_customize->add_setting( 'titanium_link_focus_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#116ebf',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'refresh' ) );
  
$wp_customize->add_setting( 'titanium_link_visited_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#4c89bf',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'refresh' ) );

$wp_customize->add_setting( 'titanium_button_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#ffffff',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );
  
$wp_customize->add_setting( 'titanium_button_bg_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#dd9933',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );
  
$wp_customize->add_setting( 'titanium_button_hover_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#ddab5f',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'refresh' ) );

$wp_customize->add_setting( 'titanium_article_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#ffffff',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );

$wp_customize->add_setting( 'titanium_nav_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#ffffff',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );

$wp_customize->add_setting( 'titanium_nav_link_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#1c1c1c',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );

$wp_customize->add_setting( 'titanium_nav_link_hover_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#dd9933',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'refresh' ) );

$wp_customize->add_setting( 'titanium_nav_link_focus_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#dd9933',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'refresh' ) );

$wp_customize->add_setting( 'titanium_nav_link_active_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#dd9933',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'refresh' ) );

$wp_customize->add_setting( 'titanium_nav_dropdown_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#ffffff',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );
  
$wp_customize->add_setting( 'titanium_nav_dropdown_icon_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#dd8500',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );

$wp_customize->add_setting( 'titanium_icon_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#dd9933',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );

$wp_customize->add_setting( 'titanium_others_color', array(
  'type' => 'theme_mod',
 'capability' => 'edit_theme_options',
  'default' => '#dd9933',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport' => 'postMessage' ) );
  
/*-------------------------------CONTROLS-------------------------------------*/


$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_text_color', array(
  'label' => __('Text Color', 'titanium'),
  'description' => __('For p, li, span, etc','titanium'),
  'section' => 'colors',
  'priority' => 2,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_header_color', array(
  'label' => __('Header Color', 'titanium'),
  'description' => __('For h1,h2,h3,h4,h5,h6','titanium'),
  'section' => 'colors',
  'priority' => 3,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_header_bg_color', array(
  'label' => __('Header Background Color', 'titanium'),
  'section' => 'titanium_backgrounds_color',
  'priority' => 3,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_link_color', array(
  'label' => __('Links Color', 'titanium'),
  'section' => 'titanium_links_color',
  'priority' => 4,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_link_hover_color', array(
  'label' => __('Link hover Color', 'titanium'),
  'section' => 'titanium_links_color',
  'priority' => 5,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_link_focus_color', array(
  'label' => __('Link focus Color', 'titanium'),
  'section' => 'titanium_links_color',
  'priority' => 6,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_link_visited_color', array(
  'label' => __('Link visited Color', 'titanium'),
  'section' => 'titanium_links_color',
  'priority' => 7,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_button_color', array(
  'label' => __('Buttons Color', 'titanium'),
  'section' => 'titanium_buttons_color',
  'priority' => 8,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_button_bg_color', array(
  'label' => __('Buttons Background Color', 'titanium'),
  'section' => 'titanium_buttons_color',
  'priority' => 9,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_button_hover_color', array(
  'label' => __('Buttons hover Color', 'titanium'),
  'section' => 'titanium_buttons_color',
  'priority' => 9,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_article_color', array(
  'label' => __('Sections Background Color', 'titanium'),
  'section' => 'titanium_backgrounds_color',
  'priority' => 10,
) ) );

$wp_customize->get_control( 'background_color' )->section = 'titanium_backgrounds_color';

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_nav_color', array(
  'label' => __('Navbar Color', 'titanium'),
  'section' => 'titanium_navmenu_color',
  'priority' => 11,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_nav_link_color', array(
  'label' => __('Nav links Color', 'titanium'),
  'section' => 'titanium_navmenu_color',
  'priority' => 12,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_nav_link_hover_color', array(
  'label' => __('Nav links hover Color', 'titanium'),
  'section' => 'titanium_navmenu_color',
  'priority' => 13,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_nav_link_focus_color', array(
  'label' => __('Nav link :focus Color', 'titanium'),
  'section' => 'titanium_navmenu_color',
  'priority' => 14,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_nav_link_active_color', array(
  'label' => __('Nav link active Color', 'titanium'),
  'section' => 'titanium_navmenu_color',
  'priority' => 15,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_nav_dropdown_icon_color', array(
  'label' => __('Navbar dropdown icon Color', 'titanium'),
  'section' => 'titanium_navmenu_color',
  'priority' => 17,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_nav_dropdown_color', array(
  'label' => __('Navbar submenu background Color', 'titanium'),
  'section' => 'titanium_navmenu_color',
  'priority' => 17,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_icon_color', array(
  'label' => __('Icons Color', 'titanium'),
  'section' => 'titanium_misc_color',
  'priority' => 16,
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control (
$wp_customize, 'titanium_others_color', array(
  'label' => __('Other Colors', 'titanium'), 
  'description' => __('For hr, pager, etc','titanium'),
  'section' => 'titanium_misc_color',
  'priority' => 17,
) ) );

/*------------------------SECTION-----------------------------*/
$wp_customize->get_section( 'colors' )->panel = 'titanium_color';
$wp_customize->get_section( 'colors' )->title = esc_html__('Text Colors','titanium');
$wp_customize->get_section( 'colors' )->priority = 1;

$wp_customize->add_section( 'titanium_links_color', array(
  'title' => __( 'Links Color', 'titanium' ),
  'panel' => 'titanium_color',
  'priority' => 2,
  'capability' => 'edit_theme_options',
) );

$wp_customize->add_section( 'titanium_buttons_color', array(
  'title' => __( 'Buttons Color', 'titanium' ),
  'panel' => 'titanium_color',
  'priority' => 3,
  'capability' => 'edit_theme_options',
) );

$wp_customize->add_section( 'titanium_backgrounds_color', array(
  'title' => __( 'Backgrounds Color', 'titanium' ),
  'panel' => 'titanium_color',
  'priority' => 4,
  'capability' => 'edit_theme_options',
) );

$wp_customize->add_section( 'titanium_navmenu_color', array(
  'title' => __( 'NavBar Color', 'titanium' ),
  'panel' => 'titanium_color',
  'priority' => 5,
  'capability' => 'edit_theme_options',
) );

$wp_customize->add_section( 'titanium_misc_color', array(
  'title' => __( 'Misc Colors', 'titanium' ),
  'panel' => 'titanium_color',
  'priority' => 6,
  'capability' => 'edit_theme_options',
) );
/*-----------------------PANEL-------------------------*/
$wp_customize->add_panel( 'titanium_color',
    array(
        'priority'          => 60,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'Colors', 'titanium' ),
    )
);

}
add_action( 'customize_register', 'titanium_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function titanium_customize_preview_js() {
	wp_enqueue_script( 'titanium_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'titanium_customize_preview_js' );

/*----------------------------------SANITIZER---------------------------------*/

if ( ! function_exists( 'titanium_sanitize_checkbox' ) ) {
	/**
	 * Function to sanitize checkboxes
	 *
	 * @param $value
	 *
	 * @return int
	 */
	function titanium_sanitize_checkbox( $value ) {
		if ( $value == 1 ) {
			return 1;
		} else {
			return 0;
		}
	}
}
/**
 *  Sanitize Select
 */
if ( ! function_exists( 'titanium_sanitize_select' ) ) {
	function titanium_sanitize_select( $input ) {
		if ( filter_var( $input, FILTER_SANITIZE_STRING ) ) {
			return $input;
		}
	}
}

