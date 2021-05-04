<?php

/**
 * Template For Blog List
 */

get_header();


if (have_posts()) :

    while (have_posts()) : the_post();
?>
        <section class="_aty-section _aty-page">
            <dev class="_aty-wrapper">
                <header class="_aty-page-header">
                    <h1 class="entry-title">
                    </h1>
                    <!-- /.entry-title -->
                </header>
                <!-- /._aty-page-header -->

                <div class="entry-content">

                </div>
                <!-- /.entry-content -->

                <footer class="_aty-page-footer">
                </footer>
                <!-- /._aty-page-footer -->

            </dev>
            <!-- /._aty-wrapper -->

        </section>
        <!-- /._aty-section._aty-page -->
<?php
    endwhile;
endif;

get_footer();
