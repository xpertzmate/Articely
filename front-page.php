<?php

/**
 * Template Name: Front Page
 */
get_header();
if (have_posts()) :
?>
    <section class="aty__block-wrapper aty__hero--block" style="background-image: url(<?php echo ATY_URL; ?>build/images/hero-banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="aty__hero--content-block">
                    <h1 class="aty__hero--heading">Sariska : Roaring like a Tiger</h1>
                    <p class="aty__hero--txt-block">जंगल जंगल ढूंढ रहा मृग, अपनी ही कस्तूरी को, कितना मुश्किल है तय करना, खुद से खुद की दूरी को.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="aty__block-wrapper aty__weoffer aty__gutter-space aty__text--center aty__bg--white">
        <div class="container">
            <div class="row">
                <div class="aty__weoffer--content-block">
                    <div class="aty__weoffer--subheading">What we offer</div>
                    <h2 class="aty__weoffer--heading"><strong>Nothing Special ! </strong> <br /> <label> but we are spreading our knowledge about historical places and nature.</label> </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="aty__block-wrapper aty__squarespace aty__gutter-space _top-padding-none aty__text--center aty__bg--white">
        <figure class="aty__squarespace--img">
            <img src="<?php echo ATY_URL ?>build/images/sariskanationalpark.jpg" alt="Sariska Tiger Reserve">
        </figure>
        <div class="container">
            <div class="row">
                <div class="grid-noBottom">
                    <div class="aty__squarespace--description">
                        <div class="panel aty__squarespace--br--lb">
                            <h5>On what we Pride</h5>
                            <h2>Sariska Tiger Reserve</h2>
                            <p>Sariska Tiger Reserve or Sariska National Park is well nestled in the Aravali Hills, with beauty of grasslands, dry deciduous forests, sheer cliffs and rocky landscape. Whether you want to have tiger safari, go out for shopping in the surrounding places, visit medieval palaces or wildlife watching; Sariska Wildlife Sanctuary is the best place for you. </p>
                            <div class="btn">
                                <div class="aty__box--frame"></div>
                                <a href="<?php echo home_url("/blog"); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aty__block-wrapper aty__squarespace aty__reverse aty__gutter-space _top-padding-none aty__text--center aty__bg--white">
        <figure class="aty__squarespace--img">
            <img src="<?php echo ATY_URL ?>build/images/bhangharfort.jpg" alt="Places - Historical and Spiritual">
        </figure>
        <div class="container">
            <div class="row">
                <div class="grid-noBottom">
                    <div class="aty__squarespace--description">
                        <div class="panel aty__squarespace--br--rb">
                            <h5>what we are exploring</h5>
                            <h2>Places - Historical and Spiritual</h2>
                            <p>Sariska tiger reserve has its own spiritual and historical value. Kankwari Fort and Bhangarh Fort have medieval era history. Bhartrihari Temple and Neelkanth Mahadev Temple and Pandupol temple have ancient era spirituality.It has a ancient 27 feet statue of Mahavir Swami</p>
                            <div class="btn">
                                <div class="aty__box--frame"></div>
                                <a href="<?php echo home_url("/blog"); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aty__block-wrapper aty__contribute  aty__gutter-space _top-padding-none aty__text--center aty__bg--white">
        <div class="container">
            <div class="row">
                <div class="aty__contribute--overlay">
                    <div class="_icon-img">
                        <img src="<?php echo ATY_URL ?>build/images/contributor.png" alt="">
                    </div>
                    <h4>How to become a Contributor</h4>
                </div>
                <div class="_about-content-mid">
                    <div class="mid-content">
                        <p>If you want to contribute or join our journy drop us an email at family@articely.com with your data , we will review your content and post on website with your details.</p>
                        <div class="btn _primary">
                            <div class="aty__box--frame"></div>
                            <a href="mailto:family@articely.com">Contribute</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
get_footer();
