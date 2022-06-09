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
 * Web service local fileassistant external functions and service definitions.
 *
 * @package     local_rsync
 * @copyright   2022, Joel Robles <joelgabriel.roblesgasser@students.bfh.ch> Vithursan Thayananthan <vithursan.thayananthan@students.bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// We defined the web service functions to install.
$functions = array(
    'local_rsync_create_file_resource' => array(
        'classname'   => 'local_rsync_external',
        'methodname'  => 'create_file_resource',
        'classpath'   => 'local/rsync/externallib.php',
        'description' => 'Allows to create file resources in sections of a Moodle course with files in the \'Private files\' ' .
                         'area, and other things, too',
        'type'        => 'write',
    ),
    'local_rsync_set_section_visibility' => array(
        'classname'   => 'local_rsync_section',
        'methodname'  => 'set_section_visibilty',
        'classpath'   => 'local/rsync/section.php',
        'description' => 'Allows you to hide and unhide sections',
        'type'        => 'write',
    ),
    'local_rsync_remove_file_from_section' => array(
        'classname'   => 'local_rsync_section',
        'methodname'  => 'remove_file_from_section',
        'classpath'   => 'local/rsync/section.php',
        'description' => 'Allows you to remove a file from a section',
        'type'        => 'write',
    ),
    'local_rsync_rename_section' => array(
        'classname'   => 'local_rsync_section',
        'methodname'  => 'rename_section',
        'classpath'   => 'local/rsync/section.php',
        'description' => 'Allows you to rename a section',
        'type'        => 'write',
    ),
    'local_rsync_remove_section' => array(
        'classname'   => 'local_rsync_section',
        'methodname'  => 'remove_section',
        'classpath'   => 'local/rsync/section.php',
        'description' => 'Allows you to remove a section',
        'type'        => 'write',
    )
);

// We define the services to install as pre-build services. A pre-build service is not editable by administrator.
$services = array(
    'rsync fucntionalities' => array(
        'functions' => array ('local_rsync_create_file_resource', 'local_rsync_set_section_visibility', 'local_rsync_remove_file_from_section', 'local_rsync_rename_section', 'local_rsync_remove_section'),
        'restrictedusers' => 0,
        'enabled' => 1,
    )
);
