<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

    <div id="single-post" role="main">
        <?php do_action( 'foundationpress_before_content' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <header>
                <div class="section-title"><strong class="bold"><?php the_category(); ?></strong></div>
            </header>
            <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <?php foundationpress_entry_meta(); ?>
                        <div class="post-tag"><?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?></div>
                    </div>
                </header>
                <hr>
                <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
                <div class="entry-content">
                    <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail();
                    endif;?>
                    <div class="social-share">
                        <a href="" class="fa fa-facebook"></a>
                        <a href="" class="fa fa-twitter"></a>
                    </div>
                    <?php
                    the_content();
                    ?>
                </div>
                <footer>
                    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                </footer>

                <?php
                $navigation = '';
                $previous   = get_previous_post_link( '<div class="nav-previous"><span>Previous post</span></br>%link</div>', '%title', true );
                $next       = get_next_post_link( '<div class="nav-next"><span>Next post</span></br>%link</div>', '%title', true );

                // Only add markup if there's somewhere to navigate to.
                if ( $previous || $next ) {
                    $navigation = _navigation_markup( $previous . $next, 'post-navigation' );
                }
                echo $navigation;
                ?>
                <?php do_action( 'foundationpress_post_before_comments' ); ?>
                <?php comments_template(); ?>
                <?php do_action( 'foundationpress_post_after_comments' ); ?>
            </article>
        <?php endwhile;?>

        <?php do_action( 'foundationpress_after_content' ); ?>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer();
