<?php

function magazine_custom_post(){
    $magazine_label = array(
        'name'     => __('Magazines', 'textdomain'),
        'singular_name' => __('Magazine', 'textdomain'),
        'add_new'    => __('Add Magazine', 'textdomain'),
        'edit_item'   => __('Edit Magazine', 'textdomain'),
        'add_new_item' => __('Add New Magazine', 'textdomain'),
        'all_items'   => __('Magazines', 'textdomain'),
    );
    $magazine_args = array(
        'labels' => $magazine_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'taxonomies' => array('category'),
    );
    register_post_type('magazines', $magazine_args);

    $podcast_label = array(
        'name'     => __('Podcasts', 'textdomain'),
        'singular_name' => __('Podcast', 'textdomain'),
        'add_new'    => __('Add Podcast', 'textdomain'),
        'edit_item'   => __('Edit Podcast', 'textdomain'),
        'add_new_item' => __('Add New Podcast', 'textdomain'),
        'all_items'   => __('Podcasts', 'textdomain'),
    );
    $podcast_args = array(
        'labels' => $podcast_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'excerpt')
    );
    register_post_type('podcasts', $podcast_args);

    $author_label = array(
        'name'     => __('Authors', 'textdomain'),
        'singular_name' => __('Authors', 'textdomain'),
        'add_new'    => __('Add Authors', 'textdomain'),
        'edit_item'   => __('Edit Authors', 'textdomain'),
        'add_new_item' => __('Add New Authors', 'textdomain'),
        'all_items'   => __('Authors', 'textdomain'),
    );
    $author_args = array(
        'labels' => $author_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'excerpt')
    );
    register_post_type('authors', $author_args);

}
add_action('init', 'magazine_custom_post');

?>