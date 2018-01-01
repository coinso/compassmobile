<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/1/2018
 * Time: 09:07
 */

$phone_number = get_post_meta(FORNT_PAGE_ID, 'phone', true);
$local_phone_number = get_post_meta($post->ID, 'local phone', true);
?>
<div class="container-fluid" id="top-bar">
    <div class="row">
        <div class="col-xs-12" id="logo-wrap">
	        <?php echo compassmobile_custom_logo();?>
        </div>
    </div>
	<div class="row">
        <div class="col-xs-12 text-left" id="call">
            <a href="tel:<?php echo $local_phone_number ? $local_phone_number : $phone_number;?>" class="btn btn-success btn-lg btn-block call-btn">
                <span class="call-text">click to call: <?php echo $phone_number;?></span>&nbsp;<i class="fa fa-phone"></i>
            </a>

        </div>


	</div>
</div>
