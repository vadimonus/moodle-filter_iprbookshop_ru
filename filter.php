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

/**
 * Main filte class
 *
 * @package    filter_iprbookshop_ru
 * @copyright  2015 Vadim Dvorovenko
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class filter_iprbookshop_ru extends moodle_text_filter {

    /**
     * Apply the filter to the text
     *
     * @see filter_manager::apply_filter_chain()
     * @param string $text to be processed by the text
     * @param array $options filter options
     * @return string text after processing
     */
    public function filter($text, array $options = array()) {
        global $PAGE;

        if (!is_string($text) or empty($text)) {
            return $text;
        }
        if (stripos($text, '</a>') === false) {
            return $text;
        }
        $search = '~(<a\s[^>]*href=")http://www\.iprbookshop\.ru/([0-9]+)(?:\.(?:html)?)?("[^>]*>.*</a>)~Uisu';;
        $url = new moodle_url('/blocks/iprbookshop_ru/redirect.php', array('contextid' => $PAGE->context->id, 'bookid' => null));
        $replace = '$1'.$url.'=$2$3';
        $text = preg_replace($search, $replace, $text);

        return $text;
    }

}