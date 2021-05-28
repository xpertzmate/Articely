<?php

if (!defined('ARTICELY_URL')) :
    define('ARTICELY_URL', get_template_directory_uri());
endif;

if (!defined('ARTICELY_PATH')) :
    define('ARTICELY_PATH', get_template_directory());
endif;

/**
 * Function for debugging
 */
if (!function_exists('_debug')) :
    function _debug($data,  $die = false)
    {
        echo "<pre class='_articely_debug_data'>";
        print_r($data);
        echo "</pre>";

        ($die) ? die : '';
    }
endif;

/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage Articely
 * @since Articely 1.0
 */

if (!function_exists('articely_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     */
    function articely_setup()
    {

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
        add_theme_support('title-tag');

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');


        register_nav_menus(
            array(
                'header' => esc_html__('Header menu', 'iac'),
                'footer'  => __('Footer menu', 'iac'),
            )
        );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo');

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for editor styles.
        add_theme_support('editor-styles');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for custom line height controls.
        add_theme_support('custom-line-height');

        // Add support for experimental link color control.
        add_theme_support('experimental-link-color');
    }
}
add_action('after_setup_theme', 'articely_setup');


/**
 * Enqueue scripts and styles.
 *
 * @since Articely 1.0
 *
 * @return void
 */
function articely_scripts()
{

    wp_enqueue_style('articely-fonts', 'https://fonts.googleapis.com/css2?family=Harmattan:wght@400;700&family=Literata:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false);


    wp_enqueue_style('articely-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('articely-app', ARTICELY_URL . '/assets/css/global.min.css', array(), strtotime('now'));

    if (is_single()) :
        wp_enqueue_style('articely-article', ARTICELY_URL . '/assets/css/article.min.css', array(), strtotime('now'));
    endif;

    // wp_enqueue_script('iac-modernizr-script', ARTICELY_URL . '/assets/js/modernizr.js', array('jquery'), wp_get_theme()->get('Version'), true);
    // wp_enqueue_script('iac-vender-script', ARTICELY_URL . '/assets/js/vendor.js', array('jquery'), wp_get_theme()->get('Version'), true);
    // wp_enqueue_script('iac-script', ARTICELY_URL . '/assets/js/app.js', array('jquery'), wp_get_theme()->get('Version'), true);
    // wp_localize_script(
    // 	'iac-script',
    // 	'iacData',
    // 	[
    // 		'ajaxurl' => admin_url('admin-ajax.php'),
    // 		'security' =>  wp_create_nonce('iac-security'),
    // 		'loginRedirect' =>  esc_url(home_url('/'))
    // 	]
    // );
}
add_action('wp_enqueue_scripts', 'articely_scripts');

/**
 * Calculate classes for the main <html> element.
 *
 * @since Articely 1.0
 *
 * @return void
 */
function articely_the_html_classes()
{
    $classes = apply_filters('articely_html_classes', '');
    if (!$classes) {
        return;
    }
    echo 'class="' . esc_attr($classes) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Articely 1.0
 *
 * @return void
 */
function articely_add_ie_class()
{
?>
    <script>
        if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
            document.body.classList.add('is-IE');
        }
    </script>
<?php
}
add_action('wp_footer', 'articely_add_ie_class');


/**
 * Allow SVG File Upload
 */

function articely_allow_img_types($mimes)
{

    $mimes['svg']  = 'image/svg';
    return $mimes;
}

add_filter('upload_mimes', 'articely_allow_img_types');



/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
add_filter('excerpt_length', function () {
    return 50;
}, 999);


/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
add_filter('excerpt_more', function () {

    return '';
});


/**
 * Add preconnect for Google Fonts.
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */

add_filter('wp_resource_hints', function ($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}, 10, 2);

//Template Tags
require_once ARTICELY_PATH . "/inc/template-tags.php";
