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
        <div class="_aty-wrapper flex">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13 8h-8v-1h8v1zm0 2h-8v-1h8v1zm-3 2h-5v-1h5v1zm11.172 12l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z" />
                    </svg>
                </div>
                <!-- /._aty-search-block -->
            </div>
            <!-- /._aty-block -->
        </div>
        <!-- /._aty-wrapper -->
        <div class="_aty-wrapper" data-id="_aty-search-box">
            <?php get_search_form(); ?>
        </div>
        <!-- /._aty-wrapper -->
    </header>
    <!-- /._aty-site-header -->