<?php
/*
Plugin Name: BNS Body Classes Calendar Extension
Plugin URI: http://buynowshop.com/plugins/bns-body-classes/
Description: A sample extension to the BNS Body Classes plugin adding calendar classes
Version: 0.4
Text Domain: bns-bc
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/**
 * BNS Body Classes Calendar Extension
 * An example extension to the BNS Body Classes plugin adding calendar classes
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Calendar
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

/**
 * BNSBC Calendar
 *
 * @subpackage  BNSBC_Calandar
 * @since       0.4
 *
 * @internal    Use as a sample only, will not add any classes as is and will be
 * overwritten with each update to the parent plugin BNS Body Classes
 *
 * @return      string - classes as defined by dates
 */
function bnsbc_calendar() {
    $dates = '';
    /** January */
    if ( '01' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
        if ( '31' == date( 'd' ) ) { $dates .= ''; }
    }

    /** February */
    if ( '02' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
    }

    /** March */
    if ( '03' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
        if ( '31' == date( 'd' ) ) { $dates .= ''; }
    }

    /** April */
    if ( '04' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
    }

    /** May */
    if ( '05' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
        if ( '31' == date( 'd' ) ) { $dates .= ''; }
    }

    /** June */
    if ( '01' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
    }

    /** July */
    if ( '07' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
        if ( '31' == date( 'd' ) ) { $dates .= ''; }
    }

    /** August */
    if ( '08' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
        if ( '31' == date( 'd' ) ) { $dates .= ''; }
    }

    /** September */
    if ( '09' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
        if ( '31' == date( 'd' ) ) { $dates .= ''; }
    }

    /** October */
    if ( '10' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
        if ( '31' == date( 'd' ) ) { $dates .= ''; }
    }

    /** November */
    if ( '11' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
        if ( '31' == date( 'd' ) ) { $dates .= ''; }
    }

    /** December */
    if ( '12' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ''; }
        if ( '02' == date( 'd' ) ) { $dates .= ''; }
        if ( '03' == date( 'd' ) ) { $dates .= ''; }
        if ( '04' == date( 'd' ) ) { $dates .= ''; }
        if ( '05' == date( 'd' ) ) { $dates .= ''; }
        if ( '06' == date( 'd' ) ) { $dates .= ''; }
        if ( '07' == date( 'd' ) ) { $dates .= ''; }
        if ( '08' == date( 'd' ) ) { $dates .= ''; }
        if ( '09' == date( 'd' ) ) { $dates .= ''; }
        if ( '10' == date( 'd' ) ) { $dates .= ''; }
        if ( '11' == date( 'd' ) ) { $dates .= ''; }
        if ( '12' == date( 'd' ) ) { $dates .= ''; }
        if ( '13' == date( 'd' ) ) { $dates .= ''; }
        if ( '14' == date( 'd' ) ) { $dates .= ''; }
        if ( '15' == date( 'd' ) ) { $dates .= ''; }
        if ( '16' == date( 'd' ) ) { $dates .= ''; }
        if ( '17' == date( 'd' ) ) { $dates .= ''; }
        if ( '18' == date( 'd' ) ) { $dates .= ''; }
        if ( '19' == date( 'd' ) ) { $dates .= ''; }
        if ( '20' == date( 'd' ) ) { $dates .= ''; }
        if ( '21' == date( 'd' ) ) { $dates .= ''; }
        if ( '22' == date( 'd' ) ) { $dates .= ''; }
        if ( '23' == date( 'd' ) ) { $dates .= ''; }
        if ( '24' == date( 'd' ) ) { $dates .= ''; }
        if ( '25' == date( 'd' ) ) { $dates .= ''; }
        if ( '26' == date( 'd' ) ) { $dates .= ''; }
        if ( '27' == date( 'd' ) ) { $dates .= ''; }
        if ( '28' == date( 'd' ) ) { $dates .= ''; }
        if ( '29' == date( 'd' ) ) { $dates .= ''; }
        if ( '30' == date( 'd' ) ) { $dates .= ''; }
        if ( '31' == date( 'd' ) ) { $dates .= ''; }
    }

    return $dates;
}
/** Add to hook in  */
add_filter( 'bnsbc_more_classes', 'bnsbc_calendar' );