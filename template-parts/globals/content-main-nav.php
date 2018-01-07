<?php
$front_page_id = get_option('page_on_front');
$img_24_scr = get_post_meta($front_page_id, 'twentyfour', true) ? get_post_meta($front_page_id, 'twentyfour', true) : get_stylesheet_directory_uri() . '/assets/img/24.png';
$logo_url = get_post_meta(FORNT_PAGE_ID, 'logo url',true) ? get_post_meta(FORNT_PAGE_ID, 'logo url',true) : get_stylesheet_directory_uri() . '/assets/img/tow-truck.png';
?>
<nav class="navmenu navmenu-inverse navmenu-fixed-left offcanvas" role="navigation">
	<a class="navmenu-brand" href="<?php echo get_home_url('/');?>">
        <img src="<?php echo $logo_url;?>" alt="<?php echo get_the_title();?>" class="logo">
    </a>

		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'menu_id'           => 'primary-menu',
            'menu_class'        =>  'nav navmenu-nav'
		) );
		?>

</nav>
<div class="navbar navbar-inverse navbar-fixed-top">
	<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
    <span id="logo-wrap">
        <a href="<?php echo esc_url( home_url('/') );?>">
            <img src="<?php echo $logo_url;?>" alt="<?php echo get_the_title();?>" class="logo">
        </a>
    </span>
    <span class="pull-right" id="twentyfour">
        <img src="<?php echo $img_24_scr;?>" alt="24/7 Service" class="img-responsive">
    </span>
</div>