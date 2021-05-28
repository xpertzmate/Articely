<article <?php post_class('_aty-article py4 _aty-head'); ?> id="_aty-article-<?php the_ID(); ?>">
    <div class="_aty-block _aty-featured-block _aty-6 my2">
        <figure class="_aty-featured-img">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('full', ['class' => 'img-responsive responsive--full _aty-img']); ?>
                </a>
            <?php endif; ?>
        </figure>
        <!-- /._aty-featured-img -->
    </div>
    <!-- /._aty-block._aty-featured-block -->
    <div class="_aty-block _aty-content-block _aty-6 my2">
        <div class="_aty-category-list"><?php the_category('<span class="sep">|</span>'); ?></div>
        <!-- /._aty-category-list -->
        <h2 class="entry-title">
            <?php the_title(); ?>
            <span class="_aty-bar">&nbsp;</span>
            <!-- /._aty-bar -->
        </h2>
        <!-- /.entry-title -->
        <div class="entry-excerpt">
            <?php the_excerpt(); ?>
        </div>
        <!-- /.entry-excerpt -->
        <div class="_aty-read-more">

            <div class="_aty-box-button-holder _aty-btn-primary">
                <div class="_aty-box-frame"></div>
                <a href="<?php the_permalink(); ?>" class="_aty-href">
                    <label>Read More</label><img src="<?php echo ARTICELY_URL . '/assets/img/arrow-2.svg'; ?>" alt="Read More" class="_aty-box-arrow _aty-link-arrow">
                </a>
            </div>
        </div>
        <!-- /._aty-read-more -->
    </div>
    <!-- /._aty-block._aty-content-block -->
</article>
<!-- /._aty-article -->