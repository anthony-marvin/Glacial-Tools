<?php
/*
Plugin Name: Glacial Shortcodes
Plugin URI: https://github.com/anthony-marvin/glacial-shortcodes
Description: A series of codes designed to help you better layout pages.
Version: 1.05
Author: Anthony Marvin
Author URI: http://www.glacial.com
License: 
*/
  function add_styles() {
	  $g_dir = plugin_dir_url( __FILE__ );
wp_register_style( 'glacial', $g_dir . 'glacial.css', array(), '', 'all' ); // Core CSS for the plugin.
wp_enqueue_style( 'glacial' );
  }
  
add_action('init', 'add_styles');

function register_glacial_shortcodes() {
add_shortcode( 'g_row', 'glacial_row' );
add_shortcode( 'g_12', 'glacial_12' );
add_shortcode( 'g_11', 'glacial_11' );
add_shortcode( 'g_10', 'glacial_10' );
add_shortcode( 'g_9', 'glacial_9' );
add_shortcode( 'g_8', 'glacial_8' );
add_shortcode( 'g_7', 'glacial_7' );
add_shortcode( 'g_6', 'glacial_6' );
add_shortcode( 'g_5', 'glacial_5' );
add_shortcode( 'g_4', 'glacial_4' );
add_shortcode( 'g_3', 'glacial_3' );
add_shortcode( 'g_2', 'glacial_2' );
add_shortcode( 'g_1', 'glacial_1' );
add_shortcode( 'g_flex', 'glacial_flex' );
add_shortcode( 'g_flex_begin', 'glacial_flex_begin' );
add_shortcode( 'g_flex_end', 'glacial_flex_end' );
add_shortcode( 'g_video', 'glacial_responsive_video' );
add_shortcode( 'g-12', 'glacial_12' );
add_shortcode( 'g-11', 'glacial_11' );
add_shortcode( 'g-10', 'glacial_10' );
add_shortcode( 'g-9', 'glacial_9' );
add_shortcode( 'g-8', 'glacial_8' );
add_shortcode( 'g-7', 'glacial_7' );
add_shortcode( 'g-6', 'glacial_6' );
add_shortcode( 'g-5', 'glacial_5' );
add_shortcode( 'g-4', 'glacial_4' );
add_shortcode( 'g-3', 'glacial_3' );
add_shortcode( 'g-2', 'glacial_2' );
add_shortcode( 'g-1', 'glacial_1' );
add_shortcode( 'g-flex', 'glacial_flex' );
add_shortcode( 'g-flex-begin', 'glacial_flex_begin' );
add_shortcode( 'g-flex-end', 'glacial_flex_end' );
add_shortcode( 'g-video', 'glacial_responsive_video' );
//add_shortcode( '', '' );

}
add_action( 'init', 'register_glacial_shortcodes' );

function glacial_row( $atts = '', $content = null ) {
	$content = str_replace('<br />', '', $content);
	$content = '<div class="g-row">' . do_shortcode( $content ) . '</div>';
	return $content;

}
function glacial_12( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-12">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_11( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-11">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_10( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-10">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_9( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-9">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_8( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-8">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_7( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-7">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_6( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-6">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_5( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-5">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_4( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-4">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_3( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-3">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_2( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-2">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_1( $atts = '', $content = null) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-col g-col-1">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_responsive_video( $atts = '', content = null ) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-resp-video">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_flex( $atts = '', content = null ) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-flex">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_flex_begin( $atts = '', content = null ) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-flex begin">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_flex_end( $atts = '', content = null ) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-flex end">' . do_shortcode( $content ) . '</div>';
	return $content;
}

?>