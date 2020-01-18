<?php 

// require_once('widgets/class-wp-widget-categories.php');
require_once('widgets/class-wp-widget-categories.php');

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

// Enable widget locations
function init_widgets($id) {
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar'
    ));
}
add_action( 'widgets_init', 'init_widgets' );

// Register widgets
function custom_register_widgets() {
    register_widget( 'WP_Widget_Categories_Custom' );
}
add_action( 'widgets_init', 'custom_register_widgets' );