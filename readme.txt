=== Glacial Shortcodes ===
Contributors: Anthony Marvin, Darrel Grosvalet
Tags: shortcodes
Requires at least: 4.0.0
Tested up to: 4.8.0
Stable Tag: 2.0

Glacial Shortcodes is a small suite of tools designed to make client and project managers lives easier.

== Description ==

== Installation ==
  Simply unzip the folder into the plugins space on your Wordpress Installation, then activate it through the options menu.
  
== Frequently Asked Questions ==
= Using Shortcodes
  The best way to use shortcodes is to type them like this [your shortcode]. Glacial shortcodes are very simple and easy to use. To use them, simply type [g_*] and to finish using a glacial shortcode, type [/g_*], where the * are the particular code you want. Glacial Shortcodes are based on responsive, 12 section grid layouts, much like bootstrap and webflow are based on.
= EX
    [g_row][g_10]*content*[/g_10][g_2]*content*[/g_2][/g_row]

= Codes and what they do!
[g_row] - Defines a row. Translates to <div class="g-row">
[g_12] - Defines a 12 wide section column. Takes up the full row. Translates to <div class="g-col g-col-12">
[g_11] - Defines an 11 wide section column. Takes up 11/12 of a row. Translates to <div class="g-col g-col-11">
[g_10] - Defines a 10 wide section column. Takes up 10/12 of a row. Translates to <div class="g-col g-col-10">
[g_9] - Defines a 9 wide section column. Takes up 9/12 of a row. Translates to <div class="g-col g-col-9">
[g_8] - Defines an 8 wide section column. Takes up 8/12 of a row. Translates to <div class="g-col g-col-8">
[g_7] - Defines a 7 wide section column. Takes up 7/12 of a row. Translates to <div class="g-col g-col-7">
[g_6] - Defines a 6 wide section column. Takes up 6/12 of a row. Translates to <div class="g-col g-col-6">
[g_5] - Defines a 5 wide section column. Takes up 5/12 of a row. Translates to <div class="g-col g-col-5">
[g_4] - Defines a 4 wide section column. Takes up 4/12 of a row. Translates to <div class="g-col g-col-4">
[g_3] - Defines a 3 wide section column. Takes up 3/12 of a row. Translates to <div class="g-col g-col-3">
[g_2] - Defines a 2 wide section column. Takes up 2/12 of a row. Translates to <div class="g-col g-col-2">
[g_1] - Defines a 1 wide section column. Takes up 1/12 of a row. Translates to <div class="g-col g-col-1">

[g_flex] - Defines a flexible box with the items centered. Translates to <div class="g-flex">
[g_flex_start] - Defines a flexible box with the items set to the start of the box. Translates to <div class="g-flex begin">
[g_flex_end] - Defines a flexible box with the items set to the end of the box.  Translates to <div class="g-flex end">
[g_video] - Centers and makes sure the video is responsive to an extent. Translates to <div class="g-video">

== Screenshots ==

== Changelog ==
= 2.0 =
* Renamed to Glacial Tools
= 1.06 =
* Maintenance update. Updated the files to make sure that it could be better maintained in the future.
= 1.05 =
* Added flexbox items and responsive video div classes
= 1.04 =
* Updated and reformatted readme
= 1.03 = 
* Added redundant codes to make sure that the shortcodes could be used properly.

= 1.02 = 
* Cleaned up code.
* Added Readme File.
= 1.01 =
* Added a register function to the shortcodes to ensure that they load correctly.
= 1.0 =
* Initial Commit
