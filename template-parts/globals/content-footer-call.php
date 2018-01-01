<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/1/2018
 * Time: 09:07
 */
$front_page_id = get_option('page_on_front');
$phone_number = get_post_meta($post->ID, 'phone', true) ? get_post_meta($front_page_id, 'phone', true) : '(123) 456-7890';

?>
<div class="col-xs-12">
    <a href="tel:<?php echo $phone_number;?>">
        <span class="call-text">click to call: <?php echo $phone_number;?></span>&nbsp;<i class="fa fa-phone"></i>
    </a>
</div>
