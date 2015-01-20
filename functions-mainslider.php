<?php

/*
 * Function to display images/posts in home page.
 */

register_post_type('slider', array('labels' => array(
        'name' => __('MainSlider'),
        'singular_name' => __('slider')
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'hierarchical' => true
        )
);
