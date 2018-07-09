<?php get_header(); ?>

    <div id="primary" class="content-area container">
    <main id="main" class="site-main row">

        <?php
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'single-jobs' );

        endwhile; // End of the loop.

        if ( is_active_sidebar('sidebar-1') ){
            dynamic_sidebar( 'sidebar-1' );
        }
        ?>

    </main><!-- #main -->
    </div><!-- #primary -->


			
<?php get_footer(); ?>