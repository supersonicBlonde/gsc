<div class="nav-container" id="main-navigation">
	<nav class="navbar navbar-expand-lg">
	<a class="navbar-brand" href="/">
	  	<img src="<?php echo get_template_directory_uri().'/dist/img/logo.png'; ?>" alt="Logo Share Contacts for Gmail">
	  </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse topNavbar">
		<?php
		wp_nav_menu( array(
			'theme_location'	=> 'primary-left',
			'container' 		=> false,
			'menu_class' 		=> 'navbar-nav mx-auto',
			'walker'     		=> new wp_bootstrap_navwalker()
		)) 
		?>
		<?php
		wp_nav_menu( array(
			'theme_location'	=> 'primary-right',
			'container' 		=> false,
			'menu_class' 		=> 'navbar-nav my-2 my-lg-0 align-items-center',
			'walker'     		=> new wp_bootstrap_navwalker()
		)) 
		?>
		</div>
	</nav>
</div>