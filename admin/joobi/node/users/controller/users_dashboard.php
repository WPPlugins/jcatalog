<?php 


* @license GNU GPLv3 */

class Users_dashboard_controller extends WController {
function dashboard(){
$isRegistered=WUser::isRegistered();
if(empty($isRegistered)){
$usedOption=WPref::load('PUSERS_NODE_FRAMEWORK_FE');
if(empty($usedOption))$usedOption=WApplication::getFrameworkName();
$usersAddon=WAddon::get('users.'.$usedOption );
$usersAddon->goLogin();
return false;
}
$eid=WGlobals::get();
if(empty($eid)){
$eid=WUser::get('uid');
WGlobals::setEID($eid );
}
$this->setView('users_dashboard');
return parent::dashboard();
}
}