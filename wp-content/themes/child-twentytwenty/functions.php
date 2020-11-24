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

// function oneclick_child_theme_setup() {

// 	load_child_theme_textdomain( 'oneclick-child', get_stylesheet_directory() . '/languages' );

// }

// add_action( 'after_setup_theme', 'oneclick_child_theme_setup' );

// function twentytwenty_child_enqueue_styles() {

    // wp_enqueue_style( THEME_TEXTDOMAIN .'-child-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), THEME_VERSION, 'screen');

    // wp_enqueue_style( 'child-custom', get_template_directory_uri() . '/assets/css/custom.css', null, $theme_version );

    // wp_enqueue_style( THEME_TEXTDOMAIN .'-child-responsive-css', get_stylesheet_directory_uri() . '/assets/css/css_responsive.css', array(), THEME_VERSION, 'screen' );



    // wp_enqueue_style( THEME_TEXTDOMAIN .'-child-fonts-css', get_stylesheet_directory_uri() . '/assets/css/custom_fonts.css', array(), THEME_VERSION, 'screen' );

    // wp_enqueue_style( THEME_TEXTDOMAIN .'-child-fonts-css', get_stylesheet_directory_uri() . '/assets/css/fullpage.css', array(), THEME_VERSION, 'screen' );

    // wp_enqueue_style( THEME_TEXTDOMAIN .'-child-fullpage-css', get_stylesheet_directory_uri() . '/assets/plugin/fullPage/fullpage.min.css', array(), THEME_VERSION, 'screen' );

    // wp_enqueue_style( THEME_TEXTDOMAIN .'child-style-fonts_awesome-css', get_stylesheet_directory_uri() . '/asset/css/font-awesome.css', array('parent-style') );

    // wp_enqueue_style( 'child-jquery-custom-js', get_stylesheet_directory_uri() . '/asset/js/custom_js.js', array('parent-style') );

    // wp_enqueue_script(THEME_TEXTDOMAIN . '-child-js', get_stylesheet_directory_uri() . '/assets/js/custom_js.js', array(), THEME_VERSION, true);

    // wp_enqueue_script(THEME_TEXTDOMAIN . '-child-js', get_stylesheet_directory_uri() . '/assets/js/fullpage.js', array(), THEME_VERSION, true);

    // wp_enqueue_script(THEME_TEXTDOMAIN . '-child-fullpage-js', get_stylesheet_directory_uri() . '/assets/plugin/fullPage/fullpage.js', array(), THEME_VERSION, true);

  

    

// }

//add_action('wp_enqueue_scripts', 'twentytwenty_child_enqueue_styles', 99);

function twentytwenty_child_styles() {


    wp_enqueue_style( 'twentytwenty-child-styles', get_theme_file_uri( '/assets/css/custom.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

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