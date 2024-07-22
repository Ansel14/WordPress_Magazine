<?php

function magazine_support(){
    add_theme_support('post-thumbnails'); // add featured Image 
    add_theme_support('menus'); // add menus
    add_theme_support('title'); // add page title
    
    register_nav_menu( 'header_menu', 'Header Menu'); // create a nav locations
    register_nav_menu( 'footer_menu', 'Footer Menu');
}

add_action('after_setup_theme', 'magazine_support');