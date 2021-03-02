<?php

//require_once 'blocks/section.php';

function gsc_scripts()
{
/* 	wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
	wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
	wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('gsc-theme', get_template_directory_uri() . '/style.css', ['bootstrap'], '1.0.0', 'all');
	wp_enqueue_script('bootstrap'); */

	/*

	wp_enqueue_style('fh_bootstrap_css', get_template_directory_uri() . '/css/lib/bootstrap.min.css', [], '1.0.0', 'all');
	wp_enqueue_style('fh_theme_css', get_template_directory_uri() . '/style.css', ['fh_bootstrap_css'], '1.0.0', 'all');
	wp_enqueue_script('fh_bootstrap_js', get_template_directory_uri() . '/js/lib/bootstrap.min.js', ['jquery'], '1.0.0', true);
	wp_enqueue_script('fh_popper_js', get_template_directory_uri() . '/js/lib/popper.min.js', ['jquery'], '1.0.0', true);
	wp_enqueue_script('fh_theme_js', get_template_directory_uri() . '/js/script.js', ['jquery', 'fh_bootstrap_js'], '1.0.0', true);

	*/
}

/* function gsc_setup()
{
	add_theme_support('post-thumbnails');
	add_theme_support('responsive-embeds');
	add_theme_support('title-tag');
	add_theme_support('menus');
	add_theme_support('widgets');
	register_nav_menu('top', 'top_menu');
	register_nav_menu('primary', 'main_menu');
	register_nav_menu('footer', 'footer_menu');
	remove_action('wp_head', 'wp_generator');
}

function gsc_register_widget()
{
	$sidebars = [
		[
			'id'			=> 'footer-column',
			'name'			=> 'Footer Column %d',
			'before_widget'	=> '<div class="text-left %2$s" id="%1$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h5>',
			'after_title'	=> '</h5>'
		]
	];

	foreach ($sidebars as $sidebar) {
		register_sidebars(4, $sidebar );
	}

	register_sidebar([
		'id'			=> 'blog-aside',
		'name'			=> 'Blog Aside',
		'before_widget'	=> '<div class="text-left %2$s" id="%1$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5>',
		'after_title'	=> '</h5>'
	]);
}

function gsc_menu_class($classes)
{
	$classes[] = 'nav-item text-left text-xl-center';
	return $classes;
}

function gsc_menu_link_class($attrs)
{
	$attrs['class'] = 'nav-link';
	return $attrs;
}

function body_class_custom( $classes )
{
	$classes[] = 'bg_light';
    return $classes;
}

function wpdocs_custom_excerpt_length( $length ){
	return 25;
}

add_action('wp_enqueue_scripts', 'gsc_scripts');
add_action('after_setup_theme', 'gsc_setup');
add_action('widgets_init', 'gsc_register_widget');
add_filter('nav_menu_css_class', 'gsc_menu_class');
add_filter('nav_menu_link_attributes', 'gsc_menu_link_class');
add_filter( 'body_class', 'body_class_custom');
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length'); */