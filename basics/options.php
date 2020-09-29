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

	// Upload Logo
	$options[] = array(
		'name' => __( 'Upload Logo', 'basics-second-child' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Upload Logo', 'basics-first-child' ),
		'desc' => __( 'Upload your logo.', 'basics-first-child' ),
		'id' => 'upload_file',
		'type' => 'upload'
	);

	// Show Sidebar in Front Page
	$options[] = array(
		'name' => __( 'Sidebar Frontpage', 'basics-second-child' ),
		'type' => 'heading'
	);


	// Limit Post in Frontpage
	$options[] = array(
		'name' => __( 'Limit post Frontpage', 'basics-second-child' ),
		'type' => 'heading'
	);

	return $options;
}