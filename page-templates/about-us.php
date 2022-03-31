<?php
/**
* Template Name: about Us
*/
get_header();
if (have_posts()) :
?>
<section class="aty__block-wrapper aty__banner--inner" style="background-image: url(<?php echo ATY_URL ?>build/images/about-banner.png);">
    <div class="container">
        <div class="row">
            <div class="inner-heading">
                <h1>About us heading here.</h1>
                <p>Lorem ipsum is placeholder text commonly used in the graphic..</p>
            </div>
        </div>
    </div>
</section>
<section class="aty__block-wrapper blog-details about-content-with-image aty__gutter-space aty__bg--white">
     <div class="container">
        <div class="row">
          <div class="aty__story--content">
                  <div class="aty__heading--with-line">
                    <h2>About Company</h2>
                 </div>
                <p>We are local family owned investors who actively invest in Real Estate.</p>
                <p>
                    We have done thousands of transactions and understand the process of selling a house, which might be the hardest transaction for a family.
                </p>
               
                <p>
                    We want to facilitate that process for you. We have bought houses traditionally, probate, divorce, inherited, extensive repairs, job relocation, tax liens, pre-foreclosure, bad tenants, and unforeseen reasons.
                </p> 
                <ul>
                <li> We have done thousands of transactions and understand the process of selling</li>
                 <li> We have done thousands of understand the process of selling</li>
                  <li> We have done thousands of transactions andselling</li>
                </ul>
                <p>
                We want to make this process as smooth as possible, working around your time frame and terms that work mutually for both parties. We have extended experience in real estate and will guide you throughout the process as we do what we believe is the best for you, putting your interest before ours. We look forward to talking to you and making this process a smooth one for you and your family.
            </p>
            <div class="left-right-content">
            <div class="left-right-section">
               <div class="_content-about">
                <h5>rking around your time frame and terms</h5>
                <h3>We have extended experience in real estate</h3>
                     <p>
                      We want to make this process as smooth as possible, working around your time frame and terms that work mutually for both parties. We have extended experience in real estate and will guide you throughout the process as we do what we believe is the best for you, putting your interest before ours. We look forward to talking to you and making this process a smooth one for you and your family.
                      </p>
               </div> 
                <div class="_image">
                   <img src="<?php echo ATY_URL ?>build/images/img.jpg" alt="">
               </div> 
            </div>
           </div>
           <div class="left-right-content">
            <div class="left-right-section aty__reverse-box">
               <div class="_content-about">
                <h5>rking around your time frame and terms</h5>
                <h3>We have extended experience in real estate</h3>
                     <p>
                      We want to make this process as smooth as possible, working around your time frame and terms that work mutually for both parties. We have extended experience in real estate and will guide you throughout the process as we do what we believe is the best for you, putting your interest before ours. We look forward to talking to you and making this process a smooth one for you and your family.
                      </p>
               </div> 
                <div class="_image">
                   <img src="<?php echo ATY_URL ?>build/images/img2.jpg" alt="">
               </div> 
            </div>
           </div>
          </div>
     </div>
   </div>
</section>
<?php
endif;
get_footer();