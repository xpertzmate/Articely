<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="_aty-site-header clearfix">
        <div class="_aty-wrapper">
            <div class="_aty-block _aty-3">
                <div class="_aty-primary-logo">
                    <?php
                    $siteLogo = get_theme_mod('custom_logo');
                    $logoImg = ($siteLogo) ?  wp_get_attachment_image_src($siteLogo, 'full')[0] : ARTICELY_URL . '/assets/img/logo.svg';
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="_aty-href" rel="home"><img src="<?php echo esc_url($logoImg); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="_aty-img"></a>
                    <!-- /._aty-href -->
                </div>
                <!-- /._aty-primary-logo -->
                <div class="_aty-secondary-logo"><a href="https://www.xpertzmate.com" target="_blank" class="_aty-href"><img src="<?php echo ARTICELY_URL . '/assets/img/xpertzmate.svg'; ?>" alt="XpertzMate" class="_aty-img"></a>
                    <!-- /._aty-href -->
                </div>
                <!-- /._aty-secondary-logo -->
            </div>
            <!-- /._aty-block -->
            <div class="_aty-block _aty-7">
                <?php
                wp_nav_menu([
                    'container' => false,
                    'menu_id' => 'header-menu',
                    'menu_class' => '_aty-header-menu',
                    'theme_location' => 'header'
                ]);
                ?>
            </div>
            <!-- /._aty-block -->
            <div class="_aty-block _aty-2">
                <div class="_aty-search-block">
                </div>
                <!-- /._aty-search-block -->
            </div>
            <!-- /._aty-block -->
        </div>
        <!-- /._aty-wrapper -->
    </header>
    <!-- /._aty-site-header -->