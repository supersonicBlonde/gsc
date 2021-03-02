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
	

	<header class="master-header">

		<?php //get_template_part('template-parts/nav' , 'main'); ?>