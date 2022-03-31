<?php

/**
 * Template Name: Contact Us
 */
get_header();
if (have_posts()) :
?>
    <section class="aty__block-wrapper aty__banner--inner" style="background-image: url(<?php echo ATY_URL ?>build/images/ContactUs.jpg);">
        <div class="container">
            <div class="row">
                <div class="inner-heading">
                    <h1>Contact us</h1>
                    <p>we are glad to serve you!!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="aty__block-wrapper contact-details aty__gutter-space aty__bg--white">
        <div class="container">
            <div class="row">
                <div class="aty__heading--with-line">
                    <h2>Get in touch</h2>
                </div>
                <div class="get-touch-section">
                    <form class="aty__form--block">
                        <div class="aty__form--block--left">
                            <div class="aty__form--block--field">
                                <label for="username">Name<sup>*</sup></label>
                                <input type="text" name="username" id="username" class="aty__field--txt" required>
                            </div>
                            <div class="aty__form--block--field">
                                <label for="useremail">Email<sup>*</sup></label>
                                <input type="email" name="useremail" id="useremail" class="aty__field--mail" required>
                            </div>
                            <div class="aty__form--block--field">
                                <label for="">Phone<sup>*</sup></label>
                                <input type="tel" name="userphone" id="userphone" class="aty__field--phone" required>
                            </div>
                            <div class="aty__form--block--field">
                                <label for="enquirytype">Type of Enquiry<sup>*</sup></label>
                                <input type="tel" name="enquirytype" id="enquirytype" class="aty__field--txt" required>
                            </div>
                        </div>
                        <div class="aty__form--block--left">
                            <div class="aty__form--block--field">
                                <label for="usermessage">Message<sup>*</sup></label>
                                <textarea name="usermessage" id="usermessage" class="aty__field--txtarea"></textarea>
                            </div>
                            <div class="aty__form--block--field">
                                <div class="btn">
                                    <div class="aty__box--frame"></div>
                                    <button>Send message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
get_footer();
