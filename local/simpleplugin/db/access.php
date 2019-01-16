<?php
/**
 * Admin Settings Access
 *
 */
 
defined('MOODLE_INTERNAL') || die;

$capabilities = array(

    'local/simpleplugin:view'  => array(

        'captype' => 'read',
        'riskbitmask' => RISK_SPAM,
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
        )
    ),

    'local/simpleplugin:manage'  => array(

        'captype' => 'write',
        'riskbitmask' => RISK_SPAM,
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
        )
    )
);
?>