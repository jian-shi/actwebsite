<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
<!--    <div class="tag-cloud">-->
<!--        <h4>Issues</h4>-->
<!--        --><?php
//        $tags = get_tags();
//        if ($tags) {
//            foreach ($tags as $tag) {
//                echo '<p><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </p> ';
//            }
//        }
//        ?>
<!--    </div>-->

    <?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
