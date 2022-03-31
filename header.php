<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="NXRAZpCYJF7h-bA-v6fi9iGBk-IkgJlrTnGAqibEWwM" />
    <?php articely_favicon(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="aty__block-wrapper _header">
        <div class="container">
            <div class="aty__logo">
                <?php articely_logo(); ?>
            </div>
            <div class="_menu _mobile-nav">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav class="aty__nav">
            <div class="aty__navigation">
                <div class="aty__logo">
                    <?php articely_logo(); ?>
                </div>
                <div class="_close"><img src="<?php echo ATY_URL ?>build/images/close.png" alt=""></div>
                <?php wp_nav_menu(array('menu' => 'nav', 'items_wrap' => '<ul id="%1$s" class="main">%3$s</ul>')); ?>
            </div>
        </nav>

    </header>
    <!-- end header -->