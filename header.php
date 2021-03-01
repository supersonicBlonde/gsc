<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@300;400;700&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="bg-white">
		<div class="bg-light border-bottom">
			<nav class="navbar navbar-expand-xl navbar-light container py-0">
				<?php wp_nav_menu([
					'theme_location' => 'top',
					'container' => false,
					'menu_class' => 'navbar-nav ml-auto'
				]); ?>
			</nav>
		</div>
		<nav class="navbar navbar-expand-xl navbar-light container">
			<a class="navbar-brand" href="#">
				<img class="m-0" height="90" src="https://www.getsharedcontacts.com/wp-content/uploads/2018/03/shared-contacts-for-gmail-logo.png" alt="Shared Contacts for Gmail®" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php wp_nav_menu([
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'navbar-nav ml-auto text-uppercase'
				]); ?>
				<a href="https://staging-app.gmailsharedcontacts.com/" class="sign-in ml-0 ml-xl-3 mb-3 mb-xl-0 text-decoration-none text-dark">Sign in with Google</a>
			</div>
		</nav>
	</header>