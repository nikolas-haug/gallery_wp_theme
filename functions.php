<?php 

// Add theme support
function photogenik_theme_setup() {
    // Featured image support
    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 900, 600 );

    // Post format support
    add_theme_support( 'post-formats', array('gallery') );
}
add_action('after_setup_theme', 'photogenik_theme_setup');

// Enqueue theme stylesheets and scripts
function photogenik_theme_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri(  ) );
    wp_enqueue_style( 'w3-styles', 'https://www.w3schools.com/w3css/4/w3.css' );
}
add_action( 'wp_enqueue_scripts', 'photogenik_theme_scripts' );