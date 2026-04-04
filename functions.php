<?php
function kareena_theme_setup() {
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_post_type_support('post', 'excerpt');
}
add_action('after_setup_theme', 'kareena_theme_setup');


// 🔥 ADD THIS FOR CSS
function kareena_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'kareena_enqueue_styles');

