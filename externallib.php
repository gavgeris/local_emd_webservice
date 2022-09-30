<?php

use core_completion\progress;
require_once(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/externallib.php');
require_once($CFG->dirroot.'/user/lib.php');
require_once($CFG->dirroot.'/course/lib.php');

class local_emd_webservice_external extends external_api {


    public static function get_visits() {
        global $DB,$CFG;
        require_once($CFG->libdir . '/filelib.php');
        require_once($CFG->dirroot . '/course/lib.php');
        require_once($CFG->dirroot . '/enrol/locallib.php');
        require_once($CFG->dirroot . '/enrol/externallib.php');

                $sql = "SELECT cm.id as moduleid,cm.instance ltiid,cm.section as section,lt.name as ltiname,lt.grade as grade,lt.timecreated,lt.timemodified,c.id as courseid,gd.id as category
            FROM {course} c 
            JOIN {course_modules} cm ON c.id = cm.course 
            JOIN {lti} lt ON cm.instance = lt.id 
            JOIN {grade_categories} gd ON gd.courseid = c.id
            WHERE cm.module =15 AND c.id in (".")";
        $modules = $DB->get_records_sql($sql);
        $all_module = array();

        return 1;
    }

}