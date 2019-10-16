<?php
/**
 * cityband functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cityband
 */

if ( ! function_exists( 'cityband_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cityband_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cityband, use a find and replace
		 * to change 'cityband' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cityband', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Заголовок ', 't' ),
		) );

        if (function_exists('add_theme_support')) {
            add_theme_support('menus');
        }

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
		add_theme_support( 'custom-background', apply_filters( 'cityband_custom_background_args', array(
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
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cityband_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cityband_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cityband' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cityband' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cityband_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cityband_scripts() {
	wp_enqueue_style( 'cityband-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cityband-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cityband-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('jquery3.4.1', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_script('bootstrapJs', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('mdBootstrapJs', get_template_directory_uri() . '/assets/js/mdb.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cityband_scripts' );

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


/*---------------------CITY_BAND--------------------*/
use Carbon_Fields\Container;
use Carbon_Fields\Field;

//подключаем carbon-fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

//регистрируем свои поля carbon-fields из папки inc/custom-fields/*
add_action('carbon_fields_register_fields', 'ast_register_custom_fields');
function ast_register_custom_fields(){
    require get_template_directory() . '/inc/custom-fields/theme-options.php';
    require get_template_directory() . '/inc/custom-fields/pages-controller.php';
}

add_filter('nav_menu_css_class', 'cityband_filter_current_item_li', 10, 4);
function cityband_filter_current_item_li( $classes, $item) {
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_link_attributes', 'cityband_filter_nav_menu_link_attributes', 10, 4);
function cityband_filter_nav_menu_link_attributes($atts, $item, $args, $depth){
    $atts['class'] .= 'nav-link';
    $atts['class'] .= ' text-center';

    if ($item->current){
        $atts['class'] .= 'active';
    }

    return $atts;
}

add_filter('nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3);
function filter_nav_menu_submenu_css_class($classes, $args, $depth){
    if($args->theme_location === "top") {
        $classes = [
            'dropdown-menu'
        ];


    }

    return $classes;
}

add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if ( $args->theme_location == 'top') {
        $items .=  '<button class="btn btn-primary my-2 my-sm-0 Register-new-account coolis overflow-hidden d-md-none d-lg-none d-xl-none align-self-center" style="position: relative; right: 0; top:0; {
        
        }"  type="submit"><span>+7 (905) 585-28-29</span></button>';
    }
    return $items;
}


//add_filter( 'wp_nav_menu_objects', 'wp_nav_menu_objects_filter', 10, 2 );
//function wp_nav_menu_objects_filter( $sorted_menu_items, $args ) {
//    if ( 'top' !== $args->menu ) {
//        return $sorted_menu_items;
//    }
//
//    $items        = array();
//    $current_item = null;
//
//    foreach ( $sorted_menu_items as $item ) {
//        if ( $current_item && intval( $item->menu_item_parent ) === $current_item ) {
//            $items[] = $item;
//            continue;
//        }
//
//        if ( in_array( 'current-menu-item', $item->classes, true ) ) {
//            $current_item = $item->ID;
//             $items[]      = $item;
//            continue;
//        }
//    }
//
//    return $items;
//}
