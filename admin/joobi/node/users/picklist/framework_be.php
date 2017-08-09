<?php 


* @license GNU GPLv3 */

class Users_Framework_be_picklist extends WPicklist {
function create(){
$usedOption=WPref::load('PUSERS_NODE_FRAMEWORK_BE');
if(empty($usedOption))$usedOption=WApplication::getFrameworkName();
if(empty($usedOption))$usedOption=JOOBI_FRAMEWORK;
$usersAddon=WAddon::get('users.'.$usedOption );
if(empty($usersAddon)) return false;
$joomlaO=$usersAddon->getPicklistElement();
if(!empty($joomlaO))$joomla=array($joomlaO );
else $joomla=array();
$joobi=new stdClass;
$joobi->option='users';
$joobi->label='Users';
$joobi->extension='users';
$joomla[]=$joobi;
$exist=WExtension::exist('contacts.node');
if($exist){
$jomsocial=new stdClass;
$jomsocial->option='contacts';
$jomsocial->label='Contacts';
$jomsocial->extension='contacts';
$joomla[]=$jomsocial;}
if('joomla'==JOOBI_FRAMEWORK_TYPE){
$exist=WApplication::isEnabled('community', true);
if($exist){
$jomsocial=new stdClass;
$jomsocial->option='jomsocial';
$jomsocial->label='JomSocial';
$jomsocial->extension='com_community';
$joomla[]=$jomsocial;}}
$exist=false;
$defaultExist=false;
if(!empty($joomla)){
foreach($joomla as $oneCommunity){
$this->addElement($oneCommunity->option , $oneCommunity->label );
if($oneCommunity->option==$usedOption)$defaultExist=true;
}}
if($defaultExist){
$this->setDefault($usedOption, true);
}else{
$this->setDefault('joomla', true);
}
return true;
}
}