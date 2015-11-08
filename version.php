<?php

/**
 * Filter for adding authentication to links on www.iprbookshop.ru
 *
 * @package    filter
 * @subpackage iprbookshop_ru
 * @copyright  2015 Vadim Dvorovenko
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'filter_iprbookshop_ru'; // Full name of the plugin (used for diagnostics)
$plugin->version   = 2015110800;              // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2014051200;              // Requires this Moodle version
$plugin->maturity = MATURITY_STABLE;          // Maturity level of this plugin version
$plugin->release = '2015-11-08';              // Human readable version name 
$plugin->dependencies = array(
    'block_iprbookshop_ru' => 2015110800
);
