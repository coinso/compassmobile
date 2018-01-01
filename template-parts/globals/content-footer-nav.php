<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/1/2018
 * Time: 09:07
 */
?>
<nav class="navbar navbar-default" role="navigation">

		<?php
		wp_nav_menu( array(
			'theme_location'    => 'footer',
			'menu_id'           => 'footer-menu',
            'menu_class'        => 'nav navbar-nav'
		) );
		?>

</nav>
