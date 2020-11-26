<?php

/**

 * Setup One Click Child Theme's textdomain.

 *

 * Declare textdomain for this child theme.

 * Translations can be filed in the /languages/ directory.

 */

define('THEME_TEXTDOMAIN', 'twentytwenty');

define('THEME_VERSION', '1.0.5');

define('THEME_CHILD_DIR', get_stylesheet_directory_uri() );

show_admin_bar(false);



if (!defined('ABSPATH')) {

    exit;

}


function twentytwenty_child_styles() {


    wp_enqueue_style( 'twentytwenty-child-styles', get_theme_file_uri( '/assets/css/custom.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

    wp_enqueue_style( 'bootstrap-styles', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

    wp_enqueue_style( 'font-Awesome-styles', get_theme_file_uri( '/assets/css/all.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );



}

add_action( 'wp_enqueue_scripts', 'twentytwenty_child_styles' );




function child_theme_widgets_init() {
    register_sidebar(array(
        'name' => __('top-footer1', THEME_TEXTDOMAIN),
        'id' => 'top-footer1',
        'description' => __('Add widgets here to appear in your footer.', THEME_TEXTDOMAIN),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('top-footer2', THEME_TEXTDOMAIN),
        'id' => 'top-footer2',
        'description' => __('Add widgets here to appear in your footer.', THEME_TEXTDOMAIN),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('top-footer3', THEME_TEXTDOMAIN),
        'id' => 'top-footer3',
        'description' => __('Add widgets here to appear in your footer.', THEME_TEXTDOMAIN),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('top-footer4', THEME_TEXTDOMAIN),
        'id' => 'top-footer4',
        'description' => __('Add widgets here to appear in your footer.', THEME_TEXTDOMAIN),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'child_theme_widgets_init');


?>