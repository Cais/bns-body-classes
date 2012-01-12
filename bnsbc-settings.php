<?php
/**
 * BNSBC Settings
 *
 * Settings page for the BNS Body Classes plugin.
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Settings
 *
 * @link        http://buynowshop.com/plugins/bns-body-classes/
 * @link        https://github.com/Cais/bns-body-classes/
 * @link        http://wordpress.org/extend/plugins/bns-body-classes
 *
 * @since       0.2
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2012, Edward Caissie
 */

/**
 * Add BNSBC Admin Menu Item
 */
function bnsbc_admin_menu_item(){
    add_options_page( 'BNS Body Classes Options', 'BNS Body Classes', 'manage_options', 'bnsbc_body_classes_plugin', 'bnsbc_options_page' );
}
add_action( 'admin_menu', 'bnsbc_admin_menu_item' );

/**
 * Display BNSBC Options Page
 */
function bnsbc_options_page(){ ?>
    <div>
        <h2>BNS Body Classes Options Page</h2>
        This is where you can add your own custom body classes.
        <form action="options.php" method="post">
            <?php settings_fields( 'bnsbc_plugin_options' ); ?>
            <?php do_settings_sections( 'bnsbc_body_classes_plugin' ); ?>

            <input name="Submit" type="submit" value="<?php esc_attr_e( 'Save Classes!', 'bns-bc' ); ?>"
        </form>
    </div>
<?php }

/**
 * Add the Admin Settings
 */
add_action( 'admin_init', 'bnsbc_plugin_admin_init' );
function bnsbc_plugin_admin_init() {
    register_setting( 'bnsbc_plugin_options', 'bnsbc_plugin_options', 'bnsbc_plugin_options_validate' );
    add_settings_section( 'bnsbc_plugin_main', 'BNS Body Classes Main Settings Menu', 'bnsbc_plugin_section_text', 'bnsbc_body_classes_plugin' );
    add_settings_field( 'bnsbc_plugin_text_string', 'BNS Body Classes Input Area', 'bnsbc_plugin_setting_string', 'bnsbc_body_classes_plugin', 'bnsbc_plugin_main' );
}

/**
 * Callback function for `add_settings_section`
 */
function bnsbc_plugin_section_text() {
    echo '<p>Main description of this section here.</p>';
}

/**
 * Callback function for `bnsbc_plugin_setting_string`
 */
function bnsbc_plugin_setting_string(){
    $options = get_option( 'bnsbc_plugin_options' );
    echo "<input id='bnsbc_plugin_text_string' name='bnsbc_plugin_options[text_string]' size='40' type='text' value='{$options['text_string']}' />";
}

/**
 * Validation callback for `bnsbc_plugin_options_validate`
 *
 * @param   $input
 * @return  array|mixed|void
 *
 * @todo Make sure the validation being done is relevant to the input
 */
function bnsbc_plugin_options_validate( $input ){
    $options = get_option('bnsbc_plugin_options');
    $options['text_string'] = trim( $input['text_string'] );
    /* if( !preg_match( '/^[a-z0-9]{32}$/i', $options['text_string'] ) ) {
        $options['text_string'] = '';
    } */
    return $options;
}
?>