<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package compassmobile
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.

			endwhile; // End of the loop.

                if ( is_active_sidebar('sidebar-1') ){
                    dynamic_sidebar( 'sidebar-1' );
                }
            ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
