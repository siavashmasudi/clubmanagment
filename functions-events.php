<?php

function custom_post_type_for_result() {
    $labels = array(
        'name' => _x('Game Result', 'post type general name'),
        'singular_name' => _x('GameResult', 'post type singular name')
        
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Contains our Result and Result data',
        'public' => true,
        'supports' => array('title', 'thumbnail', 'metabox'),
        'has_archive' => true
    );
    // 'events' is the name of our Custom Post type, and will be referenced later on.
    register_post_type('results', $args);
}

add_action('init', 'custom_post_type_for_result');

