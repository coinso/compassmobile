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

$fb = get_post_meta(FORNT_PAGE_ID, 'facebook', true);
$twitter = get_post_meta(FORNT_PAGE_ID, 'twitter', true);
$gmb = get_post_meta(FORNT_PAGE_ID, 'gmb', true);
$yelp = get_post_meta(FORNT_PAGE_ID, 'yelp', true);
$disclaimer_w = get_stylesheet_directory_uri() . '/assets/img/disclaimer-white.png';
$disclaimer_b = get_stylesheet_directory_uri() . '/assets/img/disclaimer-black.png';
$disclaimer = get_post_meta(FORNT_PAGE_ID, 'disclaimer', true);
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container text-center">
        <div class="row" id="footer-call-row">
	        <?php get_template_part(GLOBALS_PARTS_FOLDER, 'footer-call');?>
        </div>
        <div class="row" id="footer-nav-row">
            <div class="col-xs-12">
                <?php get_template_part(GLOBALS_PARTS_FOLDER, 'footer-nav');?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" id="socials">
                <ul class="list-inline social-links">
                    <?php if( $fb ) :?>
                    <li class="social-item">
                        <a href="<?php echo $fb;?>" class="social-link facebook" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endif;
                        if ( $gmb ) :?>
                    <li class="social-item">
                        <a href="<?php echo $gmb ;?>" class="social-link google-plus" rel="nofollow" target="_blank">
                            <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endif;
                        if ( $twitter ) :?>
                    <li class="social-item">
                        <a href="<?php echo $twitter ;?>" class="social-link twitter" rel="nofollow" target="_blank">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endif;
                        if ( $yelp ) :?>
                    <li class="social-item">
                        <a href="<?php echo $yelp ;?>" class="social-link yelp" rel="nofollow" target="_blank">
                            <i class="fab fa-yelp" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
            <div class="site-info col-xs-12">
                <a href="<?php echo esc_url( __( get_home_url('/'), 'compassmobile' ) ); ?>"><?php
			        /* translators: %s: CMS name, i.e. WordPress. */
			        printf( esc_html__( 'All Rights Reserved %s', 'compassmobile' ), get_bloginfo('name') );
			        ?></a>
                <span class="sep"> | </span>
		        <?php
		        /* translators: 1: Theme name, 2: Theme author. */
		        printf( esc_html__( '%1$s  %2$s', 'compassmobile' ), '&copy <span class="sep"> | </span>', date('Y') );
		        ?>
            </div><!-- .site-info -->
            <div id="footer-disclaimer" class="col-xs-12">
                <?php if( $disclaimer == 'black'){ ?>
                    <img src="<?php echo $disclaimer_b ;?>" alt="disclaimer">
                <?php } else { ?>
                    <img src="<?php echo $disclaimer_w ;?>" alt="disclaimer">
                <?php } ?>
            </div>
        </div>
        <a href="#top" class="scrollup" role="button" title="<?php echo 'back to top';?>" aria-label="<?php echo 'back to top';?>" style="display: block;"><i class="fa fa-chevron-up"></i></a>

    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
