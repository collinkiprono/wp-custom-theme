<?php

/**
 * Theme Functions
 * @package Aquila
 */

 /**
 * Proper way to enqueue scripts and styles.
 */

function aquila_scripts() {
    /** Good practice to register style first the enqueue later */

    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all' );
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true );
    
    wp_enqueue_style( 'style-css');
    wp_enqueue_script( 'main-js');
    /** This way you can enqueue scripts/styles conditionally */
}
add_action( 'wp_enqueue_scripts', 'aquila_scripts' );

?>