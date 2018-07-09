<div class="entry-content job-card">
    <a href="<?php the_permalink();?>" style="text-decoration: none;">
        <h3 class="job-title" style="color: #1574bd;  font-family: Tahoma,Geneva,sans-serif; font-size: 22px;">
            <?php echo get_the_title();?>
        </h3>
    </a>
    <span class="cta" style="display: inline-block;">
        <a href="<?php the_field('job_cta__link');?>" style="color: red;">
            <?php the_field('job_cta');?>
        </a>
    </span>
    <div class="job-desc">
        <?php the_excerpt();?>
    </div>
</div>
<hr class="divider">
