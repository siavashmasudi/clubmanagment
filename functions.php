<?php

require_once("functions-sidebar.php");

//add_theme_support('post-thumbnails',array('post','page','menus','portfolio'));
//add_theme_support( 'post-thumbnails', array( 'post', 'portfolio','page','menus' ) );
add_theme_support('post-thumbnails');
//set_post_thumbnail_size( 900, 300, true ); // määritellään koko
//
//add_image_size('post-image', 900, 300, true);
//add_image_size('single-post-image', 900, 300, true);
//add_image_size('portfolio-image', 360, 263, true);
//add_image_size('portfolio-image-large', 710, 513, true);
//
//
//
//function siavashBlog_excerpt( $str, $length ){
//	if(strlen($str) > $length){
//		return substr( $str, 0, $length ) . "...";
//	}
//
//	return $str;
//}

function register_menu() {
    register_nav_menu( 'main-menu', 'Mainmenu' );

    
}
add_action('init', 'register_menu');
?>