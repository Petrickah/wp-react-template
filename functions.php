<?php

add_action('wp_enqueue_scripts', "enqueue_theme_scripts");
function enqueue_theme_scripts() {
    $parent_style = 'react-style';
    wp_enqueue_style( 
        $parent_style, 
        get_template_directory_uri() . '/build/index.css',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'style',
        get_stylesheet_directory_uri() . '/style.css',
        [$parent_style],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'theme-frontend',
        get_stylesheet_directory_uri() . '/build/index.js',
        ['wp-element'],
        wp_get_theme()->get('Version'),
        true
    );
}