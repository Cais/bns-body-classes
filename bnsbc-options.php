<?php
/**
 * BNSBC Options
 *
 * Settings page for the BNS Body Classes plugin.
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Options
 *
 * @link        http://buynowshop.com/plugins/bns-body-classes/
 * @link        https://github.com/Cais/bns-body-classes/
 * @link        http://wordpress.org/extend/plugins/bns-body-classes
 *
 * @since       0.2
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2012, Edward Caissie
 *
 * Thanks to Samuel Wood aka Otto42 and his post at http://ottopress.com/2009/wordpress-settings-api-tutorial
 *
 * Last revised February 6, 2012
 * @version     0.2.1
 * Corrected issue with initial empty array being fed to the `implode` function
 *
 * @todo Fix the copy-pasta look of this file
 * @todo Complete the documentation for each function
 * @todo Add more options
 * @todo Make i18n compatible
 * @todo Sort out validations required (CSS class cannot start with a number, etc.)
 */

// add the admin options page
add_action( 'admin_menu', 'plugin_admin_add_page' );
function plugin_admin_add_page() {
    add_options_page( 'BNS Body Classes Settings', 'BNS Body Classes Settings', 'manage_options', 'plugin', 'plugin_options_page' );
}

// display the admin options page
function plugin_options_page() { ?>
    <div>
        <h2><?php _e ( 'BNS Body Classes Settings and Options', 'bns-bc' ); ?></h2>
        <?php _e( 'Options relating to the BNS Body Classes Plugin.', 'bns-bc' ); ?>
        <form action="options.php" method="post">
            <?php settings_fields( 'plugin_options' ); ?>
            <?php do_settings_sections( 'plugin' ); ?>
            <input name="Submit" type="submit" value="<?php esc_attr_e( 'Save Changes', 'bns-bc' ); ?>" />
        </form>
    </div>
<?php }

// add the admin settings and such
add_action( 'admin_init', 'plugin_admin_init' );
function plugin_admin_init(){
    register_setting( 'plugin_options', 'plugin_options', 'plugin_options_validate' );
    add_settings_section( 'plugin_main', 'Main Settings', 'plugin_section_text', 'plugin' );
    add_settings_field( 'plugin_text_string', 'Plugin Text Input', 'plugin_setting_string', 'plugin', 'plugin_main' );
}

function plugin_section_text() {
    $text = 'Main description of this section here.';
    printf( __( '<p>%1$s</p>', 'bns-bc' ), $text );
}

function plugin_setting_string() {
    $options = get_option( 'plugin_options' );
    echo "<input id='plugin_text_string' name='plugin_options[text_string]' size='40' type='text' value='{$options['text_string']}' />";
}

// validate our options
function plugin_options_validate( $input ) {
    $options = get_option( 'plugin_options' );
    $options['text_string'] = trim( $input['text_string'] );
    return $options;
}

/**
 * BNS Body Classes Option Classes
 *
 * Add classes set in the BNS Body Classes Options page
 *
 * @since   0.2
 * @param   $classes
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
    $option_classes = get_option( 'plugin_options' );
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

    return $classes;
}
add_filter( 'body_class', 'bnsbc_option_classes' );