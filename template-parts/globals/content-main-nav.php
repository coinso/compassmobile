<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/1/2018
 * Time: 09:07
 */
?>
<nav class="navmenu navmenu-inverse navmenu-fixed-left offcanvas" role="navigation">
	<a class="navmenu-brand" href="<?php echo get_home_url('/');?>"><?php echo compassmobile_custom_logo();?></a>

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
</div>