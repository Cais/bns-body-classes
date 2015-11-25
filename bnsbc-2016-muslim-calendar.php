<?php
/**
 * BNS Body Classes Calendar Extension - Muslim Calendar
 * Muslim calendar for the year 2016
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Calendar
 * @since       0.9
 *
 * @link        http://buynowshop.com/plugins/bns-body-classes/
 * @link        https://github.com/Cais/bns-body-classes/
 * @link        http://wordpress.org/extend/plugins/bns-body-classes
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2015, Edward Caissie
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
 * BNSBC Muslim Calendar for 2016
 *
 * @package     BNS_Body_Classes
 * @subpackage  BNSBC_Calendar
 * @since       0.9
 *
 * @internal    Dates are relevant to the year 2016
 *
 * @param       $classes - existing body classes
 *
 * @return      string - classes as defined by dates
 */
function bnsbc_muslim_calendar( $classes ) {
	$dates = '';
	/** January */
	if ( '01' == date( 'm' ) ) {
		/** No observances */
	}
	/** End if - January */

	/** May */
	if ( '05' == date( 'm' ) ) {
		if ( '05' == date( 'd' ) ) {
			$dates .= ' isra-and-mi-raj';
		}
	}
	/** End if - May */

	/** June */
	if ( '06' == date( 'm' ) ) {
		if ( '07' == date( 'd' ) ) {
			$dates .= ' ramadan-begins';
		}
	}
	/** End if - June */

	/** July */
	if ( '07' == date( 'm' ) ) {
		if ( '02' == date( 'd' ) ) {
			$dates .= ' laylat-al-qadr night-of-destiny';
		}
		if ( '07' == date( 'd' ) ) {
			$dates .= ' eid-al-fitr';
		}
	}
	/** End if - July */

	/** August */
	if ( '08' == date( 'm' ) ) {
		/** No Observances */
	}
	/** End if - August */

	/** September */
	if ( '09' == date( 'm' ) ) {
		if ( '13' == date( 'd' ) ) {
			$dates .= ' eid-al-adha';
		}
	}
	/** End if - September */

	/** October */
	if ( '10' == date( 'm' ) ) {
		if ( '03' == date( 'd' ) ) {
			$dates .= ' muharram islamic-new-year';
		}
	}
	/** End if - October */

	/** November */
	if ( '11' == date( 'm' ) ) {
		/** No Observances */
	}
	/** End if - November */

	/** December */
	if ( '12' == date( 'm' ) ) {
		if ( '12' == date( 'd' ) ) {
			$dates .= ' prophets-birthday';
		}
	}
	/** End if - December */

	/** Note to, er class for, self */
	if ( ! empty( $dates ) ) {
		$dates .= ' bnsbc-muslim-calendar';
		$classes .= $dates;
	}

	/** End if - not empty */

	/** Return the classes added above */

	return $classes;

}

/** End function - bnsbc muslim calendar */


/** Add to hook in parent plugin BNS Body Classes */
add_filter( 'bnsbc_more_classes', 'bnsbc_muslim_calendar' );