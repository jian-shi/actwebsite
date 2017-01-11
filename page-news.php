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
     <section class="news">
         <div class="section-title">
             <strong class="bold">News</strong>
         </div>
         <div class="row">
             <div class = "small-12 large-8 columns">
             <?php
             global $wp_query;
             $args = array();
             $args['category_name'] = 'news';
             if( !empty( $_GET['field-date-year'] ) ) {
                 $parts=parse_url($_GET['field-date-year']);
                 $year=explode('/', $parts['path']);
                 $args['year'] = $year[2];
             }
             if( !empty( $_GET['filter-date-month'] ) ) {
                 $args['monthnum'] = $_GET['filter-date-month'];
             }

             if( !empty( $_GET['category'] ) ) {
                 $args['category_name'] = $_GET['category'];
             }
             else {
                 $args['category_name'] = 'news, press release';
             }

             query_posts($args );
             if (!have_posts()){
                 echo "<div class='post'><div class = 'nothing'> <h2>Nothing has been found :(</h></div></div>";
             }

             while ( have_posts()) : the_post();?>
                 <div class="post">
                     <div class = "post-thumbnail"><?php the_post_thumbnail( 'medium' ); ?></div>
                     <div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                     <div class="post-tag"><?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?></div>
                     <p class="author-meta">BY <strong><?php the_author(); ?></strong> at <?php the_time("j F, Y"); ?></p>
                     <hr>
                     <div class="post-content"><?php custom_excerpt(the_excerpt()); ?></div>
                     <div class = "read-more">
                         <a href="<?php echo get_permalink(); ?>" class="">READ MORE</a>
                     </div>
                     <hr class="end">
                 </div>
             <?php
             endwhile;
             // Reset Query
             wp_reset_query();?>
             </div>

             <aside class = "sidebar">
                 <div class='post-filters'>
                     <h4>Filter News</h4>
                     <form role="filter" method="get" id="searchform" action="">
                         <select class="date-month form-control form-select" id="filter-date-month" name="filter-date-month">
                             <option value="" selected="selected"><?php echo esc_attr( __( 'Select Month' ) ); ?></option>
                             <option value="1">Jan</option>
                             <option value="2">Feb</option>
                             <option value="3">Mar</option>
                             <option value="4">Apr</option>
                             <option value="5">May</option>
                             <option value="6">Jun</option>
                             <option value="7">Jul</option>
                             <option value="8">Aug</option>
                             <option value="9">Sep</option>
                             <option value="10">Oct</option>
                             <option value="11">Nov</option>
                             <option value="12">Dec</option>
                         </select>
                         <select class="date-year form-control form-select" id="field-date-year" name="field-date-year">
                             <option value="" selected="selected"><?php echo esc_attr( __( 'Select Year' ) ); ?></option>
                             <?php
                                wp_get_archives( array( 'type' => 'yearly', 'limit' => 3, 'format' => 'option') );
                             ?>
                         </select>
                         <select name="order">
                             <option value='DESC'>Descending</option>
                             <option value='ASC'>Ascending</option>
                         </select>
                         <select id="field-category" name="category">
                             <?php
                                $items = get_categories();
                                foreach($items as $item):;?>
                                <option value= '<?php echo $item->name ?>' > <?php echo $item->name ?> </option>
                             <?php endforeach;?>
                             <option value='all'>All</option>
                         </select>
                         <input class="button" type='submit' value='Filter!'>
                     </form>
                 </div>
             </div>
         </div>
     </section>
 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>

 <?php get_footer();
