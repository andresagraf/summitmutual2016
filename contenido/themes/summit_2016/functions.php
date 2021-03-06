<?php
/**
 * summit_2016 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package summit_2016
 */

if ( ! function_exists( 'summit_2016_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function summit_2016_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on summit_2016, use a find and replace
	 * to change 'summit_2016' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'summit_2016', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'summit_2016' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'summit_2016_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'summit_2016_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function summit_2016_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'summit_2016_content_width', 640 );
}
add_action( 'after_setup_theme', 'summit_2016_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function summit_2016_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'summit_2016' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'summit_2016_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function summit_2016_scripts() {
	wp_enqueue_style( 'summit_2016-style', get_stylesheet_uri() );

	wp_enqueue_script( 'summit_2016-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'summit_2016-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'summit_2016_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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



// ACF Option Page
if(function_exists('acf_add_options_page') && function_exists('acf_add_options_sub_page')) {
	include('functions/acf-option-page.php');
}

include('functions/custom_post.php');

//Soporte thumbnails
add_theme_support( 'post-thumbnails' );

//si existe la categoria

function if_categoty($categoria_a_buscar){

	$respuesta = false;

	foreach(get_the_category() as $categoria){
		//print_r($categoria);
		if($categoria->slug == $categoria_a_buscar){
			$respuesta = true;
		}
	}

	return $respuesta;
}


//URL
function url_actual(){
	echo $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}

add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    include_once('acf-date_time_picker/acf-date_time_picker.php');
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('cenefa-menu',__( 'Cenefa Menu' ));
}
add_action( 'init', 'register_my_menu' );


/*categorias calendario*/

/*************************************************************************************/

add_action( 'init', 'create_book_taxonomies', 0 );
function create_book_taxonomies() {

	$labels = array(
		'name'              => _x( 'Dias', 'taxonomy general name' ),
		'singular_name'     => _x( 'Dia', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar Dias' ),
		'all_items'         => __( 'All Dias' ),
		'parent_item'       => __( 'Parent Dia' ),
		'parent_item_colon' => __( 'Parent Dia:' ),
		'edit_item'         => __( 'Edit Dia' ),
		'update_item'       => __( 'Update Dia' ),
		'add_new_item'      => __( 'Add New Dia' ),
		'new_item_name'     => __( 'New Dia Name' ),
		'menu_name'         => __( 'Dia' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'dia' ),
	);

	register_taxonomy( 'dia', array( 'calendario' ), $args );


};

add_image_size( 'speaker-listado', 130, 130, true ); // Hard Crop Mode
add_image_size( 'speaker-single', 303, 339, true ); // Soft Crop Mode
add_image_size( 'speaker-mischarlas', 310, 363 , true); // Unlimited Height Mode
