<?php

add_action('wp_enqueue_scripts', "enqueue_theme_js");
function enqueue_theme_js() {
    wp_enqueue_script(
        'theme-frontend',
        get_stylesheet_directory_uri() . '/build/index.js',
        ['wp-element'],
        null,
        true
    );
}