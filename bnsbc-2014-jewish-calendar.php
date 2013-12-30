<?php
/**
 * BNS Body Classes Calendar Extension - Jewish Calendar
 * Jewish calendar for the year 2014
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Calendar
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
 * BNSBC Jewish Calendar
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Calendar
 * @since       0.5
 *
 * @internal    Dates are relevant to the year 2014
 *
 * @param       $classes - existing body classes
 *
 * @return      string - classes as defined by dates
 *
 * @version     0.5.2
 * @date        April 9, 2013
 * Added $classes parameter to be able to append new date classes to
 *
 * @version     0.6
 * @date        April 15, 2013
 * Add conditional check to only add if there are actual dates being recognized
 */
function bnsbc_jewish_calendar( $classes ) {
	$dates = '';
	/** January */
	if ( '01' == date( 'm' ) ) {
		if ( '16' == date( 'd' ) ) {
			$dates .= ' tu-b-shevat arbor-day';
		}
	}
	/** End if - January */

	/** March */
	if ( '03' == date( 'm' ) ) {
		if ( '16' == date( 'd' ) ) {
			$dates .= ' purim';
		}
	}
	/** End if - March */

	/** April */
	if ( '04' == date( 'm' ) ) {
		if ( '15' == date( 'd' ) ) {
			$dates .= ' first-day-of-passover';
		}
		if ( '22' == date( 'd' ) ) {
			$dates .= ' last-day-of-passover';
		}
		if ( '28' == date( 'd' ) ) {
			$dates .= ' yom-hashoah';
		}
	}
	/** End if - April */

	/** May */
	if ( '05' == date( 'm' ) ) {
		if ( '06' == date( 'd' ) ) {
			$dates .= ' yom-haatzmaut';
		}
		if ( '18' == date( 'd' ) ) {
			$dates .= ' lag-b-omer';
		}
	}
	/** End if - May */

	/** June */
	if ( '01' == date( 'm' ) ) {
		if ( '04' == date( 'd' ) ) {
			$dates .= ' shavuot';
		}
	}
	/** End if - June */

	/** August */
	if ( '08' == date( 'm' ) ) {
		if ( '05' == date( 'd' ) ) {
			$dates .= ' tisha-b-av';
		}
	}
	/** End if - August */

	/** September */
	if ( '09' == date( 'm' ) ) {
		if ( '25' == date( 'd' ) ) {
			$dates .= ' rosh-hashana';
		}
	}
	/** End if - September */

	/** October */
	if ( '10' == date( 'm' ) ) {
		if ( '04' == date( 'd' ) ) {
			$dates .= ' yom-kippur';
		}
		if ( '09' == date( 'd' ) ) {
			$dates .= ' first-day-of-sukkot';
		}
		if ( '15' == date( 'd' ) ) {
			$dates .= ' last-day-of-sukkot';
		}
		if ( '16' == date( 'd' ) ) {
			$dates .= ' shmini-atzeret simchat-torah';
		}
	}
	/** End if - October */

	/** December */
	if ( '12' == date( 'm' ) ) {
		if ( '17' == date( 'd' ) ) {
			$dates .= ' first-day-of-hanukkah';
		}
		if ( '24' == date( 'd' ) ) {
			$dates .= ' last-day-of-hanukkah';
		}
	}
	/** End if - December */

	/** Note to, er class for, self */
	if ( ! empty( $dates ) ) {
		$dates .= ' bnsbc-jewish-calendar';
		$classes .= $dates;
	}

	/** End if - not empty */

	/** Return the classes added above */

	return $classes;

}

/** End function - bnsbc calendar */


/** Add to hook in parent plugin BNS Body Classes */
add_filter( 'bnsbc_more_classes', 'bnsbc_jewish_calendar' );