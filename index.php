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
            <label class="_aty-load-more-btn" id="_aty-load-more-btn">Load More</label>
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
