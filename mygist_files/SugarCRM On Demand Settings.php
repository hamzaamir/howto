<?php

//////////////////////////////////////////////////
//
// SugarCRM On Demand Settings
//
//////////////////////////////////////////////////


/*
Module Loader Restriction Alternatives

http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_7.2/70_API/Application/Module_Loader/20_Module_Loader_Restriction_Alternatives/

Module Loader Restrictions

http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_6.7/02_Application_Framework/Module_Loader/00_Module_Loader_Restrictions/
*/

$sugar_config['moduleInstaller']['packageScan'] = true;

// On Demand Custom Settings
$sugar_config['moduleInstaller']['disableFileScan'] = false;
$sugar_config['moduleInstaller']['validExt'] = array(
    'log',
    'htaccess'
);
$sugar_config['moduleInstaller']['blackList'] = array(
    'strlen',
    'strtolower'
);
$sugar_config['moduleInstaller']['blackListExempt'] = array(
    'file_put_contents'
);
$sugar_config['moduleInstaller']['disableRestrictedCopy'] = true;

?>
