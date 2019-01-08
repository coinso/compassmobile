<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/1/2018
 * Time: 09:07
 */

$phone_number = get_post_meta(FORNT_PAGE_ID, 'phone', true);
$local_phone_number = get_post_meta($post->ID, 'local phone', true);
$cta_top = get_post_meta(FORNT_PAGE_ID, 'cta top', true);
$phone_img = get_stylesheet_directory_uri() . '/assets/img/phone-call.png';
if ( $local_phone_number ){
    $phone_number = $local_phone_number;
}
?>
<div class="container-fluid" id="top-bar">

	<div class="row">
        <div class="col-xs-12 text-left" id="call">
            <a href="tel:<?php echo $local_phone_number ? $local_phone_number : $phone_number;?>" class="btn btn-success btn-lg btn-block call-btn">
                <img src="<?php echo $phone_img;?>" alt="Call 24/7">&nbsp;<span class="call-text"><?php echo $phone_number;?></span>
            </a>

        </div>


	</div>
</div>
