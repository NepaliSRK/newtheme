<?php

$my_post = array(
  'post_title'    => wp_strip_all_tags( $_POST['post_title'] ),
  'post_content'  => $_POST['post_content'],
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_category' => array( 8,39 )
);
 
// Insert the post into the database
wp_insert_post( $my_post );



 
function create_custom_post_type() {
 
$args = array(
  'labels' => array(
   'name' => __( 'news' ),
   'singular_name' => __( 'News' )
  ),
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'news'),
 );
 
register_post_type( 'news',$args);
}

add_action('init', 'create_custom_post_type');

