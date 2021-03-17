<?php

function remote_scripts() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'remote_scripts');