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

require_once($CFG->dirroot . '/theme/clean/classes/core_renderer.php');

/**
 * NHSLA's theme's core renderers.
 *
 * @package    theme_nhsla
 * @copyright  2017
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class theme_nhsla_core_renderer extends theme_clean_core_renderer {


    /**
     * @return string
     */
    public function footer()
    {
        global $CFG;
        if(file_exists($CFG->dirroot.'/blocks/navbuttons/footer.php')) {
            require_once($CFG->dirroot . '/blocks/navbuttons/footer.php');  // Add this line to enable the navigation buttons plugin

            $output = draw_navbuttons() . parent::container_end_all(true);

            $footer = parent::footer();

            return $output . $footer;
        }
     }
}
