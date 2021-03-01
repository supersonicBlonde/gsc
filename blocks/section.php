<?php

/*
Plugin Name: Section
*/

function section_register_block_render_callback( $attributes, $content ) {

	return '<div class="wp-block-mytheme-section"><div class="container">' . $attributes['content'] . '</div></div>';

}

function section_register_block() {

	wp_register_style(
		'section-block-style',
		get_template_directory_uri() . '/blocks/section/style.css'
	);

	wp_register_style(
		'section-block-editor-style',
		get_template_directory_uri() . '/blocks/section/editor.css'
	);

    wp_register_script(
        'section-block-editor',
        get_template_directory_uri() . '/blocks/section/index.js',
        array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor' )
    );
 
    register_block_type( 'mytheme/section', array(
        'editor_script' => 'section-block-editor',
        'render_callback' => 'section_register_block_render_callback',
        'style' => 'section-block-style',
        'editor_style' => 'section-block-editor-style',
        'attributes' => [
        	'content' => ['type' => 'string']
        ],
        'template' => [
            ['mytheme/section',[], ['core/columns', [], [
                [ 'core/column', [], [
                    [ 'core/paragraph', [
                        'placeholder' => 'Add a inner paragraph'
                    ]],
                ]]
            ]]],
            
        ],
    ));
 
}

add_action( 'init', 'section_register_block' );



/*
function section_register_block() {
    wp_register_script(
        'section-block-editor',
        get_template_directory_uri() . '/blocks/section/index.js',
        array( 'wp-blocks', 'wp-element' )
    );
 
    register_block_type( 'mytheme/section', array(
        'editor_script' => 'section-block-editor',
    ) );
 
}

add_action( 'init', 'section_register_block' );
*/