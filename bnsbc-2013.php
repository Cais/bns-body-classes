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
        add_filter( 'bnsbc_more_classes', array( $this, 'bnsbc_2013_classes' ) );
    }

    /**
     * BNS Body Classes 2013
     *
     */
    function bnsbc_2013_classes() {
        $classes = $this->Canadian_holidays();

        return $classes;
    }

    /**
     * Holidays
     * @internal Source: http://www.timeanddate.com/holidays/canada/2013
     */
    function Canadian_holidays() {
        $holidays = '';
        /** January */
        if ( '01' == date( 'm' ) ) {
            if ( '07' == date( 'd' ) ) { $holidays .= ' orthodox-christmas-day'; }
            if ( '14' == date( 'd' ) ) { $holidays .= ' orthodox-new-year'; }
        }
        /** February */
        if ( '02' == date( 'm' ) ) {
            if ( '02' == date( 'd' ) ) { $holidays .= ' groundhog-day'; }
            if ( '10' == date( 'd' ) ) { $holidays .= ' chinese-new-year'; }
            if ( '11' == date( 'd' ) ) { $holidays .= ' british-columbia family-day'; }
            if ( '14' == date( 'd' ) ) { $holidays .= ' valentines-day'; }
            if ( '18' == date( 'd' ) ) { $holidays .= ' manitoba louis-riel-day'; }
            if ( '18' == date( 'd' ) ) { $holidays .= ' alberta ontario saskatchewan family-day'; }
            if ( '18' == date( 'd' ) ) { $holidays .= ' prince-edward-island islander-day'; }
            if ( '22' == date( 'd' ) ) { $holidays .= ' yukon heritage-day'; }
            if ( '24' == date( 'd' ) ) { $holidays .= ' purim'; }
        }
        /** March */
        if ( '03' == date( 'm' ) ) {
            if ( '10' == date( 'd' ) ) { $holidays .= ' daylight-savings-time first-day'; }
            if ( '17' == date( 'd' ) ) { $holidays .= ' st-patricks-day'; }
            if ( '26' == date( 'd' ) ) { $holidays .= ' passover first-day'; }
            if ( '29' == date( 'd' ) ) { $holidays .= ' good-friday'; }
            if ( '30' == date( 'd' ) ) { $holidays .= ' holy-saturday'; }
            if ( '31' == date( 'd' ) ) { $holidays .= ' easter-sunday'; }
        }
        /** April */
        if ( '04' == date( 'm' ) ) {
            if ( '01' == date( 'd' ) ) { $holidays .= ' easter-monday'; }
            if ( '01' == date( 'd' ) ) { $holidays .= ' april-fools-day'; }
            if ( '02' == date( 'd' ) ) { $holidays .= ' passover last-day'; }
        }
        /** May */
        if ( '05' == date( 'm' ) ) {
            if ( '03' == date( 'd' ) ) { $holidays .= ' orthodox-good-friday'; }
            if ( '04' == date( 'd' ) ) { $holidays .= ' orthodox-holy-saturday'; }
            if ( '05' == date( 'd' ) ) { $holidays .= ' orthodox-easter'; }
            if ( '06' == date( 'd' ) ) { $holidays .= ' orthodox-easter-monday'; }
            if ( '12' == date( 'd' ) ) { $holidays .= ' mothers-day'; }
            if ( '15' == date( 'd' ) ) { $holidays .= ' shavuot'; }
            if ( '20' == date( 'd' ) ) { $holidays .= ' victoria-day'; }
        }
        /** June */
        if ( '06' == date( 'm' ) ) {
            if ( '16' == date( 'd' ) ) { $holidays .= ' fathers-day'; }
            if ( '24' == date( 'd' ) ) { $holidays .= ' quebec st-jean-baptiste-day'; }
            if ( '24' == date( 'd' ) ) { $holidays .= ' newfoundland labrador discovery-day'; }
        }
        /** July */
        if ( '07' == date( 'm' ) ) {
            if ( '01' == date( 'd' ) ) { $holidays .= ' canada-day'; }
            if ( '09' == date( 'd' ) ) { $holidays .= ' nunavut nunavut-day'; }
            if ( '09' == date( 'd' ) ) { $holidays .= ' ramadan first-day'; }
        }
        /** August */
        if ( '08' == date( 'm' ) ) {
            if ( '05' == date( 'd' ) ) { $holidays .= ' ontario simcoe-day'; }
            if ( '05' == date( 'd' ) ) { $holidays .= ' manitoba northwest-territories saskatchewan civic-holiday'; }
            if ( '05' == date( 'd' ) ) { $holidays .= ' alberta heritage-day'; }
            if ( '05' == date( 'd' ) ) { $holidays .= ' nova-scotia prince-edward-island natal-day'; }
            if ( '05' == date( 'd' ) ) { $holidays .= ' british-columbia british-columbia-day'; }
            if ( '19' == date( 'd' ) ) { $holidays .= ' yukon discovery-day'; }
        }
        /** September */
        if ( '09' == date( 'm' ) ) {
            if ( '02' == date( 'd' ) ) { $holidays .= ' labour-day'; }



        }






        $holidays .= ' test-2013';

        return $holidays;
    }
}
$bnsbc_2013 = new BNSBC_2013();