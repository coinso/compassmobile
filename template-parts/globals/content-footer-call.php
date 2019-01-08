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
$cta_bottom = get_post_meta(FORNT_PAGE_ID, 'cta bottom', true) ? get_post_meta(FORNT_PAGE_ID, 'cta bottom', true) : $cta_top;
$phone_img = get_stylesheet_directory_uri() . '/assets/img/phone-call.png';
if ( $local_phone_number ){
    $phone_number = $local_phone_number;
}
?>
<div class="col-xs-12">
    <a href="tel:<?php echo $local_phone_number ? $local_phone_number : $phone_number;?>" class="call-btn">
        <img src="<?php echo $phone_img;?>" alt="Call 24/7">&nbsp;<span class="call-text"><?php echo $cta_bottom .' '.$phone_number;?></span>
    </a>
</div>
