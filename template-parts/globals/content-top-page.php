<?php
$h1         = get_post_meta($post->ID, 'h1', true) ? get_post_meta($post->ID, 'h1', true) : get_the_title();
$main_cta   = get_post_meta(FORNT_PAGE_ID, 'main cta', true) ? get_post_meta(FORNT_PAGE_ID, 'main cta', true) : get_post_meta($post->ID, 'main cta', true);
$phone_number = get_post_meta(FORNT_PAGE_ID, 'phone', true);
$local_phone_number = get_post_meta($post->ID, 'local phone', true);
if ( has_post_thumbnail() ) {
	$bg = get_the_post_thumbnail_url();?>
	<div class="top-img-wrap" style="background: url('<?php echo $bg;?>') no-repeat center center; background-size: cover">
		<div class="overlay"></div>
        <?php if( $main_cta ) :?>
            <div class="main_cta lead">
                <?php echo $main_cta;?>
                <i class="fa fa-angle-down"></i>
            </div>
        <?php endif;?>
		<div class="cta-call-btn">
			<a href="tel:<?php echo $local_phone_number ? $local_phone_number : $phone_number;?>" class="btn btn-danger btn-block"><?php echo $local_phone_number ? $local_phone_number : $phone_number;?></a>
		</div>
	</div>
	<h1 class="page-title entry-title">
		<?php echo $h1;?>
	</h1>
<?php }else{
	$bg = get_stylesheet_directory_uri() . '/assets/img/default-bg.jpg'?>
	<div class="top-img-wrap top-img-wrap-default" style="background: url('<?php echo $bg;?>') no-repeat center center; background-size: cover">
		<div class="overlay"></div>
        <?php if( $main_cta ) :?>
            <div class="main_cta lead">
                <?php echo $main_cta;?>
                <i class="fa fa-angle-down"></i>
            </div>
        <?php endif;?>
		<div class="cta-call-btn">
			<a href="tel:<?php echo $local_phone_number ? $local_phone_number : $phone_number;?>" class="btn btn-danger btn-block"><?php echo $local_phone_number ? $local_phone_number : $phone_number;?></a>
		</div>
	</div>
	<h1 class="page-title entry-title">
		<?php echo $h1;?>
	</h1>
<?php } ?>