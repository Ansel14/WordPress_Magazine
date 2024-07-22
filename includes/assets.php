<?php
function magazine_assets(){
    wp_enqueue_style('magazine-style', get_template_directory_uri() . "/style/style.css", microtime());
    wp_enqueue_script('magazine-script', get_template_directory_uri() . "/script/script.js", microtime(), [], true );
}
add_action('wp_enqueue_scripts', 'magazine_assets');