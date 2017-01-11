<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
                <div class="row">
                    <div class="small-12 columns">
                        <div class="small-0 medium-4 columns">
                            <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
                        </div>
                        <div class="small-12 medium-8 columns">
                            <form action="#" method="post" name="sign up for beta form">
                                <div class="description">
                                    <p></p>
                                </div>
                                <div class="input">
                                    <input type="text" class="button" id="email" name="email" placeholder="NAME@EXAMPLE.COM">
                                    <input type="submit" class="button" id="submit" value="SIGN UP FOR NEWSLETTER">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <div class="small-0 medium-12 columns">
                            <a href="#" id="survey">Your Say - Question Survey</a>
                            <div class="social-icon">
                                <i class="fa fa-twitter fa-2x"></i>
                                <i class="fa fa-facebook fa-2x"></i>
                            </div>
                            <div id="chinese-link">
                                <a href="">中文版</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <?php do_action( 'foundationpress_before_footer' ); ?>
                        <?php dynamic_sidebar( 'footer-widgets-1' ); ?>
                        <?php do_action( 'foundationpress_after_footer' ); ?>

                        <?php do_action( 'foundationpress_before_footer' ); ?>
                        <?php dynamic_sidebar( 'footer-widgets-2' ); ?>
                        <?php do_action( 'foundationpress_after_footer' ); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <hr>
                        <?php do_action( 'foundationpress_before_footer' ); ?>
                        <?php dynamic_sidebar( 'footer-widgets-3' ); ?>
                        <?php do_action( 'foundationpress_after_footer' ); ?>
                    </div>
                </div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
