<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if (have_posts()) :

    // Load posts loop.
    while (have_posts()) :
        the_post();
?>

        <section class="aty__block-wrapper aty__banner--inner" style="background-image: url(<?php echo articely_post_thumbnail_url(get_the_ID()); ?>);">
            <div class="container">
                <div class="row">
                    <div class="inner-heading">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="aty__block-wrapper blog-details aty__gutter-space aty__bg--white">
            <div class="container">
                <div class="row">
                    <div class="aty__story--content blog-detail">
                        <div class="aty__story--content--inner">
                            <?php the_content(); ?>
                        </div>
                        <!-- /.aty__story--content--inner -->
                    </div>
                    <div class="aty__story--sidebar">
                        <aside class="aty__also-read">
                            <?php articely_get_recent_stories(); ?>
                        </aside>
                        <!-- /.aty__also-read -->
                    </div>
                </div>
            </div>
        </section>
<?php
    endwhile;
endif;

get_footer();
