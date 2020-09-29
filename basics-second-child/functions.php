<?php
/**
 * Basics Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Basics Child
 * @since Basics Child 1.0
 */

/*
* Loads the Options Panel
*
* If you're loading from a child theme use stylesheet_directory
* instead of template_directory
*/

// define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/option-framework/' );
// require_once dirname( __FILE__ ) . '/option-framework/options-framework.php';

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css');
}

 