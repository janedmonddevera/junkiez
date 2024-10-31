<?php

function greenermanila_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), '4.5', 'all');
    wp_enqueue_style('fontawesome', "https://kit.fontawesome.com/7e8116745f.js", array(), '1.0', 'all');
 
    
} 

add_action('wp_enqueue_scripts', 'greenermanila_register_styles');


function greenermanila_register_scripts(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5', 'all', true);
    
    wp_enqueue_style('npm', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", array(), '4.5', 'all', true);
    wp_enqueue_style('npm-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js", array(), '2.0', 'all', true);
    wp_enqueue_style('bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), '4.5', 'all', true);

}

add_action('wp_enqueue_scripts', 'greenermanila_register_scripts');

?>

