<?php
/**
 * BNSBC Options
 *
 * Settings page for the BNS Body Classes plugin.
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Options
 * @since       0.2
 *
 * @link        http://buynowshop.com/plugins/bns-body-classes/
 * @link        https://github.com/Cais/bns-body-classes/
 * @link        http://wordpress.org/extend/plugins/bns-body-classes
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2012-2015, Edward Caissie
 *
 * Thanks to Samuel Wood aka Otto42 and his post at http://ottopress.com/2009/wordpress-settings-api-tutorial
 *
 * @version     0.2.1
 * @date        February 6, 2012
 * Corrected issue with initial empty array being fed to the `implode` function
 *
 * @version     0.4
 * @date        December 12, 2012
 * Refactored to more appropriate naming conventions
 *
 * @version     0.5
 * @date        April 1, 2013
 * Code formatting and code block termination comments
 *
 * @version     0.6
 * @date        July 14, 2013
 * Refactored init functions into their own their own method to be called
 *
 * @todo        Sort out validations required (CSS class cannot start with a number, etc.)
 * @todo        Add checkbox options for the Calendar related classes
 */

/**
 * BNSBC Add Admin Page
 * Add the admin options page
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Options
 *
 * @uses        add_options_page
 */
function bnsbc_add_admin_page() {
	add_options_page(
		'BNS Body Classes',
		'BNS Body Classes',
		'manage_options',
		'bnsbc',
		'bnsbc_options_page'
	);
}

/** End function - add admin page */
add_action( 'admin_menu', 'bnsbc_add_admin_page' );


/**
 * Options Page
 * Display the admin options page
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Options
 *
 * @uses        _e
 * @uses        do_settings_sections
 * @uses        esc_attr_e
 * @uses        settings_fields
 */
function bnsbc_options_page() {
	?>

	<div>
		<h2>
			<?php _e( 'BNS Body Classes Options and Settings', 'bns-body-classes' ); ?>
		</h2>

		<?php _e( 'Options and settings related to the BNS Body Classes plugin.', 'bns-body-classes' ); ?>

		<form action="options.php" method="post">

			<?php
			settings_fields( 'bnsbc_custom_classes' );
			do_settings_sections( 'bnsbc' ); ?>

			<input name="Submit" type="submit" value="<?php esc_attr_e( 'Save Changes', 'bns-body-classes' ); ?>" />

		</form>
		<!-- End form -->

	</div>

	<?php
}

/** End function - options page */


/**
 * BNSBC Admin Init
 * Register option settings, sections, and inputs
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNS_Options
 *
 * @uses        add_bnsbc_custom_classes
 */
function bnsbc_admin_init() {
	/** Add BNSBC Custom Classes */
	add_bnsbc_custom_classes();

}

/** End function - admin init */
add_action( 'admin_init', 'bnsbc_admin_init' );


/**
 * Add BNSBC Custom Classes
 * Add option settings, sections, and inputs for custom classes
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNS_Options
 *
 * @uses        __
 * @uses        add_settings_field
 * @uses        add_settings_section
 * @uses        register_setting
 */
function add_bnsbc_custom_classes() {
	/** Add Custom Classes Option */
	register_setting(
		'bnsbc_custom_classes',
		'bnsbc_custom_classes_field',
		'bnsbc_custom_classes_validator'
	);
	add_settings_section(
		'add_custom_classes',
		__( 'Add Custom Classes', 'bns-body-classes' ),
		'add_custom_classes_text',
		'bnsbc'
	);
	add_settings_field(
		'custom_classes_text_string',
		__( 'Custom Classes', 'bns-body-classes' ),
		'custom_classes_input',
		'bnsbc',
		'add_custom_classes'
	);
}

/** End function - add bnsbc custom classes */


/**
 * Add Custom Classes Text
 * Displays as a message for the input field
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Options
 *
 * @uses        __
 */
function add_custom_classes_text() {
	$text = __( 'Enter your custom classes (separated by commas) into the text field and click the "Save Changes" button.', 'bns-body-classes' );
	printf( '<p>%1$s</p>', $text );
}

/** End function - add custom classes text */


/**
 * Custom Classes Input
 * The input field for the custom classes
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Options
 *
 * @uses        get_option
 */
function custom_classes_input() {
	$options = get_option( 'bnsbc_custom_classes_field' );
	echo "<input id='custom_classes_text_string' name='bnsbc_custom_classes_field[text_string]' size='40' type='text' value='{$options['text_string']}' />";
}

/** End function - custom classes input */


/**
 * BNSBC Custom Classes Validator
 * Validate the data entered for the option
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Options
 *
 * @uses        get_option
 */
function bnsbc_custom_classes_validator( $input ) {
	$options                = get_option( 'bnsbc_custom_classes_field' );
	$options['text_string'] = trim( $input['text_string'] );

	return $options;
}

/** End function - custom classes validator */


/**
 * BNS Body Classes Option Classes
 * Add classes set in the BNS Body Classes Options page
 *
 * @since   0.2
 *
 * @param   $classes
 *
 * @return  array
 *
 * @version 0.2.1
 * Corrected issue with initial empty array being fed to the `implode` function
 *
 * @version 0.4
 * @date    December 12, 2012
 * Added conditional check on `option_classes`
 */
function bnsbc_option_classes( $classes ) {
	$option_classes = get_option( 'bnsbc_custom_classes_field' );
	if ( $option_classes ) {
		/** Convert array to string */
		$added_classes = strtolower( implode( ' ', $option_classes ) );
		/** Replace commas with spaces */
		$added_classes = preg_replace( '/[,]/', ' ', $added_classes );
		/** Replace whitespace with a single space */
		$added_classes = preg_replace( '/\s\s+/', ' ', $added_classes );
		/** Add to $classes and return */
		$classes[] = $added_classes;
	}

	/** End if - option classes */

	return $classes;

}

/** End function - options classes */
add_filter( 'body_class', 'bnsbc_option_classes' );