<?php

/**
 * Template For Blog List
 */

get_header();
?>

<section class="_aty-section">
    <?php if (have_posts()) : ?>
        <dev class="_aty-wrapper" data-id="_aty-articles-wrapper">
            <?php while (have_posts()) : the_post(); ?>

            <?php endwhile; ?>
        </dev>
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
