<?php

/*
 * Function to display images/posts in home page.
 */


function custom_post_type_for_slider() {

    $labels = array(
        'name' => __('MainSlider'),
        'singular_name' => __('slider')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => true
    );

    register_post_type('slider', $args);
}

add_action('init', 'custom_post_type_for_slider');
