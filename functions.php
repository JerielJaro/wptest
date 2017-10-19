<?php

function wptest_script_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/wptest.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/wptest.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'wptest_script_enqueue');


function wptest_theme_setup(){
    add_theme_support('menus');
    register_nav_menu( 'primary', 'primary nav menu' );
    register_nav_menu( 'secondary', 'secondary nav menu' );
}

add_action('init', 'wptest_theme_setup');

?>