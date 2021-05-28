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
    <header class="_aty-site-header">
        <div class="_aty-full-wrapper">
            <div class="_aty-block _aty-3 _aty-primary-logo">

                <?php
                $siteLogo = get_theme_mod('custom_logo');
                $logoImg = ($siteLogo) ?  wp_get_attachment_image_src($siteLogo, 'full')[0] : ARTICELY_URL . '/assets/img/logo.svg';
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="_aty-href" rel="home"><img src="<?php echo esc_url($logoImg); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="_aty-img"></a>
                <!-- /._aty-href -->
            </div>
            <!-- /._aty-block._aty-primary-logo -->
            <div class="_aty-block _aty-8 _aty-header-menu-wrapper">
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
            <div class="_aty-block _aty-search-block _aty-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13 8h-8v-1h8v1zm0 2h-8v-1h8v1zm-3 2h-5v-1h5v1zm11.172 12l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z" />
                </svg>
            </div>
            <!-- /._aty-block._aty-search-block -->
        </div>
        <!-- /._aty-wrapper -->
        <div class="_aty-mobile-bar">
            <div class="_aty-menu-toggler-icon">
                <svg fill="#e71d25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <path class="path" d="M55.657,33.158H44.343c-2.114,0-3.845,1.516-3.845,3.369c0,1.852,1.73,3.368,3.845,3.368h11.314  c2.114,0,3.845-1.517,3.845-3.368C59.502,34.674,57.771,33.158,55.657,33.158z"></path>
                    <path class="path" d="M55.657,60.104H44.343c-2.114,0-3.845,1.517-3.845,3.368c0,1.853,1.73,3.369,3.845,3.369h11.314  c2.114,0,3.845-1.517,3.845-3.369C59.502,61.621,57.771,60.104,55.657,60.104z"></path>
                    <path class="path" d="M65.663,46.632H34.337c-2.114,0-3.845,1.516-3.845,3.368s1.73,3.368,3.845,3.368h31.326  c2.114,0,3.845-1.516,3.845-3.368S67.777,46.632,65.663,46.632z"></path>
                    <path class="path" d="M50,5C25.187,5,5,25.188,5,50s20.187,45,45,45s45-20.188,45-45S74.813,5,50,5z M50,89.719  c-21.901,0-39.72-17.817-39.72-39.719S28.099,10.281,50,10.281S89.72,28.099,89.72,50S71.901,89.719,50,89.719z"></path>
                </svg>
            </div>
            <!-- /._aty-menu-toggler-icon -->
            <div class="_aty-mobile-search-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13 8h-8v-1h8v1zm0 2h-8v-1h8v1zm-3 2h-5v-1h5v1zm11.172 12l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z" />
                </svg>
            </div>
            <!-- /._aty-mobile-search-icon -->
        </div>
        <!-- /._aty-mobile-bar -->
    </header>
    <!-- /._aty-site-header -->
    <section class="_aty-space-section">
    </section>
    <!-- /._aty-space-section -->