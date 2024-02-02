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
 * The mod_activityshortcut course module viewed event.
 *
 * @package     mod_activityshortcut
 * @copyright   2024 derek.henderson <derek.henderson@knowledgeone.ca>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_activityshortcut\event;
defined('MOODLE_INTERNAL') || die();

use mod_video\local\module_info;

/**
 * The mod_activityshortcut course module viewed event class.
 *
 * @package     mod_activityshortcut
 * @copyright   2024 derek.henderson <derek.henderson@knowledgeone.ca>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_module_viewed extends \core\event\course_module_viewed {

    /**
     * Init method.
     */
    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        $this->data['objecttable'] = module_info::SHORT_NAME;
    }

    public static function get_objectid_mapping() {
        return array('db' => module_info::SHORT_NAME, 'restore' => module_info::SHORT_NAME);
    }
}

