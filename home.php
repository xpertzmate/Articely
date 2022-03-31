<?php

/**
 * Template Name: Blog
 */
get_header();
if (have_posts()) :
?>
    <section class="aty__block-wrapper aty__banner--inner" style="background-image: url(<?php echo ATY_URL ?>build/images/blog.jpg);">
        <div class="container">
            <div class="row">
                <div class="inner-heading">
                    <h1>Blog Archive</h1>
                    <p>A directory of wonderful things</p>
                </div>
            </div>
        </div>
    </section>
    <section class="aty__block-wrapper blog-page aty__gutter-space aty__bg--white">
        <div class="container">
            <div class="row">
                <div class="aty__stories--list">
                    <?php while (have_posts()) : the_post(); ?>


                        <!--start-->
                        <div class="aty__grid">
                            <div class="aty__grid--image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="description">
                                <div class="aty__story--meta">
                                    <div class="aty__story--meta--date"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></div>
                                    <div class="aty__story--meta--author"><?php printf(esc_html__('By %s', 'articely'), get_the_author()); ?></div>
                                </div>
                                <!-- /.aty__story--meta -->
                                <h3 class="aty__story--title"><?php the_title(); ?></h3>
                                <div class="btn _primary">
                                    <div class="aty__box--frame"></div>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
get_footer();
