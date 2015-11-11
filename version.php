<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Filter for adding authentication to links on www.iprbookshop.ru
 *
 * @package    filter_iprbookshop_ru
 * @copyright  2015 Vadim Dvorovenko
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'filter_iprbookshop_ru'; // Full name of the plugin (used for diagnostics).
$plugin->version   = 2015110800;              // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2014051200;              // Requires this Moodle version.
$plugin->maturity = MATURITY_STABLE;          // Maturity level of this plugin version.
$plugin->release = '2015-11-08';              // Human readable version name.
$plugin->dependencies = array(
    'block_iprbookshop_ru' => 2015110800
);
