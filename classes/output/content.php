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
 *
 * @package   local_documentation
 * @copyright 2022 Pierre Duverneix
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_documentation\output;
defined('MOODLE_INTERNAL') || die();

use renderable;
use renderer_base;
use templatable;
use stdClass;

class content implements renderable, templatable {
    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param \renderer_base $output
     * @return stdClass
     */
    public function export_for_template(renderer_base $output) {
        return [
            'categories-img' => $output->image_url('categories-de-cours-l-universite-numerique', 'local_documentation')->out(),
            'connexion-accueil' => $output->image_url('connexion-accueil-l-universite-numerique', 'local_documentation')->out(),
            'connexion' => $output->image_url('connexion-l-universite-numerique', 'local_documentation')->out(),
            'section-telechargement' => $output->image_url('section-telechargement-l-universite-numerique', 'local_documentation')->out(),
        ];
    }
}

