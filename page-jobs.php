<?php
/***
 *  template Name: Jobs Page
 *
 */
get_header(); ?>




    <div id="primary" class="content-area container">
        <main id="main" class="site-main">
            <div class="row">
                <div class="col-sm-12">
                    <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.

            endwhile; // End of the loop.
            ?>
                </div>
            </div>
            <hr class="divider jobs-divider">

                <?php
                $jobsList = get_field('jobs_to_show');
                if ( $jobsList ){ ?>
                    <div class="row" id="jobs-list">
                        <ul class="jobs-list list-unstyled">
                        <?php foreach ($jobsList as $job) { ?>
                            <li class="job-item">
                                <div class="entry-content job-card">
                                    <a href="<?php the_permalink($job->ID);?>" style="text-decoration: none;">
                                        <h3 class="job-title" style="color: #1574bd;  font-family: Tahoma,Geneva,sans-serif; font-size: 22px;">
                                            <?php echo get_the_title($job->ID);?>
                                        </h3>
                                    </a>
                                    <span class="cta" style="display: inline-block;">
                            <a href="<?php the_field('job_cta__link', $job->ID);?>" style="color: red;">
                                <?php the_field('job_cta', $job->ID);?>
                            </a>
                            </span>
                                    <div class="job-desc">
                                        <?php the_excerpt();?>
                                    </div>
                                </div>
                                <hr class="divider">
                            </li>
                        <?php }

                        ?>
                        </ul>
                    </div>
                <?php } ?>

        </main><!-- #main -->
    </div><!-- #primary -->
		


			
<?php get_footer(); ?>