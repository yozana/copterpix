<?php

/**
 * copterpix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package copterpix
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function copterpix_setup()
{
    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on copterpix, use a find and replace
		* to change 'copterpix' to the name of your theme in all the template files.
		*/
    load_theme_textdomain('copterpix', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
    add_theme_support('title-tag');

    /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'copterpix'),
        )
    );

    /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'copterpix_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'copterpix_setup');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function copterpix_content_width()
{
    $GLOBALS['content_width'] = apply_filters('copterpix_content_width', 1200);
}
add_action('after_setup_theme', 'copterpix_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function copterpix_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'copterpix'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'copterpix'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'copterpix_widgets_init');

function connvisor_widget_content() {    
    echo "<div><img src=" . get_stylesheet_directory_uri() .  "/assets/images/connvisor-logo-small.png></div><ul>
    <li>Owner Name: Connvisor Digital Group</li>
    <li>Website: <a href='https://connvisor.com/'>https://connvisor.com</a></li>    
    <li>Contact us: +972 (0)73 3744200</li>
    </ul>";
}
function connvisor_add_dashboard_widgets() {
    wp_add_dashboard_widget('owner_dashboard_widget', 'Owner Information', 'connvisor_widget_content');
}
add_action('wp_dashboard_setup', 'connvisor_add_dashboard_widgets' );

function connvisor_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/connvisor-logo-small.png);
height:84px;
width:320px;
background-size: 320px 84px;
background-repeat: no-repeat;        
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'connvisor_login_logo' );

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

/**
 * Enqueue scripts and styles.
 */
function copterpix_scripts()
{
    wp_enqueue_style('copterpix-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/slick/slick/slick.css', array(), '1.0.0');    
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/slick/slick/slick-theme.css', array(), '1.0.0');    
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0');
    
    

    wp_enqueue_style('copterpix-main-stylesheet-css', get_template_directory_uri() . '/assets/css/copterpix-main.css', array(), '1.0.0');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/97fe704a65.js',array(), _S_VERSION, true);	
    


    wp_enqueue_script('copterpix-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('copterpix-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);
    //wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);
    
    
    wp_enqueue_script('bootstrap-bundle-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('jquery-validate-min-js', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('copterpix-custom-js', get_template_directory_uri() . '/assets/js/copterpix-custom.js', array(), _S_VERSION, true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/slick/slick/slick.min.js', array(), _S_VERSION, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'copterpix_scripts');

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}



/**
 * Custom post types and related to admin function
 */

require get_template_directory() . '/inc/custom-posttypes.php';


/**
 * copterpix Custom functions hooks and filters
 */

require get_template_directory() . '/inc/custom-functions.php';
add_action('template_redirect', function () {

});
