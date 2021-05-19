<?php
	/*
		
	This is the template for the header

	@package gsc

	*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset '); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>" >
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if(is_singular() && pings_open(get_queried_object())): ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif; ?>
	<title><?php bloginfo('name')." ".wp_title(); ?></title>
	<?php wp_head();  ?>
</head>

<body <?php body_class(); ?>>
	
	<div>		

	<header class="master-header" id="master-header">
		<div class="global-container">
			<?php get_template_part('template-parts/nav' , 'topbar'); ?>
		</div>
		<div class="main-navigation" id="main-navigation">	
			<div class="global-container">
				<?php get_template_part('template-parts/nav' , 'main'); ?>
			</div>
		</div>
		<div id="submenu">
			<ul class="d-flex">
					<li>
						<div class="mb-1"><strong>Shared Contacts for Gmail</strong></div>
						<p>Share contacts with your team<br>anywhere.</p>
						<a href="/google-workspace-shared-contacts-edition" class="regular"><?php echo __('Read More' , 'gsc'); ?></a>
					</li>
					<li>
					<div class="mb-1"><strong>Google Workspace Shared Contacts Edition</strong></div>
						<p>We integrate contact sharing as a feature of your<br>Google workspace.</p>
						<a href="/solutions" class="regular"><?php echo __('Read More' , 'gsc'); ?></a>
					</li>
				</ul>
		</div>