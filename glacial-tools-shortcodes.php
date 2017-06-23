<?php
/*
Plugin Name: Glacial Tools
Plugin URI: https://github.com/anthony-marvin/glacial-shortcodes
Description: A series of codes designed to help you better layout pages.
Version: 1.06
Author: Anthony Marvin
Author URI: http://www.glacial.com
License: 
*/

function glacial_includes() {
require_once 'glacial-tools-quicktags.php';
require_once 'glacial-shortcode-functions.php';
}
function add_styles() {
	$g_dir = plugin_dir_url( __FILE__ );
	wp_register_style( 'glacial', $g_dir . 'glacial.css', array(), '', 'all' ); // Core CSS for the plugin.
	wp_enqueue_style( 'glacial' );
}
add_action('init', 'add_styles');
add_action('init', 'glacial_includes');
add_action( 'init', 'register_glacial_shortcodes' );
add_action( 'init', 'add_glacial_quicktags' );
?>