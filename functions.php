<?php

require_once("functions-sidebar.php");
require_once("functions-mainslider.php");


add_theme_support( 'post-thumbnails', array( 'post', 'slider','page','menu' ) );


add_image_size('MainSlider-image', 1000, 500, true);



function register_menu() {
    register_nav_menu( 'main-menu', 'Mainmenu' );

    
}
add_action('init', 'register_menu');
?>