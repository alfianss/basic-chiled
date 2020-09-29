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
 * If you are making your theme translatable, you should replace 'basics-first-child'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	$options = array();

	// Upload Logo
	$options[] = array(
		'name' => __( 'Upload Logo', 'basics-first-child' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Upload Logo', 'basics-first-child' ),
		'desc' => __( 'Upload your logo.', 'basics-first-child' ),
		'id' => 'upload_logo',
		'type' => 'upload'
	);


	// Maintenance Mode
	$options[] = array(
		'name' => __( 'Maintenance Mode', 'basics-first-child' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Maintenance Mode', 'theme-textdomain' ),
		'desc' => __( 'Maintenance Mode, defaults to false.', 'theme-textdomain' ),
		'id' => 'maintenance_mode',
		'std' => '0',
		'type' => 'checkbox'
	);

	return $options;
}