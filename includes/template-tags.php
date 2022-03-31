<?php

/* Theme Font URL */
function articely_font_url()
{
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'Laila:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Sumana:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Amita:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Laila:400,400i,500,500i,600,600i,700,700i';
	$query_args = array(
		'family'	=> rawurlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
}

/**
 * Site Logo
 */
function articely_logo()
{

	$siteLogoUrl = ATY_URL . 'build/images/logo.svg';
	echo wp_sprintf('<a class="logo" href="%s"><img src="%s" alt="%s" /></a>', esc_url(home_url("/")), $siteLogoUrl, get_bloginfo("name"));
}

/**
 * Site Logo
 */
function articely_favicon()
{
	$siteFavIconUrl = ATY_URL . 'build/images/favicon.png';
	echo wp_sprintf('<link rel="shortcut icon" href="%s" type="image/x-icon"><link rel="icon" href="%s" type="image/x-icon">', $siteFavIconUrl, $siteFavIconUrl);
}

/**
 * Header Banner
 */
function articely_hero_banner()
{

	// if (is_single()) :
	// 	$heroBanner =  get_the_post_thumbnail_url(get_the_ID(), 'full');
	// else :
	// 	$heroBanner = wp_get_attachment_image_url(carbon_get_theme_option('aty_banner'), "full");
	// endif;
	// return $heroBanner;
}

/**
 * Footer Logo
 */
function articely_footer_logo()
{
	$siteLogoUrl = ATY_URL . 'build/images/logo-white.svg';
	echo wp_sprintf('<a class="aty__footer-logo" href="%s"><img class="aty__footer-logo--img" src="%s" alt="%s" /></a>', esc_url(home_url("/")), $siteLogoUrl, get_bloginfo("name"));
}

/**
 * Footer Copyright
 */
function articely_copyright()
{
	echo '';
}


/**
 * Link all post thumbnails to the post permalink.
 *
 * @param string $html          Post thumbnail HTML.
 * @param int    $post_id       Post ID.
 * @param int    $post_image_id Post image ID.
 * @return string Filtered post image HTML.
 */
function articely_post_thumbnail($html, $post_id, $post_image_id)
{
	$title = esc_attr(get_the_title($post_id));
	if (empty($html)) :
		$html = '<a href="' . get_permalink($post_id) . '" title="' . $title . '"><img width="1200" height="628" src="' . ATY_URL . 'build/images/blogDefault.jpg" class="attachment-post-thumbnail size-post-full wp-post-image" alt="' . $title . '" ></a>';
	else :
		$html = '<a href="' . get_permalink($post_id) . '" title="' . $title . '">' . $html . '</a>';
	endif;
	return $html;
}
add_filter('post_thumbnail_html', 'articely_post_thumbnail', 10, 3);

/**
 * Post Thumbnail URL
 */
function articely_post_thumbnail_url($post_id)
{
	$thumbnailUrl = get_the_post_thumbnail_url($post_id, 'full');
	return (empty($thumbnailUrl)) ? ATY_URL . 'build/images/blogDefault.jpg' : $thumbnailUrl;
}
