<div class="nav-container" id="main-navigation">
	
	<nav class="navbar navbar-expand-lg navbar-light">

	  <div class="collapse navbar-collapse justify-content-end px-lg-3 topNavbar">
	  	<?php
		wp_nav_menu( array(
			'theme_location'	=> 'primary-left',
			'container' 		=> false,
			'menu_class' 		=> 'navbar-nav',
			'walker'     		=> new wp_bootstrap_navwalker()
		)) 
		?>


	   
	  </div>


	  <a class="navbar-brand" href="/">
	  	<img src="<?php echo get_template_directory_uri().'/img/logo_purnatur.svg'; ?>" alt="">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="purnatur-icons purnatur-icon-menu"></span>
	  </button>

	  <div class="collapse navbar-collapse topNavbar">
	  	<?php
		wp_nav_menu( array(
			'theme_location'	=> 'primary-right',
			'container' 		=> false,
			'container_class' 	=> 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
    		'menu_class'        => 'nav navbar-nav',
			'walker'     		=> new wp_bootstrap_navwalker()
		)) 
		?>
	   
	  </div>
	</nav>

</div><!-- .nav-container -->
