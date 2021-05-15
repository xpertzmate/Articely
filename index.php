<?php

/**
 * Template For Blog List
 */

get_header();
?>

<section class="_aty-section">
    <?php if (have_posts()) : ?>
        <div class="_aty-wrapper" data-id="_aty-articles-wrapper">
            <?php
            $layout = 'head';
            while (have_posts()) : the_post();

                get_template_part('/template-parts/post/layout', $layout);

                $layout = ($layout == 'head') ? 'tail' : 'head';

            endwhile;
            ?>
        </div>
        <!-- /._aty-wrapper -->
        <div class="_aty-load-more">
            <div class="_aty-box-button-holder _aty-btn-secondary _aty-load-more-btn" id="_aty-load-more-btn">
                <div class="_aty-box-frame"></div>
                <a href="#" class="_aty-href">
                    <label>Load More</label><img src="<?php echo ARTICELY_URL . '/assets/img/arrow-1.svg'; ?>" alt="Read More" class="_aty-box-arrow _aty-link-arrow">
                </a>
            </div>

        </div>
        <!-- /._aty-load-more -->
    <?php
    else :

    endif;
    ?>
</section>
<!-- /._aty-section -->
<?php

get_footer();
