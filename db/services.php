<?php

defined('MOODLE_INTERNAL') || die();
$functions = array(
    'local_emd_webservice_get_visits' => array(
        'classname' => 'local_emd_webservice_external',
        'methodname' => 'get_visits',
        'classpath' => 'local/emd_webservice/externallib.php',
        'description' => 'Get visitors for EMD Lesson',
        'type' => 'read',
        'ajax' => true,
    ),
);

$services = array(
    'EMD-Mitos Service' => array(
        'functions' => array(
            'local_emd_webservice_get_visits'
        ),
        'restrictedusers' => 0,
        'enabled' => 1,
    )
);