<?php
/**
 * BNS Body Classes Calendar Extension - Christian Calendar
 * Christian calendar for the year 2013
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Christian_Calendar
 * @since       0.5
 *
 * @link        http://buynowshop.com/plugins/bns-body-classes/
 * @link        https://github.com/Cais/bns-body-classes/
 * @link        http://wordpress.org/extend/plugins/bns-body-classes
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2013, Edward Caissie
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
 * BNSBC Christian Calendar
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Christain_Calendar
 * @since       0.5
 *
 * @internal Dates are relevant to the year 2013
 *
 * @return      string - classes as defined by dates
 */
function bnsbc_christian_calendar() {
    $dates = '';
    /** January */
    if ( '01' == date( 'm' ) ) {
        if ( '06' == date( 'd' ) ) { $dates .= ' epiphany'; }
    } /** End if - January */

    /** February */
    if ( '02' == date( 'm' ) ) {
        if ( '12' == date( 'd' ) ) { $dates .= ' carnival shrove-tuesday'; }
        if ( '13' == date( 'd' ) ) { $dates .= ' ash-wednesday'; }
    } /** End if - February */

    /** March */
    if ( '03' == date( 'm' ) ) {
        if ( '24' == date( 'd' ) ) { $dates .= ' palm-sunday'; }
        if ( '28' == date( 'd' ) ) { $dates .= ' maundy-thursday'; }
        if ( '29' == date( 'd' ) ) { $dates .= ' good-friday'; }
        if ( '30' == date( 'd' ) ) { $dates .= ' holy-saturday'; }
        if ( '31' == date( 'd' ) ) { $dates .= ' easter-sunday'; }
    } /** End if - March */

    /** April */
    if ( '04' == date( 'm' ) ) {
        if ( '01' == date( 'd' ) ) { $dates .= ' easter-monday'; }
    } /** End if - April */

    /** May */
    if ( '05' == date( 'm' ) ) {
        if ( '09' == date( 'd' ) ) { $dates .= ' ascension-day'; }
        if ( '19' == date( 'd' ) ) { $dates .= ' pentecost'; }
        if ( '20' == date( 'd' ) ) { $dates .= ' whit-monday'; }
        if ( '26' == date( 'd' ) ) { $dates .= ' trinity-sunday'; }
        if ( '30' == date( 'd' ) ) { $dates .= ' corpus-christi'; }
    } /** End if - May */

    /** August */
    if ( '08' == date( 'm' ) ) {
        if ( '15' == date( 'd' ) ) { $dates .= ' assumption-of-mary'; }
    } /** End if - August */

    /** October */
    if ( '10' == date( 'm' ) ) {
        if ( '04' == date( 'd' ) ) { $dates .= ' feast-of-st-francis-of-assisi'; }
    } /** End if - October */

    /** November */
    if ( '11' == date( 'm' ) ) {
        if ( '02' == date( 'd' ) ) { $dates .= ' all-souls-day'; }
    } /** End if - November */

    /** December */
    if ( '12' == date( 'm' ) ) {
        if ( '08' == date( 'd' ) ) { $dates .= ' feast-of-the-immaculate-conception'; }
        if ( '25' == date( 'd' ) ) { $dates .= ' christmas'; }
    } /** End if - December */

    /** Note to, er class for, self */
    $dates .= ' bnsbc-christian-calendar';

    /** Return the classes added above */
    return $dates;

} /** End function - christian calendar */


/** Add to hook in parent plugin BNS Body Classes */
add_filter( 'bnsbc_more_classes', 'bnsbc_christian_calendar' );