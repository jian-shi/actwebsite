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
     <div class="section-title">
         <strong class="bold">Policies</strong>
     </div>
 <?php do_action( 'foundationpress_before_content' ); ?>

     <section class="policy">

         <div class="row">
<!--             <div class = "post-start small-12 large-4 columns">-->
<!--                 <h2>Policies</h2>-->
<!--                 <i class="fa fa-arrow-right fa-4x" aria-hidden="true"></i>-->
<!--             </div>-->
                 <?php
                 $policies = get_recent_post('policy', 9);
                 foreach ($policies as $policy){
                     $thumbnial = get_the_post_thumbnail( $policy["ID"]);
                     $permalink = get_permalink($policy["ID"]);
                     $title = $policy["post_title"];
                     $content = $policy["post_content"];
                     $trimmed_content = wp_trim_words( $content, 70 );
                     echo '<div class = "post small-12 large-4 columns">';
                     echo '<div class = "policy-thumbnail">';
                     echo $thumbnial;
                     echo '</div>';
                     echo '<div class="post-title"><a href="' . $permalink. '">'.$title.'</a></div>';
                     echo "<hr>";
                     echo '<div class = "post-content">' .$trimmed_content. '</div>';
                     echo '<div class = "read-more">';
                     echo '<a href="' . $permalink . '" class=""> more';
//                     echo "<span class=\"fa-stack\"><i class=\"fa fa-play fa-stack-1x \"></i></span></a>";
                     echo '</div>';
                     echo "<hr class = 'end'>";
                     echo '</div>';
                 }
                 ?>
         </div>
     </section>
 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>
 <?php get_footer();
