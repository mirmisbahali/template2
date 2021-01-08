<?php 


function add_theme_scripts() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), 1.0, 'all');
    wp_enqueue_style('style-css', get_stylesheet_uri(), array(), 1.0, 'all');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1.0, true);
    wp_enqueue_script('scrollex-js', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array(), 1.0, true);
    wp_enqueue_script('scrolly-js', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array(), 1.0, true);
    wp_enqueue_script('browser-js', get_template_directory_uri() . '/assets/js/browser.min.js', array(), 1.0, true);
    wp_enqueue_script('breakpoints-js', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), 1.0, true);
    wp_enqueue_script('util-js', get_template_directory_uri() . 'assets/js/util.js', array(), 1.0, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), 1.0, true);

}

add_action('wp_enqueue_scripts', 'add_theme_scripts')

?>