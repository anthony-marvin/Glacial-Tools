<?php
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
function glacial_responsive_video( $atts = '', $content = null ) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-resp-video">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_flex( $atts = '', $content = null ) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-flex">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_flex_begin( $atts = '', $content = null ) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-flex begin">' . do_shortcode( $content ) . '</div>';
	return $content;
}
function glacial_flex_end( $atts = '', $content = null ) {
	$content = wpautop( trim( $content ) );
	$content = '<div class="g-flex end">' . do_shortcode( $content ) . '</div>';
	return $content;
}
?>