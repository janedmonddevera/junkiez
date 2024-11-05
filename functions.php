<?php

function theme_support(){
    add_theme_support('title-tag');
} 
    add_action('after_setup_theme','theme_support');


function greenermanila_menus(){
    $locations = array(

        'primary' => "sticky-navbar",
        'footer' => "footer items"

    );
    register_nav_menus($locations);
}

add_action('init','greenermanila_menus');
function greenermanila_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('stylesniKylle', get_template_directory_uri() . "/stylesniKylle.css", array(), $version, 'all');
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), '4.5', 'all');
   
    
} 

add_action('wp_enqueue_scripts', 'greenermanila_register_styles');


function greenermanila_register_scripts(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5', 'all', true);
    
    wp_enqueue_script('npm', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", array(), '4.5', 'all', true);
    wp_enqueue_script('npm-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js", array(), '2.0', 'all', true);
    wp_enqueue_script('bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), '4.5', 'all', true);

    wp_enqueue_script('js', get_template_directory_uri() . "/assets/js/main.js", array(), $version, 'all',true);
    wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/7e8116745f.js", array(), '1.0', 'all');
 
}

add_action('wp_enqueue_scripts', 'greenermanila_register_scripts');

?>

