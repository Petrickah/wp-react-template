<?php

add_action('init', 'register_react_assets');
function register_react_assets() {
    $asset_file = require(get_template_directory(__FILE__) . '/build/index.asset.php');
    wp_register_script(
        'react-script',
        get_template_directory_uri() . '/build/index.js',
        $asset_file['depedencies'],
        $asset_file['version'],
        true
    );
    wp_register_script(
        "react-bootstrap", 
        "https://unpkg.com/react-bootstrap@next/dist/react-bootstrap.min.js", 
        ['wp-element'],
        null,
        true
    );
    wp_enqueue_script("react-bootstrap");
    wp_register_style(
        'bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',
        ['react-style'],
        null
    );
    wp_enqueue_style('bootstrap');
}

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
    wp_enqueue_script('react-script');
}