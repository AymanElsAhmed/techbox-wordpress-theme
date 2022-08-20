<?php


// Adding Post Thumbnail
add_theme_support('post-thumbnails');


add_theme_support('title-tag');
add_theme_support('custom-logo', array(
    'height' => 480,
    'width'  => 720,
));
add_action('after_setup_theme', 'register_my_menu');
function register_my_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}
