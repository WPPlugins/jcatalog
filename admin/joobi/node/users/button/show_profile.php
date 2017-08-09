<?php 


* @license GNU GPLv3 */

class Users_CoreShow_profile_button extends WButtons_external {
function create(){
$usedOption=WPref::load('PUSERS_NODE_FRAMEWORK_FE');
if(empty($usedOption))$usedOption=WApplication::getFrameworkName();
$usersAddon=WAddon::get('users.'.$usedOption );
$link=$usersAddon->showUserProfile( WUser::get('uid'), true);
if(empty($link )) return false;
$link=str_replace('controller=','',$link );
$this->setAction($link );
return true;
}}