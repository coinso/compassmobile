<?php
/**
 * compassmobile functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package compassmobile
 */

if ( ! function_exists( 'compassmobile_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function compassmobile_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on compassmobile, use a find and replace
		 * to change 'compassmobile' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'compassmobile', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary'               => esc_html__( 'Mobile Primary', 'compassmobile' ),
			'footersitemap'         => esc_html__( 'Mobile footer', 'compassmobile' ),
			'secondary'             => esc_html__( 'Mobile Secondary', 'compassmobile' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'compassmobile_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'compassmobile_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function compassmobile_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'compassmobile_content_width', 640 );
}
add_action( 'after_setup_theme', 'compassmobile_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function compassmobile_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'compassmobile' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'compassmobile' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-12">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'compassmobile_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function compassmobile_scripts() {
    wp_enqueue_style('compassmobile-base', get_stylesheet_directory_uri() . '/assets/css/base.min.css', array(), microtime(), 'all');
    wp_enqueue_style('compassmobile-fa5', get_stylesheet_directory_uri() . '/assets/lib/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css', array(), microtime(), 'all');
    wp_enqueue_style('compassmobile-bootstrap', get_stylesheet_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css', array(), microtime(), 'all');
    wp_enqueue_style('compassmobile-bootstrap-theme', get_stylesheet_directory_uri() . '/assets/lib/bootstrap/css/bootstrap-theme.min.css', array(), microtime(), 'all');
    wp_enqueue_style('compassmobile-jasny-bootstrap', get_stylesheet_directory_uri() . '/assets/lib/jasny-bootstrap/css/jasny-bootstrap.min.css', array(), microtime(), 'all');
	wp_enqueue_style( 'compassmobile-style', get_stylesheet_uri() );

	wp_enqueue_script( 'compassmobile-bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'compassmobile-jasny-bootstrap', get_template_directory_uri() . '/assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'compassmobile-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), '20151215', true );

	wp_enqueue_script( 'compassmobile-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'compassmobile_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Require Constant file
 */
require get_template_directory() . '/inc/const.php';

/**
 * @return string|void
 *  Require Customizer settings file
 */
require get_template_directory() . '/inc/mobile_customizer.php';


function compassmobile_custom_logo(){
	$logo = get_bloginfo('name');
	if( get_theme_mod('site_logo') ){
		if( !wp_is_mobile() ){

			$logo = '<img src="'.get_theme_mod('site_logo').'" alt="'.get_bloginfo('name').'" class="logo"/>';
		}else{
			$logo = '<img src="'.get_theme_mod('mobile_logo').'" alt="'.get_bloginfo('name').'" class="logo"/>';
		}

	}

	return $logo;
}