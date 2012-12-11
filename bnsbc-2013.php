<?php
/**
 * BNS Body Classes 2013
 * An extension for the BNS Body Classes plugin adding significant dates for the year 2013.
 *
 * @package     BNS_Body_Classes
 *
 * @link        http://buynowshop.com/plugins/bns-body-classes/
 * @link        https://github.com/Cais/bns-body-classes/
 * @link        http://wordpress.org/extend/plugins/bns-body-classes
 *
 * @version     0.1
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
 */

class BNSBC_2013 {
    /**
     * Constructor
     */
    function __construct() {
        /** Add Body Classes */
        add_filter( 'body_class', array( $this, 'bnsbc_2013_classes' ) );
    }

    /**
     * BNS Body Classes 2013
     *
     */
    function bnsbc_2013_classes( $classes ) {
        $classes[] = $this->Canadian_holidays();

        return $classes;
    }

    /**
     * Holidays
     */
    function Canadian_holidays() {
        $holidays = '';
        /** January */
        if ( '01' == date( 'm' ) ) {
            if ( '02' == date( 'd' ) ) { $holidays .= ' quebec-day-after-new-years-day'; }
            if ( '06' == date( 'd' ) ) { $holidays .= ' epiphany'; }
        }
        $holidays .= ' test-2013';

        return $holidays;
    }
}
$bnsbc_2013 = new BNSBC_2013();