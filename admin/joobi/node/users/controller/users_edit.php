<?php 


* @license GNU GPLv3 */

class Users_edit_controller extends WController {
function edit(){
$eid=WGlobals::getEID();
$frameworkUsed=WRoles::isAdmin()?WPref::load('PUSERS_NODE_FRAMEWORK_BE') : WPref::load('PUSERS_NODE_FRAMEWORK_FE');
if(empty($frameworkUsed))$frameworkUsed=WApplication::getFrameworkName();
$usersAddon=WAddon::get('users.'.$frameworkUsed );
if(!empty($usersAddon))$usersAddon->editUserRedirect($eid );
return parent::edit();
}
}