<?php
/**
 * Titanium functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Titanium
 *
 * @since Titanium 1.0
 */

if ( ! function_exists( 'titanium_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 * @since Titanium 1.0
 */
function titanium_setup() {
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
    * @since Titanium 1.0
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    * @since Titanium 1.0
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'titanium' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
    * @since Titanium 1.0
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'titanium_custom_background_args', array(
		'default-color' => 'f5f5f5',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'titanium_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Titanium 1.0
 */
function titanium_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'titanium_content_width', 640 );
}
add_action( 'after_setup_theme', 'titanium_content_width', 0 );

    /*
	 * Enable theme support for custom logo
	 */
	 function titanium_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ); 
    add_theme_support( 'custom-logo', $defaults ); }
    add_action( 'after_setup_theme', 'titanium_custom_logo_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @since Titanium 1.0
 */
function titanium_widgets_init() {
      register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'titanium' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here', 'titanium' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s container-fluid">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4><hr>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'titanium' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here. Please only one widget.', 'titanium' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s container-fluid">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4><hr>',
	) );
register_sidebar( array(
		'name'          => esc_html__( ' Footer Sidebar 2 ', 'titanium' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here. Please. only one widget.', 'titanium' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s container-fluid">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4><hr>',
	) );
register_sidebar( array(
		'name'          => esc_html__( ' Footer Sidebar 3 ', 'titanium' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here. Please only one widget.', 'titanium' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s container-fluid">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4><hr>',
	) );
register_sidebar( array(
		'name'          => esc_html__( ' Footer Sidebar 4 ', 'titanium' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add widgets here. Please only one widget.', 'titanium' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s container-fluid">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4><hr>',
	) );
}
add_action( 'widgets_init', 'titanium_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since Titanium 1.0
 */
function titanium_scripts() {
	wp_enqueue_style( 'titanium-style', get_stylesheet_uri(), array('bootstrap') );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', '3.6.0' );
    if ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Baloo Bhaina\',cursive')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Baloo Bhaina\',cursive') ) {
         wp_enqueue_style( 'baloo-google-fonts', 'https://fonts.googleapis.com/css?family=Baloo+Bhaina');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Indie Flower\',cursive')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Indie Flower\',cursive') ) {
         wp_enqueue_style( 'indie-google-fonts', 'https://fonts.googleapis.com/css?family=Indie+Flower');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Ranga\',cursive')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Ranga\',cursive') ) {
         wp_enqueue_style( 'ranga-google-fonts', 'https://fonts.googleapis.com/css?family=Ranga');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Dosis\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Dosis\',san-serif') ) {
         wp_enqueue_style( 'dosis-google-fonts', 'https://fonts.googleapis.com/css?family=Dosis');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Lato\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Lato\',san-serif') ) {
         wp_enqueue_style( 'lato-google-fonts', 'https://fonts.googleapis.com/css?family=Lato');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Poppins\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Poppins\',san-serif') ) {
         wp_enqueue_style( 'poppings-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Roboto Condensed\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Roboto Condensed\',san-serif') ) {
         wp_enqueue_style( 'roboto-condensed-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Ubuntu\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Ubuntu\',san-serif') ) {
         wp_enqueue_style( 'ubuntu-google-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Montserrat\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Montserrat\',san-serif') ) {
         wp_enqueue_style( 'montserrat-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Raleway\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Raleway\',san-serif') ) {
         wp_enqueue_style( 'raleway-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Roboto\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Roboto\',san-serif') ) {
         wp_enqueue_style( 'roboto-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Spirax\',cursive')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Spirax\',cursive') ) {
         wp_enqueue_style( 'spirax-google-fonts', 'https://fonts.googleapis.com/css?family=Spirax');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Open Sans\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Open Sans\',san-serif') ) {
         wp_enqueue_style( 'open-sans-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Maconda\',cursive')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Maconda\',cursive') ) {
         wp_enqueue_style( 'maconda-google-fonts', 'https://fonts.googleapis.com/css?family=Maconda');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Merriweather\',serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Merriweather\',serif') ) {
         wp_enqueue_style( 'merriweather-google-fonts', 'https://fonts.googleapis.com/css?family=Merriweather');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Open Sans Condensed\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Open Sans Condensed\',san-serif') ) {
         wp_enqueue_style( 'open-sans-condensed-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Palanquin Dark\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Palanquin Dark\',san-serif') ) {
         wp_enqueue_style( 'palanquin-dark-google-fonts', 'https://fonts.googleapis.com/css?family=Palanquin+Dark');
    }
    elseif ( ( get_theme_mod('titanium_header_fonts', '\'Montserrat\',san-serif') === '\'Titillium Web\',san-serif')
     || ( get_theme_mod('titanium_text_fonts', '\'Lato\',san-serif') == '\'Titillium Web\',san-serif') ) {
         wp_enqueue_style( 'titilium-web-google-fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web');
    }
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), true );	
    wp_enqueue_script( 'titanium-html5shiv', get_template_directory_uri() . '/assets/js/html5shiv.js', array(), false );   
       wp_script_add_data( 'titanium-html5shiv', 'conditional', 'lt IE 9' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'titanium_scripts' );

/**
 * Reduce excerpt lenght to 20 words and link to page.
 *
 * @since Titanium 1.0
 */

  function titanium_excerpt_length( $length ) {
   if( is_admin() ) { return $length; }
   return get_theme_mod( 'titanium_excerpt_number',35 );
}
 add_filter('excerpt_length','titanium_excerpt_length', 999);

  function titanium_excerpt_more( $more ) {
  if( is_admin() ) { return $more; }
  return '...<br><br><a class="excerpt" href=" '.esc_url( get_permalink() ).' "> '.__('Continue...','titanium').'</a>';
 }
 add_filter('excerpt_more','titanium_excerpt_more',999);

/**
 * Custom functions that act independently of the theme templates.
 *
 * @since Titanium 1.0
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Implement the Custom Header feature.
 *
 * @since Titanium 1.0 
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Customizer additions.
 *
 * @since Titanium 1.0
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add the bootstrap nav-menu walker.
 *
 * @since Titanium 1.0
 */
  require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
  
/**
 * Add the dynamic styles.
 *
 * @since Titanium 1.0
 */
  require get_template_directory() . '/inc/styles.php';

