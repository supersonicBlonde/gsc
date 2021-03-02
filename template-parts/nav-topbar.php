<div class="nav-container d-flex justify-content-end" id="top-bar">
	<nav class="navbar">
		<?php
		wp_nav_menu( array(
			'theme_location'	=> 'top-bar',
			'container' 		=> false,
			'menu_class' 		=> 'topnavbar-nav',
			'walker'     		=> new wp_bootstrap_navwalker()
		)) 
		?>
	</nav>
</div>