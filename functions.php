<?php

add_action('init', function () {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
});

// ---------------------------------------------------
// The Excerpt length

function web_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'web_custom_excerpt_length', 999 );


// ---------------------------------------------------

// Theme jQuery fil

function allstart_scripts() {
    wp_register_script('theme-script', get_template_directory_uri() . '/js/theme-min.js', array('jquery'));
    wp_enqueue_script('theme-script');
}
add_action('wp_enqueue_scripts', 'allstart_scripts');

// ---------------------------------------------------

if (!function_exists('allstart_setup')):
    function allstart_setup() {

        // Fjern elementer i WP
        remove_action( 'wp_head', 'feed_links_extra', 3 );
        remove_action( 'wp_head', 'feed_links' );
        remove_action( 'wp_head', 'wp_shortlink_wp_head' );
        remove_action( 'wp_head', 'rsd_link' );
        remove_action( 'wp_head', 'rest_output_link_wp_head' );
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
        remove_action( 'wp_head', 'wlwmanifest_link' );
        remove_action( 'wp_head', 'wp_generator' );
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
        remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
        remove_action( 'admin_print_styles', 'print_emoji_styles' );




        // HTML5
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Logo
        add_theme_support('custom-logo');

        // Title Tag
        add_theme_support('title-tag');

        // Images
        add_theme_support('post-thumbnails');

        // Menu
        register_nav_menus(array(
            'main-menu' => __('Main Menu', 'allstart-domain'),
        ));
        // Excerpt in pages
        add_post_type_support( 'page', 'excerpt' );

        // Style and Scripts
        add_theme_support( 'html5', array( 'script', 'style' ) );

    }

    add_action('after_setup_theme', 'allstart_setup');
endif;

// Sprogfiler
function allstart_localize_theme() {
  load_theme_textdomain( 'allstart-domain', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'allstart_localize_theme' );

// ---------------------------------------------------

require get_parent_theme_file_path('/inc/functions/functions.php');

require get_parent_theme_file_path('/inc/widgets/widgets.php');

if( class_exists('ACF') ) {
    // ACF
    require get_parent_theme_file_path('/inc/acf/acf.php');
}