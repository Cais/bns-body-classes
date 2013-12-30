=== BNS Body Classes ===
Contributors: cais
Donate Link: http://buynowshop.com/
Tags: CSS, body, plugin-only, holidays, seasonal, observances, calendar
Requires at least: 3.0
Tested Up To: 3.8.1
Stable Tag: 0.7
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

Simple plugin that adds classes to the `body_class` output upon activation, including a range of date related classes.

== Description ==
Simple plugin that adds classes to the `body_class` output upon activation, including: a full list of date related classes; a few holiday classes; and, a generic sample full calendar extension.

== Installation ==
This section describes how to install the plugin and get it working.

1. Go to the "Plugins" menu in the Administration Panels ("dashboard").
2. Click the 'Add New' link.
3. Click the "Upload" link.
4. Browse for the bns-body-classes.zip file on your computer; upload; and, install accordingly.
5. Activate.

-- or -

1. Go to the "Plugins" menu in the Administration Panels ("dashboard").
2. Click the 'Add New' link.
3. Search for BNS Body Classes.
4. Install.
5. Activate.

Please read this article for further assistance: http://wpfirstaid.com/2009/12/plugin-installation/

== Frequently Asked Questions ==
= What are the "Current Date" classes?
The "Current Date" classes are a collection of classes dynamically created classes relevant to the date the reader lands
on the site. These classes would include on December 1, 2012 at 5:00pm (GMT-5) the following:

* year-2012
* leap-year
* month-12
* month-dec
* month-december
* day-01
* day-sat
* day-saturday
* hour-22
* hour-10pm

= How do I activate the calendar extension? =
Included with the package is the file named 'bnsbc-calendar-sample.php'; simply rename this file to 'bnsbc-calendar.php', then edit it to add your own date-specific classes.

As the specifically named file 'bnsbc-calendar.php' is not included with the standard plugin package it will survive any automatic updates via the WordPress Administration Panels.

= How do I add a new class in the calendar extension? =
After changing the sample file to 'bnsbc-calendar.php' simple find the date you want to add the class to and amend that line.

For example, to add a class for the Ides of March you would edit the March 15 entry and add an appropriate class such as:

* near line 138: if ( '15' == date( 'd' ) ) { $dates .= ''; } would change to if ( '15' == date( 'd' ) ) { $dates .= ' ides-of-march'; }

NB: Remember to use "safe" characters for class names; and, add a single preceding space to eliminate the risk of classes running together.

== Screenshots ==
No screenshots are available.

== Other Notes ==

= Copyright 2012-2013  Edward Caissie  (email : edward.caissie@gmail.com) =

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 2,
  as published by the Free Software Foundation.

  You may NOT assume that you can use any other version of the GPL.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

  The license for this software can also likely be found here:
  http://www.gnu.org/licenses/gpl-2.0.html

== Upgrade Notice ==
Please stay current with your WordPress installation, your active theme, and your plugins.

== Changelog ==
= 0.7 =
* Released December 2013
* Code Reformatting to be more consistent with WordPress Coding Standards (see https://gist.github.com/Cais/8023722)

= 0.6 =
* Released July 2013
* Added Muslim calendars for 2013 and 2014
* Added conditional check to only add if there are actual dates being recognized
* Refactored option function calls into their own function to prepare for future options

= 0.5.2 =
* Released April 2013
* Added $classes parameter in calendars to be able to append new date classes

= 0.5.1 =
* Released April 2013
* Fixed wrong function being called by action hook

= 0.5 =
* Released April 2013
* Added additional related tags to header block
* Added Christian Calendars for the years 2013 and 2014
* Added Jewish Calendars for the years 2013 and 2014
* Code formatting and code block termination comments

= 0.4 =
* Released December 2012
* Added conditional check on `option_classes`
* Added generic (sample) calendar extension
* Added more common dates: Valentine's Day, St. Patrick's Day, April Fool's Day, Halloween, Remembrance Day
* i18n updates
* Prepared for extension plugins
* Refactored options to more appropriate naming conventions
* Updated descriptions and FAQ to reflect new features

= 0.3 =
* Released December 2012
* Add "Current Date" classes
* Add "Holidays" classes (Christmas and New Years)
* Refactored main plugin file to OOP code format

= 0.2.2 =
* Tested compatible with WordPress 3.4

= 0.2.1 =
* Corrected issue with initial empty array being fed to the `implode` function

= 0.2 =
* Add options page to include custom classes

= 0.1 =
* Initial Release - January 2012