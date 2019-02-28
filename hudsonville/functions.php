<?php
/**
 * hudsonville functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hudsonville
 */

if ( ! function_exists( 'hudsonville_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hudsonville_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hudsonville, use a find and replace
		 * to change 'hudsonville' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hudsonville', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'hudsonville' ),
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
		add_theme_support( 'custom-background', apply_filters( 'hudsonville_custom_background_args', array(
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
add_action( 'after_setup_theme', 'hudsonville_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hudsonville_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hudsonville_content_width', 640 );
}
add_action( 'after_setup_theme', 'hudsonville_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hudsonville_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hudsonville' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hudsonville' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hudsonville_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hudsonville_scripts() {
	wp_enqueue_style( 'hudsonville-style', get_stylesheet_uri() );

	// here we bring tachyons into our theme and load it
	wp_enqueue_style( 'hudsonville-tachyons',  get_template_directory_uri() . '/css/tachyons.css');
	// we load our custom css file
	wp_enqueue_style( 'hudsonville-custom',  get_template_directory_uri() . '/css/custom.css');
	// here we load barba.js from our js folder
	wp_enqueue_script('hudsonville-barba', get_template_directory_uri() . '/js/barba.js');
	// here we load our script file using jquery alongside it
	wp_enqueue_script('hudsonville-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
	}

add_action( 'wp_enqueue_scripts', 'hudsonville_scripts' );

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

function nice_date($date) {
	echo date("M d, Y", strtotime($date));
}

$menu_name = 'header-menu';
if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $menu_list = '';
    $count = 0;
    $submenu = false;$cpi=get_the_id();
    foreach( $menu_items as $current ) {
        if($cpi == $current->object_id ){if ( !$current->menu_item_parent ) {$cpi=$current->ID;}else{$cpi=$current->menu_item_parent;}$cai=$current->ID;break;}
    }
    foreach( $menu_items as $menu_item ) {
        $link = $menu_item->url;
        $title = $menu_item->title;
        $menu_item->ID==$cai ? $ac2=' current_menu' : $ac2='';
        if ( !$menu_item->menu_item_parent ) {
            $parent_id = $menu_item->ID;$parent_id==$cpi ? $ac=' current_item' : $ac='';
            if(!empty($menu_items[$count + 1]) && $menu_items[ $count + 1 ]->menu_item_parent == $parent_id ){//Checking has child
                $menu_list .= '<li class="dropdown has_child'.$ac.'"><a href="'.$link.'" class="dropdown-toggle'.$ac2.'" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="nav-span"></span>'.$title.'<span class="caret"></span></a>';
            }else{
                $menu_list .= '<li class="'.$ac.'">' ."\n";$menu_list .= '<a href="'.$link.'" class="'.$ac2.'">'.$title.'</a>' ."\n";
            }
             
        }
        if ( $parent_id == $menu_item->menu_item_parent ) {
            if ( !$submenu ) {
                $submenu = true;
                $menu_list .= '<ul class="dropdown-menu">' ."\n";
            }
            $menu_list .= '<li class="item">' ."\n";
            $menu_list .= '<a href="'.$link.'" class="'.$ac2.'">'.$title.'</a>' ."\n";
            $menu_list .= '</li>' ."\n";
            if(empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu){
                $menu_list .= '</ul>' ."\n";
                $submenu = false;
            }
        }
        if (empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
            $menu_list .= '</li>' ."\n";      
            $submenu = false;
        }
        $count++;
    }
} else {
    $menu_list = '<li>Menu "' . $menu_name . '" not defined.</li>';
}


