<?php

function load_stylesheets()
{
    wp_register_style('custom-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom-style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

?>
