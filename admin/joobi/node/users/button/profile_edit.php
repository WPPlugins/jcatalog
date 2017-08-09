<?php 


* @license GNU GPLv3 */

class Users_CoreProfile_edit_button extends WButtons_external {
function create(){
$usedOption=WPref::load('PUSERS_NODE_FRAMEWORK_FE');
if(empty($usedOption))$usedOption=WApplication::getFrameworkName();
$usersAddon=WAddon::get('users.'.$usedOption );
$link=$usersAddon->editUserRedirect( WUser::get('uid'), true);
if(empty($link )) return false;
$this->setAction($link );
return true;
}}