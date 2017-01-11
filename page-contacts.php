<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <div id="page" role="main">
 <?php

 function get_recent_post($category, $numberposts){
     $cat_id = get_cat_ID($category);
     $args = array( 'numberposts' => $numberposts, 'category' => $cat_id);
     $recent_post = wp_get_recent_posts($args);
     return $recent_post;
 }
 ?>

 <?php do_action( 'foundationpress_before_content' ); ?>
     <section class="about">
         <div class="row">
             <div class="small-12 medium-6 columns">
                 <h2 class="title"><strong>Contact Us</strong></h2>
                 <h3>We welcome <strong>feedback</strong> and <strong>thoughts</strong></h3>
             </div>
             <div class="small-12 medium-6 columns"></div>
         </div>

         <div class="row">
             <?php
             $items = get_recent_post('contact', 2);
             echo  '<div class = "post small-12 large-4 columns">';
             foreach ($items as $item){
                echo  '<div class = "contact-info">';
                echo '<p>'.$item["post_content"].'</p></div>';
             }
             echo '</div>';
             echo '<div class = "post small-12 large-8 columns">';
             echo do_shortcode( '[contact-form-7 id="101" title="Contact form 1"]' );
             echo '</div>'
             ?>
         </div>
     </section>
     <section class="banner">
         <div class="row intro">
             <img src="http://placehold.it/1200x450">
             <div class="banner-text">
                 <h2>NEW ZEALAND</h2>
                 <h4>STRONG AND FREE</h4>
                 <hr class="colored">
             </div>
             <div class="banner-logo">
                 <img src="<?php header_image(); ?>">
             </div>

         </div>
     </section>

     <section class="about">
         <div class="row">
             <div class="small-12 medium-6 columns">
                 <h2 class="title">About Us</h2>
                 <h3>The ACT Party was founded upon those traditional classical liberal principles</h3>
             </div>
             <div class="small-12 medium-6 columns"></div>
         </div>

         <div class="row">
             <div class="small-12 medium-4 columns">A free society: free trade, free speech, and personal and religious freedom</div>
             <div class="small-12 medium-4 columns">A nation that values personal responsibility, tolerance, civility and compassion</div>
             <div class="small-12 medium-4 columns">Small government, low taxes, secure property rights, and the law applied equally to all citizens</div>
         </div>
     </section>
     <section class="join">
         <div class="section-title">
             <strong class="bold">Help us create an even better New Zealand</strong>
         </div>
         <div class="row">

                 <div class="signup-panel">
                     <form>
                         <div class="row">
                             <div class="medium-6  columns">
                                 <input type="text" placeholder="first name">
                             </div>
                             <div class="medium-6  columns">
                                 <input type="text" placeholder="last name">
                             </div>
                         </div>
                         <div class="row collapse">
                             <div class="medium-12  columns">
                                 <input type="text" placeholder="email">
                             </div>
                         </div>
                         <div class="row collapse">
                             <div class="medium-12  columns">
                                 <input type="text" placeholder="mobile">
                             </div>
                         </div>
                         <div class="row collapse">
                             <div class="medium-12 columns ">
                                 <input type="text" placeholder="address">
                             </div>
                         </div>
                         <div class="row">
                             <div class="medium-6  columns">
                                 <input type="text" placeholder="city">
                             </div>
                             <div class="medium-6  columns">
                                 <input type="text" placeholder="post code">
                             </div>
                         </div>
                     </form>
                     <a href="#" class="button ">Sign Up! </a>
                 </div>

         </div>
     </section>




 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>

 <?php get_footer();
