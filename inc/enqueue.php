<?php

/*
	
@package gsc
	



/*
	
	========================
		FRONT ENQUEUE FUNCTIONS
	========================
*/

function quanta_load_scripts() {

		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri().'/dist/js/jquery-3.5.1.min.js', array(), '3.5.1', true );
		wp_enqueue_script( 'jquery' );

		wp_enqueue_style('poppins' , 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap');
		/* 	wp_enqueue_style('worksans' , 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;400;600;700&display=swap');
		wp_enqueue_style('roboto' , 'https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
	 */
		wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/dist/css/bootstrap.min.css', array(), '4.5.2', 'all' );
		wp_enqueue_style( 'purnatur', get_template_directory_uri().'/dist/css/styles.min.css', array(), '1.0.0', 'all' );

		wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/dist/js/bootstrap.min.js', array('jquery'), '4.5.2', true );
	
		wp_enqueue_script( 'quanta', get_template_directory_uri().'/dist/js/scripts.min.js', array('jquery' , 'bootstrap'), '', true );

		/* if(is_page(290)):
			wp_enqueue_style('aos' , 'https://unpkg.com/aos@next/dist/aos.css');
			wp_enqueue_script( 'aos', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), '', true );
			wp_enqueue_script( 'timeline', get_template_directory_uri().'/dist/js/timeline.min.js', array('jquery'), '', true );
		endif; */		

}

add_action( 'wp_enqueue_scripts', 'quanta_load_scripts');