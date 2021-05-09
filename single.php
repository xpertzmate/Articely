<?php

/**
 * Template For Blog List
 */

get_header();


if (have_posts()) :

    while (have_posts()) : the_post();
?>
        <section class="_aty-section _aty-article">
            <article class="_aty-wrapper">
                <header class="_aty-article-header">
                    <h1 class="entry-title">
                    </h1>
                    <!-- /.entry-title -->
                    <ul class="_aty-category-list"></ul>
                    <!-- /._aty-category-list -->

                    <span class="_aty-bar">&nbsp;</span>

                    <figure class="_aty-featured-img">
                    </figure>
                    <!-- /._aty-featured-img -->

                    <div class="_aty-meta-info">
                        <div class="_aty-author">
                        </div>
                        <!-- /._aty-author -->
                        <div class="_aty-pub-date">
                        </div>
                        <!-- /._aty-pub-date -->
                    </div>
                    <!-- /._aty-meta-info -->

                </header>
                <!-- /._aty-article-header -->

                <div class="entry-content">

                </div>
                <!-- /.entry-content -->

                <footer class="_aty-article-footer">

                    <div class="_aty-navigation">
                        <div class="_aty-previous-post">
                        </div>
                        <!-- /._aty-previous-post -->
                        <div class="_aty-next-post"></div>
                        <!-- /._aty-next-post -->
                    </div>
                    <!-- /._aty-navigation -->

                    <div class="_aty-related-articles">

                        <div class="_aty-related-wrapper">
                            <div class="_aty-block">
                                <figure class="_aty-featured-image"></figure>
                                <!-- /._aty-featured-image -->
                                <h3 class="entry-title"></h3>
                                <!-- /.entry-title -->
                                <div class="_aty-meta-info">
                                    <div class="_aty-author">
                                    </div>
                                    <!-- /._aty-author -->
                                    <div class="_aty-pub-date">
                                    </div>
                                    <!-- /._aty-pub-date -->
                                </div>
                                <!-- /._aty-meta-info -->
                            </div>
                            <!-- /._aty-block -->
                        </div>
                        <!-- /._aty-related-wrapper -->

                    </div>
                    <!-- /._aty-related-articles -->
                </footer>
                <!-- /._aty-article-footer -->

            </article>
            <!-- /._aty-wrapper -->

        </section>
        <!-- /._aty-section._aty-article -->
<?php
    endwhile;
endif;

get_footer();
