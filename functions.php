<?php

// function astra_child_scripts(){
//     wp_enqueue_style( 'astra-style', get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'astra-child-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
// }
// add_action( 'wp_enqueue_scripts', 'astra_child_scripts' );


function child_enqueue_styles() {
    wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . "/dist/app.css", array('astra-theme-css'), null, 'all');

    wp_enqueue_script( "some-unique-handler", get_stylesheet_directory_uri() . "./dist/app.js", ["jquery"], true);

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15);
