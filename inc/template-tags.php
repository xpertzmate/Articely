<?php

/**
 * Custom template tags for this theme
 *
 * @package WordPress
 * @subpackage Articely
 * @since Articely 1.0
 */

if (!function_exists('articely_posted_on')) {
    /**
     * Prints HTML with meta information for the current post-date/time.
     *
     * @since Articely 1.0
     *
     * @return void
     */
    function articely_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date())
        );

        echo wp_sprintf('<img src="%s" alt="_aty-icon" class="_aty-img" /><span class="posted-on">', esc_url(ARTICELY_URL . "/assets/img/calendar-icon.png"));
        printf(
            /* translators: %s: Publish date. */
            esc_html__('Published On %s', 'articely'),
            $time_string // phpcs:ignore WordPress.Security.EscapeOutput
        );
        echo '</span>';
    }
}

if (!function_exists('articely_posted_by')) {
    /**
     * Prints HTML with meta information about theme author.
     *
     * @since Articely 1.0
     *
     * @return void
     */
    function articely_posted_by()
    {
        if (!get_the_author_meta('description') && post_type_supports(get_post_type(), 'author')) {
            echo wp_sprintf('<img src="%s" alt="_aty-icon" class="_aty-img" /><span class="byline">', esc_url(ARTICELY_URL . "/assets/img/user-icon.png"));
            printf(
                /* translators: %s: Author name. */
                esc_html__('By %s', 'articely'),
                '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" rel="author">' . esc_html(get_the_author()) . '</a>'
            );
            echo '</span>';
        }
    }
}
