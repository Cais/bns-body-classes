<?php
/*
Plugin Name: BNS Body Classes
Plugin URI: http://buynowshop.com/plugins/bns-body-classes/
Description: Simple plugin that adds classes to the `body_class` output upon activation.
Version: 0.2.2
Text Domain: bns-bc
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/**
 * BNS Body Classes
 *
 * Simple plugin that adds classes to the `body_class` output upon activation.
 *
 * @package     BNS_Body_Classes
 *
 * @link        http://buynowshop.com/plugins/bns-body-classes/
 * @link        https://github.com/Cais/bns-body-classes/
 * @link        http://wordpress.org/extend/plugins/bns-body-classes
 *
 * @version     0.2.2
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2012, Edward Caissie
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Last revised January 29, 2012
 * @internal    Project To-Do List
 * @todo add options to specify when custom class is applied (i.e.: which template types it applies to)
 * @todo Justify this is not just another Mallory-Everest Plugin!
 */

/**
 * BNS Body Classes
 *
 * Add additional classes to the core `body_class` function
 *
 * @package BNS_Body_Classes
 * @since   0.1
 *
 * @param   $classes
 *
 * @return  array - $classes, an array of classes to be added to `body_class`
 */
add_filter( 'body_class', 'bns_body_classes' );
function bns_body_classes( $classes ) {
        /** Add self reference to default body classes; also serves as very simple example */
        $classes[] = 'plugin-bns-body-classes';

        /** Add child-theme-<Name> to default body classes */
        if ( is_child_theme() ) {
            $classes[] = 'child-theme-' . sanitize_html_class( get_option( 'stylesheet' ) );
        }

        /** Add theme-<Name> to default body classes */
        $classes[] = 'theme-' . sanitize_html_class( get_option( 'template' ) );

        $classes = apply_filters( 'bns_body_classes', $classes );
        return $classes;
}

/** Add BNSBC Options */
include 'bnsbc-options.php';
?>