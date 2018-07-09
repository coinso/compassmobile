<?php

if ( !is_single()){ ?>
    <div class="job">
        <?php the_title('<a href="'.get_the_permalink().'"><h3>','</h3></a>'); ?>
    </div>
<?php } else {

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( MAIN_CONTENT_AREA_CLASS); ?> itemscope itemtype="http://schema.org/JobPosting">
    <header class="entry-header">
        <?php get_template_part(GLOBALS_PARTS_FOLDER, 'top-page');;?>
    </header><!-- .entry-header -->

    <span>
        <p>
            <strong>Location:</strong>
            <span itemprop="jobLocation" itemscope itemtype="http://schema.org/Place">
                <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="streetAddress"><?php the_field('addressstreet');?></span>
                    <span itemprop="addressLocality"><?php the_field('addressLocality');?></span>
                    <span itemprop="addressRegion"><?php the_field('addressregion');?></span>
                    <span itemprop="postalCode"><?php the_field('addresszip');?></span>
                </span>
            </span>
        </p>
      </span>
    <p><strong>Industry:</strong>
        <span itemprop="industry"><?php the_field('jobindustry');?></span><br>
        <strong>Hours:</strong>
        <span itemprop="employmentType"><?php the_field('jobhours');?></span>,
        <span itemprop="workHours"><?php the_field('workhours');?> hours per week</span><br>
        <strong>Salary:</strong>

        <span itemprop="baseSalary" itemscope itemtype="http://schema.org/MonetaryAmount">

                <span itemprop="currency"><?php  echo strtoupper( get_field('salarycurrency') );?></span>
                <span itemprop="value"><?php the_field('basesalary');?></span> Per
                <span itemprop="unitText">Hour</span>

        </span>
    </p>
    <p itemprop="description">
        <strong>Description:</strong>
        <?php the_field('job_short_description');?>
    </p>
    <p itemprop="hiringOrganization" itemscope itemtype="http://schema.org/Organization">
        <strong>Employer:</strong>
        <a href="<?php echo get_home_url('/');?>" itemprop="sameAs" rel="nofollow">
            <span itemprop="name"><?php the_field('hiringorganization');?></span>
        </a>
    </p>
    <?php if ( have_rows( 'responsibilities' ) ){ ?>
    <p><strong>Responsibilities:</strong></p>
        <ul itemprop="responsibilities">
            <?php while ( have_rows('responsibilities' ) ){
                the_row();?>
                <li><?php the_sub_field('responsibility');?></li>
            <?php } ?>
         </ul>
    <?php }
        if ( have_rows( 'educationrequirements' ) ) { ?>
    <p><strong>Educational requirements:</strong></p>
    <ul itemprop="educationRequirements">
                <?php while ( have_rows( 'educationrequirements' ) ) {
                    the_row(); ?>
                    <li><?php the_sub_field('ed_requirement' );?></li>
                <?php } ?>
    </ul>
    <?php }
    if ( have_rows( 'experiencerequirements' ) ) { ?>
    <p><strong>Experience requirements:</strong></p>
    <ul itemprop="experienceRequirements">
        <?php while ( have_rows( 'experiencerequirements' ) ) {
            the_row(); ?>
            <li><?php the_sub_field( 'experience_requirement' );?></li>
        <?php } ?>
    </ul>
    <?php }
    if ( have_rows( 'required_skills' ) ) { ?>
    <p><strong>Desired Skills:</strong></p>
    <ul itemprop="skills">
        <?php while ( have_rows( 'required_skills' ) ) {
            the_row(); ?>
            <li><?php the_sub_field('req_skill' );?></li>
        <?php } ?>
    </ul>
    <?php }
    if ( have_rows( 'qualifications' ) ) { ?>
    <p><strong>Qualifications:</strong></p>
    <ul itemprop="qualifications">
        <?php while ( have_rows( 'qualifications' ) ) {
            the_row(); ?>
            <li><?php the_sub_field( 'qualification' );?></li>
        <?php } ?>
    </ul>
    <?php }
    if ( have_rows( 'benefits' ) ) { ?>
    <p><strong>Benefits:</strong></p>
    <ul>
        <?php while ( have_rows( 'benefits' ) ) {
            the_row(); ?>
            <li>
                <span itemprop="jobBenefits">
                    <?php the_sub_field('benefit');?>
                </span>
            </li>
        <?php } ?>
    </ul>
    <?php } ?>
    <div class="job-full-description">
        <?php the_content();?>
    </div>
    <div class="job-cta">
        <p>If you are interested in this position, please
            <a href="<?php the_field('job_cta__link');?>">
                <?php the_field('job_cta');?>
            </a>
        </p>
    </div>
    <p>Date Posted: <span itemprop="datePosted"><?php the_date('d/m/Y');?></span></p>
    <p>Open Position until: <span itemprop="validThrough"><?php the_field('validthrough');?></span></p>
</div>
<?php }