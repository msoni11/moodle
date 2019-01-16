<?php
require_once('../../config.php');
require_once($CFG->libdir.'/adminlib.php');
// $course = get_site();
require_login();
$sitecontext = context_system::instance();

$PAGE->set_context($sitecontext);
$PAGE->set_url(new moodle_url('/local/simpleplugin/index.php'));

if (!has_capability('local/simpleplugin:manage', $sitecontext)) {
    print_error('nopermissions', 'error', '', 'view');
}

$strsettings = get_string('settings');
$PAGE->set_pagelayout('admin');
admin_externalpage_setup('simpleplugin', '', array(), $CFG->wwwroot . '/local/simpleplugin/index.php');

echo $OUTPUT->header();

// if ($data = $mform->get_data()) {
//     if ($activecourse = $data->list[0]) {
//         set_config('activecourse', $activecourse);
//     }
//     if ($activedps = $data->list[1]) {
//         set_config('activedps', $activedps);
//     }
//     if ($data->googleapikey) {
//         set_config('googleapikey', $data->googleapikey);
//     }
//     echo $OUTPUT->box(get_string('changessaved'), 'text-center');
// }
// $mform->display();

echo $OUTPUT->footer();