<?php
defined('MOODLE_INTERNAL') || die;
if (is_siteadmin()) {
    $settings = new admin_settingpage('local_simpleplugin', get_string('birthdayreminder', 'local_simpleplugin'));
    $ADMIN->add('localplugins', $settings);

    $name = 'local_simpleplugin/reminder';
    $title = get_string('birthdayreminder', 'local_simpleplugin');
    $description = get_string('birthdayreminder_desc', 'local_simpleplugin');
    $default = '0';
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $settings->add($setting);
}