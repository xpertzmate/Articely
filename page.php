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

        <section class="aty__-primary-wrapper py-60">
            <div class="container">
                <div class="row">
                    <div class="col col--lg-8 m-auto">
                        <div class="aty__-entry-content">
                            <?php the_content(); ?>
                        </div>
                        <!-- /.aty__-entry-content -->
                    </div>

                </div>
            </div>
        </section>
<?php
    endwhile;
endif;

get_footer();
