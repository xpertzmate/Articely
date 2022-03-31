<?php

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
                'header' => esc_html__('Header menu', 'articely'),
                'footer'  => __('Footer menu', 'articely'),
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

        //Hide Admin Bar From Frontend
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'articely_setup');

(defined('ATY_URL')) || define('ATY_URL', trailingslashit(get_template_directory_uri()));
(defined('ATY_PATH')) || define('ATY_PATH', trailingslashit(get_template_directory()));
(defined('ATY_SHORTCODE')) || define('ATY_SHORTCODE', trailingslashit(ATY_PATH . '/includes/shortcodes'));


require_once ATY_PATH . 'includes/helpers/index.php';
require_once ATY_PATH . 'includes/template-tags.php';
require_once ATY_PATH . 'includes/shortcodes/index.php';


/**
 * Enqueue scripts and styles.
 * @since Articely 1.0
 *
 * @return void
 */
function articely_scripts()
{

    wp_enqueue_style('aty-fonts', articely_font_url(), [], false);
    wp_enqueue_style('aty-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));


    wp_enqueue_style('load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap', false);

    wp_enqueue_style('aty-app', ATY_URL . 'build/styles/main.css', array(), strtotime('now'));
    wp_enqueue_script('aty-app', ATY_URL . 'build/scripts/build.min.js', array('jquery'), strtotime('now'), true);
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




/**
 * Admin Block CSS
 */
function aty___render_block_style()
{
    echo '<style>
    .wp-block{
        border: 1px solid #c1c1c1;
        padding:5px;
    } 
  </style>';
}
add_action('admin_head', 'aty___render_block_style');



/*Contact form 7 remove span*/
add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);

    return $content;
});
