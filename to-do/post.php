<?php

function news_add_post()
{
    $my_post = array(
        'post_title'    => wp_strip_all_tags( $_POST['name'] ),
        'post_content'  => $_POST['message'],
        'post_status'   => 'publish',
    );

    wp_insert_post( $my_post );

}

add_action("wp_ajax_news_add_post", "news_add_post");
