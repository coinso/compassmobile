<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package compassmobile
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container text-center">
        <div class="row">
	        <?php get_template_part(GLOBALS_PARTS_FOLDER, 'footer-call');?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <?php get_template_part(GLOBALS_PARTS_FOLDER, 'footer-nav');?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" id="socials">
                <ul class="list-inline social-links">
                    <li class="social-item">
                        <a href="" class="social-link facebook">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="" class="social-link google-plus">
                            <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="" class="social-link twitter">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="" class="social-link yelp">
                            <i class="fab fa-yelp" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="site-info col-xs-12">
                <a href="<?php echo esc_url( __( get_home_url('/'), 'compassmobile' ) ); ?>"><?php
			        /* translators: %s: CMS name, i.e. WordPress. */
			        printf( esc_html__( 'All Rights Reserved %s', 'compassmobile' ), 'Brand Name' );
			        ?></a>
                <span class="sep"> | </span>
		        <?php
		        /* translators: 1: Theme name, 2: Theme author. */
		        printf( esc_html__( '%1$s  %2$s', 'compassmobile' ), '&copy <span class="sep"> | </span>', get_the_date('Y') );
		        ?>
            </div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
