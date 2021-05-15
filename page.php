<?php

/**
 * Template For Blog List
 */

get_header();


if (have_posts()) :

    while (have_posts()) : the_post();
?>
        <section class="_aty-section _aty-page">
            <div class="_aty-wrapper">
                <header class="_aty-page-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <!-- /.entry-title -->
                    <span class="_aty-bar">&nbsp;</span>
                </header>
                <!-- /._aty-page-header -->

                <div class="entry-content py4">
                    <?php the_content(); ?>
                </div>
                <!-- /.entry-content -->
            </div>
            <!-- /._aty-wrapper -->
        </section>
        <!-- /._aty-section._aty-page -->
<?php
    endwhile;
endif;

get_footer();
