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

 <?php do_action( 'foundationpress_before_content' ); ?>
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

     <section class="policies">
         <div class="section-title">
             <strong class = 'bold' >Policies</strong> <a href="policies">View all policies</a>
         </div>
         <div class="row">
             <div class="small-12 columns">
                 <div class="row">
                     <div class="small-12 columns">
                         <div class="small-12 medium-4 columns">
                             <div class="item">
                                 <div class="title">
                                     SAFER SOCIETY
                                 </div>
                                 <div class="icon">
                         <span class="fa-stack fa-lg">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-gavel fa-stack-1x"></i>
                        </span>
                                 </div>
                             </div>
                         </div>
                         <div class="small-12 medium-4 columns">
                             <div class="item">
                                 <div class="title">
                                     EDUCATION
                                 </div>
                                 <div class="icon">
                         <span class="fa-stack fa-lg">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-university fa-stack-1x"></i>
                        </span>
                                 </div>
                             </div>
                         </div>
                         <div class="small-12 medium-4 columns">
                             <div class="item">
                                 <div class="title">
                                     ENVIRONMENT
                                 </div>
                                 <div class="icon">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-leaf fa-stack-1x"></i>
                        </span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


         </div>
     </section>

     <section class="news">
         <div class="section-title">
             <strong class = 'bold' >News</strong> <a href="news">View all news</a>
         </div>
         <div class="row">
             <?php
             $args = array( 'posts_per_page' => 2, 'category_name'=> 'news, press release', 'orderby'=> 'date');
             $items = get_posts( $args );
                foreach ($items as $post): setup_postdata( $post ); ?>
                    <div class = "post small-12 large-6 columns">
                        <div class="post-tag"> <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?></div>
                        <div class = "post-thumbnail"><?php the_post_thumbnail( 'medium' ); ?></div>
                        <div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

                        <div class="author-meta"><?php foundationpress_entry_meta(); ?></div>
                        <hr>
                        <div class="post-content"><?php custom_excerpt(the_excerpt()); ?></div>

                        <div class = "read-more">
                            <a href="<?php echo get_permalink(); ?>" class="">Read more</a>
                        </div>
                        <hr class="end">
                    </div>
                <?php endforeach; wp_reset_postdata();?>
         </div>
     </section>

     <section class="join">
         <div class="section-title">
             <strong class="bold">Help us create an even better New Zealand</strong>
         </div>
         <div class="row">
             <form action="/act/join">
                 <input type="submit" class="button" id="join" value="JOIN ACT">
             </form>

         </div>
     </section>
 <?php do_action( 'foundationpress_after_content' ); ?>
 </div>
 <?php get_footer();
