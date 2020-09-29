<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'basics-second-child'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	$options = array();
	$arr_sidebar = array(
		'show' => __( 'Show', 'basics-second-child' ),
		'hide' => __( 'Hide', 'basics-second-child' ),
	);

	$arr_post = array(
		'1' => __( '1', 'basics-second-child' ),
		'2' => __( '2', 'basics-second-child' ),
		'3' => __( '3', 'basics-second-child' ),
		'4' => __( '4', 'basics-second-child' ),
		'5' => __( '5', 'basics-second-child' ),
		'10' => __( '10', 'basics-second-child' ),
	);

	// Upload Logo
	$options[] = array(
		'name' => __( 'Upload Logo', 'basics-second-child' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Upload Logo', 'basics-second-child' ),
		'desc' => __( 'Upload your logo.', 'basics-second-child' ),
		'id' => 'upload_logo',
		'type' => 'upload'
	);


	// Sidebar Frontpage
	$options[] = array(
		'name' => __( 'Sidebar Frontpage', 'basics-second-child' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Sidebar Frontpage', 'basics-second-child' ),
		'desc' => __( 'Sidebar Frontpage.', 'basics-second-child' ),
		'id' => 'sidebar_frontpage',
		'std' => 'show',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $arr_sidebar
	);

	// Limit Post Frontpage
	$options[] = array(
		'name' => __( 'Limit Post Frontpage', 'basics-second-child' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Limit Post Frontpage', 'basics-second-child' ),
		'desc' => __( 'Limit Post Frontpage.', 'basics-second-child' ),
		'id' => 'limit_post',
		'std' => 'show',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $arr_post
	);


	return $options;
}