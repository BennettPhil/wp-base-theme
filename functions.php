<?php

include('basetheme/bootstrap.php');

use BaseTheme\PostTypes\BasePostType;

//Set ACF Save Directory
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/basetheme/acf-fields';
    // return
    return $path;
}

//Enque CSS (Based on Bootstrap 4 Alpha)
wp_enqueue_style('main', get_stylesheet_directory_uri().'/assets/css/main.css');

//Define menu
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu( 'primary', 'Primary Menu');
}

//An Example Post Type
//Define Custom Post Types
$example = new BasePostType('Example');


