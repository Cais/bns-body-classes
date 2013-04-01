<?php
/*
Plugin Name: BNS Body Classes
Plugin URI: http://buynowshop.com/plugins/bns-body-classes/
Description: Simple plugin that adds classes to the `body_class` output upon activation, including a full list of date classes.
Version: 0.5
Text Domain: bns-bc
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/**
 * BNS Body Classes
 *
 * Simple plugin that adds classes to the `body_class` output upon activation,
 * including: a full list of date related classes; a few holiday classes; and,
 * a generic sample full calendar extension.
 *
 * @package     BNS_Body_Classes
 * @version     0.5
 *
 * @link        http://buynowshop.com/plugins/bns-body-classes/
 * @link        https://github.com/Cais/bns-body-classes/
 * @link        http://wordpress.org/extend/plugins/bns-body-classes
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2012-2013, Edward Caissie
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
 *
 * @version 0.3
 * @date    December 1, 2012
 *
 * @version 0.4
 * @date    December 11, 2012
 * Add generic sample calendar extension
 *
 * @version 0.5
 * @date    April 1, 2013
 * Code formatting and code block termination comments
 */

class BNS_Body_Classes {
    /**
     * Constructor
     *
     * @package BNS_Body_Classes
     *
     * @uses    add_filter
     */
    function __construct() {
        /** Add Body Classes */
        add_filter( 'body_class', array( $this, 'bns_body_classes' ) );
    } /** End function - constructor */


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
    function bns_body_classes( $classes ) {
        /** Add self reference to default body classes; also serves as very simple example */
        $classes[] = 'plugin-bns-body-classes';

        /** Add child-theme-<Name> to default body classes */
        if ( is_child_theme() ) {
            $classes[] = 'child-theme-' . sanitize_html_class( get_option( 'stylesheet' ) );
        } /** End if - is child theme */

        /** Add theme-<Name> to default body classes */
        $classes[] = 'theme-' . sanitize_html_class( get_option( 'template' ) );

        /** Add Current Dates classes */
        $classes[] = $this->current_dates();

        /** Add Holiday Classes */
        $classes[] = $this->holidays();

        /** @var $more_classes - for additional classes from extensions */
        $more_classes = apply_filters( 'bnsbc_more_classes', '' );
        $classes[] .= $more_classes;

        /** @var $classes - overwrite the body classes at the last minute class additions? */
        $classes = apply_filters( 'bns_body_classes', $classes );

        return $classes;

    } /** End function - bns body classes */


    /**
     * Current Dates
     * Add classes representing the current date
     *
     * @package BNS_Body_Classes
     * @since   0.3
     *
     * @return string
     */
    function current_dates() {
        /** Current Date Classes */
        $date_classes = '';

        /** Year */
        $current_year = date( 'Y' );
        $date_classes .= 'year-' . $current_year;
        $leap_year = date( 'L' );
        if ( '1' == $leap_year ) {
            $date_classes .= ' leap-year';
        } /** End if - leap year */
        /** Month */
        $current_month_numeric = date( 'm' );
        $date_classes .= ' month-' . $current_month_numeric;
        $current_month_short = date( 'M' );
        $date_classes .= ' month-' . strtolower( $current_month_short );
        $current_month_long = date( 'F' );
        $date_classes .= ' month-' . strtolower( $current_month_long );
        /** Day */
        $current_day_of_month = date( 'd' );
        $date_classes .= ' day-' . $current_day_of_month;
        $current_day_of_week_short = date( 'D' );
        $date_classes .= ' day-' . strtolower( $current_day_of_week_short );
        $current_day_of_week_long = date( 'l' );
        $date_classes .= ' day-' . strtolower( $current_day_of_week_long );
        /** Time: Hour */
        $current_24_hour = date( 'H' );
        $date_classes .= ' hour-' . $current_24_hour;
        $current_12_hour = date( 'ha' );
        $date_classes .= ' hour-' . $current_12_hour;

        return $date_classes;

    } /** End function - current dates */


    /**
     * Holidays
     * Common Holidays and Observances related classes
     *
     * @package BNS_Body_Classes
     * @since   0.3
     *
     * @return string
     *
     * @version 0.4
     * @date    December 13, 2012
     * Added more common dates: Valentine's Day, St. Patrick's Day, April Fool's
     * Day, Halloween, Remembrance Day
     */
    function holidays() {
        /** @var $holidays - initialize as no holidays */
        $holidays = '';

        /** New Year's Day */
        if ( ( '01' == date( 'm' ) ) && ( '01' == date( 'd' ) ) && ( 18 < date( 'H' ) ) ) {
            $holidays .= ' new-years-eve';
        } /** End if - new years eve */
        if ( ( '01' == date( 'm' ) ) && ( '01' == date( 'd' ) ) ) {
            $holidays .= ' new-years new-years-day';
        } /** End if - new years day */

        /** Valentine's Day */
        if ( ( '02' == date( 'm' ) ) && ( '14' == date( 'd' ) ) ) {
            $holidays .= ' valentines-day saint-valentines-day';
        } /** End if - valentines day */

        /** St. Patrick's Day */
        if ( ( '03' == date( 'm' ) ) && ( '17' == date( 'd' ) ) ) {
            $holidays .= ' st-patricks-day';
        } /** End if - st patricks day */

        /** April Fool's Day */
        if ( ( '04' == date( 'm' ) ) && ( '01' == date( 'd' ) ) ) {
            $holidays .= ' april-fools-day';
        } /** End if - april fools day */

        /** Halloween */
        if ( ( '10' == date( 'm' ) ) && ( '31' == date( 'd' ) ) ) {
            $holidays .= ' halloween';
        } /** End if - halloween */

        /** Remembrance Day */
        if ( ( '11' == date( 'm' ) ) && ( '11' == date( 'd' ) ) ) {
            $holidays .= ' remembrance-day poppy-day armistice-day veterans-day';
        } /** End if - remembrance day */

        /** Christmas */
        if ( ( '12' == date( 'm' ) ) && ( '24' == date( 'd' ) ) && ( 18 < ( date( 'H' ) ) ) ) {
            $holidays .= ' christmas-eve';
        } /** End if - Christmas eve */
        if ( ( '12' == date( 'm' ) ) && ( '25' == date( 'd' ) ) ) {
            $holidays .= ' christmas christmas-day';
        } /** End if - Christmas day */

        return $holidays;

    } /** End function - holidays */

} /** End class - bns body classes */


/** @var $bns_body_classes - new class instance */
$bns_body_classes = new BNS_Body_Classes();


/** Add BNSBC Options */
include( 'bnsbc-options.php' );


/** Add BNSBC Calendar if it is available */
if ( is_readable( plugin_dir_path( __FILE__ ) . 'bnsbc-calendar.php' ) ) {
    include( 'bnsbc-calendar.php' );
} /** end if - is readable */