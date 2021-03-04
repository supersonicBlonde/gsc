<?php

/*
	
@package purnatur
	
	========================
		THEME CUSTOM POST TYPES
	========================
*/




	
add_action( 'init', 'gsc_stories' );


function gsc_stories() {
	$labels = array(
		'name' 				=> 'Stories',
		'singular_name' 	=> 'Story',
		'menu_name'			=> 'Stories',
		'name_admin_bar'	=> 'Stories'
	);
	
	$args = array(
		'labels'				=> $labels,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'capability_type'		=> 'post',
		'hierarchical'			=> true,
		'has_archive'		  	=> true,
		'public'  	=> true,
		'menu_position'			=> 10,
		'menu_icon'				=> 'dashicons-format-status',
		'supports'				=> array( 'title', 'author' )
	);
	
	register_post_type( 'customer_stories', $args );
	
}
