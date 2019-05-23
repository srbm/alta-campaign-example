<?php
add_action( 'wp_enqueue_scripts', 'twentynineteen_child_scripts' );
function twentynineteen_child_scripts() {
	wp_enqueue_style( 'twentynineteen-parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
}
wp_enqueue_style( 'style', get_stylesheet_uri() );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Nav' ));
}
add_action( 'init', 'register_my_menu' );
