<?php

function load_stylesheets_scripts() {
  wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
  wp_enqueue_style( 'bootstrap' );
  
  wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(), false, 'all' );
  wp_enqueue_style( 'style' );
  
  wp_register_script( 'news_script', get_template_directory_uri() . '/js/script.js', array('jquery')  );
  
  wp_localize_script( 'news_script', 'news_ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
  wp_enqueue_script( 'news_script' );
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets_scripts' );

add_theme_support( 'menus' );
register_nav_menus(
    
    array(
        
        'top-menu'    => __( 'Top Menu', 'theme' ),
        'footer-menu' => __( 'Footer Menu', 'theme' ),
    )

);


//Intialize to do post
include "to-do/post.php";
