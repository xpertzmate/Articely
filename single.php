<?php

/**
 * Template For Blog List
 */

get_header();


if (have_posts()) :

    while (have_posts()) : the_post();
?>
        <section class="_aty-section _aty-article-page">
            <article class="_aty-wrapper">
                <header class="_aty-article-header center _aty-12">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <!-- /.entry-title -->
                    <div class="_aty-category-list"><?php the_category('<span class="sep">|</span>'); ?></div>
                    <!-- /._aty-category-list -->

                    <div class="_aty-seprator">
                        <span class="_aty-bar">&nbsp;</span>
                    </div>
                    <!-- /._aty-seprator -->

                    <figure class="_aty-featured-img">
                        <?php
                        if (has_post_thumbnail()) :
                            the_post_thumbnail('full', ['class' => 'img-responsive responsive--full _aty-img']);
                        endif;
                        ?>
                    </figure>
                    <!-- /._aty-featured-img -->

                    <div class="_aty-meta-info">
                        <div class="_aty-author"><img src="<?php echo ARTICELY_URL . "/assets/img/user-icon.svg"; ?>" alt="_aty-user-icon" class="_aty-img" /> <?php the_author(); ?></div>
                        <!-- /._aty-author -->
                        <div class="_aty-pub-date"> <img src="<?php echo ARTICELY_URL . "/assets/img/calendar-icon.svg"; ?>" alt="_aty-user-icon" class="_aty-img" /> <time datetime="<?php the_date(); ?>"><?php the_date(); ?></time></div>
                        <!-- /._aty-pub-date -->
                    </div>
                    <!-- /._aty-meta-info -->

                </header>
                <!-- /._aty-article-header -->

                <div class="entry-content"><?php the_content(); ?></div>
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
