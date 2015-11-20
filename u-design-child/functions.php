<?php 
/**
 * @package WordPress
 * @subpackage U-Design
 */
if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**** BEGIN ADDING YOUR CODE BELOW: ****/

function theme_enqueue_styles() {
    wp_enqueue_style( 'bootstrap-styles', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function my_wp_nav_menu_args( $args = '' ) {
if( is_user_logged_in() ) { 
	$args['menu'] = 'logged-in';
} else { 
	$args['menu'] = 'logged-out';
} 
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

add_action( 'wp_enqueue_scripts', 'add_my_script_jquery' );
function add_my_script_jquery() {
    wp_enqueue_script(
        'custom_script_jquery', 
        get_template_directory_uri() . '/../u-design-child/js/plugins/jquery1.11.0.min.js', 
        array('jquery'), '', true 
    );
}

add_action( 'wp_enqueue_scripts', 'add_my_script_bootstrap' );
function add_my_script_bootstrap() {
    wp_enqueue_script(
        'custom_script_bootstrap', 
        get_template_directory_uri() . '/../u-design-child/js/plugins/bootstrap.min.js', 
        array('jquery'), '', true  
    );
}

add_action( 'wp_enqueue_scripts', 'add_my_script_jquery_min' );
function add_my_script_jquery_min() {
    wp_enqueue_script(
        'custom_script_jquery_min', 
        get_template_directory_uri() . '/../u-design-child/js/plugins/jquery.easing.1.3.min.js', 
        array('jquery'), '', true  
    );
}

add_action( 'wp_enqueue_scripts', 'add_my_script_moderniz' );
function add_my_script_moderniz() {
    wp_enqueue_script(
        'custom_script_moderniz', 
        get_template_directory_uri() . '/../u-design-child/js/plugins/modernizr.custom.min.js', 
        array('jquery'), '', true  
    );
}

add_action( 'wp_enqueue_scripts', 'add_my_script_plugins' );
function add_my_script_plugins() {
    wp_enqueue_script(
        'custom_script_plugins', 
        get_template_directory_uri() . '/../u-design-child/js/plugins/plugins.min.js', 
        array('jquery'), '', true  
    );
}

add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'custom_script', 
        get_template_directory_uri() . '/../u-design-child/js/custom.js', 
        array('jquery'), '', true  
    );
}