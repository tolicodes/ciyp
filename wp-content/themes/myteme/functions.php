<?php
/**
 * semplicemente functions and definitions
 *
 * @package semplicemente
 */
 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 702;
}

if ( ! function_exists( 'semplicemente_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function semplicemente_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on semplicemente, use a find and replace
	 * to change 'semplicemente' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'semplicemente', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'normal-post' , 720, 9999);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'semplicemente' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'semplicemente_custom_background_args', array(
		'default-color' => 'f2f2f2',
		'default-image' => '',
	) ) );
}
endif; // semplicemente_setup
add_action( 'after_setup_theme', 'semplicemente_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function semplicemente_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'semplicemente' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'semplicemente_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function semplicemente_scripts() {
	wp_enqueue_style( 'semplicemente-style', get_stylesheet_uri() );
	wp_enqueue_style( 'semplicemente-fontAwesome', get_template_directory_uri() .'/css/font-awesome.min.css');
	wp_enqueue_style( 'semplicemente-googlefonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');

	wp_enqueue_script( 'semplicemente-custom', get_template_directory_uri() . '/js/jquery.semplicemente.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'semplicemente-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	global $wp_scripts;
	wp_enqueue_script( 'semplicemente-html5shiv', get_template_directory_uri() . '/js/html5.js', array(), '3.7.2', false );
	$wp_scripts->add_data( 'semplicemente-html5shiv', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'semplicemente_scripts' );

/**
 * Replace more Excerpt
 */
function semplicemente_new_excerpt_more($more) {
       global $post;
	return ' ...';
}
add_filter('excerpt_more', 'semplicemente_new_excerpt_more');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Semplicemente Dynamic.
 */
require get_template_directory() . '/inc/semplicemente-dynamic.php';

add_filter( 'wp-tiles-data', 'wp_tiles_custom_date_formatting', 10, 2 );
function wp_tiles_custom_date_formatting( $tiles, $posts ) {
    $post = reset( $posts );
    foreach ( $tiles as &$tile ) {
        list( $month, $day, $year ) = array(
            mysql2date( 'M', $post->post_date ),
            mysql2date( 'd', $post->post_date ),
            mysql2date( 'Y', $post->post_date )
        );

        $formatted_date =
            "<span class='month'>$month</span>
             <span class='day'>$day</span>
             <span class='year'>$year</span>";

        $tile['byline'] = $formatted_date;
        $post = next( $posts );
    }
    return $tiles;
}