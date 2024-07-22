<?php

function author_select_field( $field ) {
    
    $author = new WP_Query( array(
        'post_type' => 'authors',
        'posts_per_page' => -1, // Retrieve all players
    ));  
    $options = array();
    if ( $author->have_posts() ) {
        while ( $author->have_posts() ) {
            $author->the_post();
            $options[get_the_ID()] = get_the_title();
        }
    }
    wp_reset_postdata();
    
    $field['choices'] = $options;
    
    return $field;
    }
    add_filter( 'acf/load_field/name=author', 'author_select_field' );