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
?>
<div class="col-xs-12">
    <a href="tel:<?php echo $local_phone_number ? $local_phone_number : $phone_number;?>" class="call-btn">
        <span class="call-text"><?php echo $cta_bottom .' '.$phone_number;?></span>&nbsp;<i class="fa fa-phone"></i>
    </a>
</div>
