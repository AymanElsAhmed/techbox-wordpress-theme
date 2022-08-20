<?php





/**
 * Essential theme supports
 * */
// function theme_setup(){
//     /** automatic feed link*/
//     add_theme_support( 'automatic-feed-links' );
 
//     /** tag-title **/
//     add_theme_support( 'title-tag' );
 
//     /** post formats */
//     $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
//     add_theme_support( 'post-formats', $post_formats);
 
//     /** post thumbnail **/
//     add_theme_support( 'post-thumbnails' );
 
//     /** HTML5 support **/
//     add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
 
//     /** refresh widgest **/
//     add_theme_support( 'customize-selective-refresh-widgets' );
 
//     /** custom background **/
//     $bg_defaults = array(
//         'default-image'          => '',
//         'default-preset'         => 'default',
//         'default-size'           => 'cover',
//         'default-repeat'         => 'no-repeat',
//         'default-attachment'     => 'scroll',
//     );
//     add_theme_support( 'custom-background', $bg_defaults );
 
//     /** custom header **/
//     $header_defaults = array(
//         'default-image'          => '',
//         'width'                  => 300,
//         'height'                 => 60,
//         'flex-height'            => true,
//         'flex-width'             => true,
//         'default-text-color'     => '',
//         'header-text'            => true,
//         'uploads'                => true,
//     );
//     add_theme_support( 'custom-header', $header_defaults );
 
//     /** custom log **/
//     add_theme_support( 'custom-logo', array(
//         'height'      => 60,
//         'width'       => 400,
//         'flex-height' => true,
//         'flex-width'  => true,
//         'header-text' => array( 'site-title', 'site-description' ),
//     ) );
 
 
 
// }
// add_action('after_setup_theme','theme_setup');


















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
