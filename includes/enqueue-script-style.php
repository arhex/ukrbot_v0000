<?php
if (! defined('ABSPATH')){
    exit();
}
add_action( 'wp_enqueue_scripts', 'estore_style' );
function estore_style() {
    wp_enqueue_style( 'estore-style', get_stylesheet_uri(), array('bootstrap-style') );
    wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(),null, 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
}

add_action( 'wp_enqueue_scripts', 'estore_scripts' );
function estore_scripts() {

    wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'estore-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script('popper-script', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'), null, true);
    wp_enqueue_script('main-stile-script', get_template_directory_uri().'/assets/js/scripts.js', array('jquery'), null, true);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


