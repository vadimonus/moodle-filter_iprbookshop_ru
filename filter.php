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

class filter_iprbookshop_ru extends moodle_text_filter {

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