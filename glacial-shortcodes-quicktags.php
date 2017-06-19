<?php
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
add_shortcode( 'g-row', 'glacial_row' );
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
function add_glacial_scripts() {
if ( wp_script_is( 'quicktags' ) ) {
	?>
<script type="text/javascript">
QTags.addButton( 'g-row', 'g-row', '[g-row]', '[/g-row]', '', 'container row to hold your columns' );
// QTags.addButton('id', 'title', 'opening tag', 'closing tag', 'title/description')
QTags.addButton( 'g-12', 'g-12', '[g-12]', '[/g-12]', '', '12 wide column');
QTags.addButton( 'g-11', 'g-11', '[g-11]', '[/g-11]', '',  '11 wide column');
QTags.addButton( 'g-10', 'g-10', '[g-10]', '[/g-10]', '', '10 wide column');
QTags.addButton( 'g-9', 'g-9', '[g-9]', '[/g-9]', '', '9 wide column');
QTags.addButton( 'g-8', 'g-8', '[g-8]', '[/g-8]', '', '8 wide column');
QTags.addButton( 'g-7', 'g-7', '[g-7]', '[/g-7]', '', '7 wide column');
QTags.addButton( 'g-6', 'g-6', '[g-6]', '[/g-6]', '', '6 wide column');
QTags.addButton( 'g-5', 'g-5', '[g-5]', '[/g-5]', '', '5 wide column');
QTags.addButton( 'g-4', 'g-4', '[g-4]', '[/g-4]', '', '4 wide column');
QTags.addButton( 'g-3', 'g-3', '[g-3]', '[/g-3]', '', '3 wide column');
QTags.addButton( 'g-2', 'g-2', '[g-2]', '[/g-2]', '', '2 wide column');
QTags.addButton( 'g-1', 'g-1', '[g-1]', '[/g-1]', '', '1 wide column');
QTags.addButton( 'g-flex', 'g-flex', '[g-flex]', '[/g-flex]', '', 'Creates a flexible container. Centers content inside flex box.');
QTags.addButton( 'g-flex-begin', 'g-flex-begin', '[g-flex-begin]', '[/g-flex-begin]', '', 'Creates a flexible container. Items start at the beginning of flex box.');
QTags.addButton( 'g-flex-end', 'g-flex-end', '[g-flex-end]', '[/g-flex-end]', '', 'Creates a flexible container. Items start at the end of flex box.');
QTags.addButton( 'g-video', 'g-video', '[g-video]', '[/g-video]', '', 'Creates a responsive div to hold your video.');
</script>
<?
}
}
?>