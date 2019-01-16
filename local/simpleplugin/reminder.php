<?php
define('CLI_SCRIPT', true);
require_once("../../config.php");
require_once($CFG->dirroot.'/user/profile/lib.php');

if ($users = get_users()) {
    foreach ($users as $user) {
        $dobdata = profile_user_record($user->id, false);    
        print_object($dobdata);
        if ($dob = $dobdata->dob) {
            if ($dob == time()) {
                //Send notification email here.
            }
        }
    }
}
