<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Users_Register_class extends WClasses {
public function emailPassword($uid,$password,$sendReset=false){
if(empty($uid) || empty($password)) return false;
if(!WPref::load('PUSERS_NODE_REGISTRATIONALLOW')) return false;
if(!$sendReset && ! WPref::load('PUSERS_NODE_EMAILPWD')) return false;
$userFrame=( WRoles::isAdmin()?WPref::load('PUSERS_NODE_FRAMEWORK_BE') : WPref::load('PUSERS_NODE_FRAMEWORK_FE'));
if(empty($userFrame))$userFrame=WApplication::getFrameworkName();
if(!in_array($userFrame, array('users','contacts','members')) ) return false;
$mailParams=new stdClass;
$mailParams->name=WUser::get('name',$uid );
$mailParams->username=WUser::get('username',$uid );
$mailParams->email=WUser::get('email',$uid );
$mailParams->password=$password;
$mail=WMail::get();
$mail->setParameters($mailParams );
if($sendReset){
return $mail->sendNow($uid, 'users_reset_password');
}else{
return $mail->sendNow($uid, 'users_new_password');
}
}
public function sendSelfApproval($uid,$password){
if(empty($uid)) return false;
$activationby=WPref::load('PUSERS_NODE_ACTIVATIONBY');
if(empty($activationby) || 'email'==$activationby){
$mailParams=new stdClass;
$mailParams->name=WUser::get('name',$uid );
$mailParams->username=WUser::get('username',$uid );
$mailParams->email=WUser::get('email',$uid );
$activationCode=strtolower( WTools::randomString( 8 ));
$usersM=WModel::get('users');
$usersM->whereE('uid',$uid );
$usersM->setVal('activation',$activationCode );
$usersM->update();
$mailParams->selfApprovalLink=WPage::linkHome('controller=users&task=activation&id='.$uid.'&active='.$activationCode, WPages::getPageId('users'));
$emailpwd=WPref::load('PUSERS_NODE_EMAILPWD');
if(!empty($emailpwd)){
$mailParams->credentials=WText::t('1206732411EGRV'). ': '.$mailParams->username;
$mailParams->credentials .='<br />'.WText::t('1206732412DADP'). ': '.$password;
}else{
$mailParams->credentials='';
}
$userDetails=WModel::getElementData('users.details',$uid );
if(!empty($userDetails )){
foreach($userDetails as $k=> $v){
if(!isset($mailParams->$k))$mailParams->$k=$v;
}}
$mail=WMail::get();
$mail->setParameters($mailParams );
return $mail->sendNow($uid, 'users_self_approval');
}else{
$activationCode=rand( 100000, 999999 );
$usersM=WModel::get('users');
$usersM->whereE('uid',$uid );
$usersM->setVal('activation',$activationCode );
$usersM->update();
$mailParams=new stdClass;
$mailParams->name=WUser::get('name',$uid );
$mailParams->username=WUser::get('username',$uid );
$mailParams->email=WUser::get('email',$uid );
$emailpwd=WPref::load('PUSERS_NODE_EMAILPWD');
if(!empty($emailpwd)){
$mailParams->credentials=WText::t('1206732411EGRV'). ': '.$mailParams->username;
$mailParams->credentials .='<br />'.WText::t('1206732412DADP'). ': '.$password;
}else{
$mailParams->credentials='';
}
$mailParams->code=$activationCode;
$mail=WMail::get();
$mail->setParameters($mailParams );
return $mail->sendNow($uid, 'users_mobile_approval');
}
}
public function sendEmailValidation($uid,$password){
if(empty($uid)) return false;
$activationby=WPref::load('PUSERS_NODE_ACTIVATIONBY');
if(true){
$mailParams=new stdClass;
$mailParams->name=WUser::get('name',$uid );
$mailParams->username=WUser::get('username',$uid );
$mailParams->email=WUser::get('email',$uid );
$activationCode=strtolower( WTools::randomString( 8 ));
$usersM=WModel::get('users');
$usersM->whereE('uid',$uid );
$usersM->setVal('activation',$activationCode );
$usersM->update();
$mailParams->selfApprovalLink=WPage::linkHome('controller=users&task=activation&id='.$uid.'&active='.$activationCode, WPages::getPageId('users'));
$emailpwd=WPref::load('PUSERS_NODE_EMAILPWD');
if(!empty($emailpwd)){
$mailParams->credentials=WText::t('1206732411EGRV'). ': '.$mailParams->username;
$mailParams->credentials .='<br />'.WText::t('1206732412DADP'). ': '.$password;
}else{
$mailParams->credentials='';
}
$userDetails=WModel::getElementData('users.details',$uid );
if(!empty($userDetails )){
foreach($userDetails as $k=> $v){
if(!isset($mailParams->$k))$mailParams->$k=$v;
}}
$mail=WMail::get();
$mail->setParameters($mailParams );
return $mail->sendNow($uid, 'users_email_validation');
}
}
public function sendAdminApproval($uid){
if( WRoles::isAdmin('admin')) return true;
if(empty($uid)) return false;
$mailParams=new stdClass;
$mailParams->name=WUser::get('name',$uid );
$mailParams->username=WUser::get('username',$uid );
$mailParams->email=WUser::get('email',$uid );
$mailParams->language=WLanguage::get( WUser::get('lgid',$uid ), 'name');
$usersTimezoneT=WType::get('users.timezone');
$mailParams->timezone=$usersTimezoneT->getName( WUser::get('timezone',$uid ));
$countriesHelperC=WClass::get('countries.helper', null, 'class', false);
if(!empty($countriesHelperC )){
$ctry=WUser::get('ctry',$uid );
if(!empty($ctry))$mailParams->country=$countriesHelperC->getData($ctry, 'name');
else $mailParams->country='';
}else{
$mailParams->country='';
}
$mailParams->approvalLink=WPage::linkAdmin('controller=users&task=show&eid='.$uid.'&approval=1');
$mail=WMail::get();
$mail->setParameters($mailParams );
return $mail->sendAdmin('users_approval'); 
}
public function notifyAdmin($uid){
if( WRoles::isAdmin('admin')) return true;
if(empty($uid)) return false;
$notifyadmin=WPref::load('PUSERS_NODE_NOTIFYADMIN');
if(empty($notifyadmin)) return true;
if(!WRole::hasRole( WPref::load('PUSERS_NODE_REGISTRATIONROLE')) ) return true;
$mailParams=new stdClass;
$mailParams->name=WUser::get('name',$uid );
$mailParams->username=WUser::get('username',$uid );
$mailParams->email=WUser::get('email',$uid );
$mailParams->language=WLanguage::get( WUser::get('lgid',$uid ), 'name');
$usersTimezoneT=WType::get('users.timezone');
$mailParams->timezone=$usersTimezoneT->getName( WUser::get('timezone',$uid ));
$countriesHelperC=WClass::get('countries.helper', null, 'class', false);
if(!empty($countriesHelperC )){
$ctry=WUser::get('ctry',$uid );
if(!empty($ctry))$mailParams->country=$countriesHelperC->getData($ctry, 'name');
else $mailParams->country='';
}else{
$mailParams->country='';
}
$userDetails=WModel::getElementData('users.details',$uid );
if(!empty($userDetails )){
foreach($userDetails as $k=> $v){
if(!isset($mailParams->$k))$mailParams->$k=$v;
}}
$mail=WMail::get();
$mail->setParameters($mailParams );
$adminEmail=WPref::load('PUSERS_NODE_NOTIFYADMINEMAIL');if(empty($adminEmail)){
return $mail->sendAdmin('users_new_registration');
}else{
$adminA=explode(',', str_replace(' ','',$adminEmail));
foreach($adminA as $oneAdmin){
$mail->sendNow($oneAdmin, 'users_new_registration');
}
return true;
}
}
public function sendApprovalConfirmation($uid,$lock){
if(empty($uid)) return false;
$usersM=WModel::get('users');
$usersM->whereE('uid',$uid );
$usersM->setVal('blocked',$lock );
$usersM->update();
$mailParams=new stdClass;
$mailParams->name=WUser::get('name',$uid );
$mailParams->username=WUser::get('username',$uid );
$mailParams->email=WUser::get('email',$uid );
$userDetails=WModel::getElementData('users.details',$uid );
if(!empty($userDetails )){
foreach($userDetails as $k=> $v){
if(!isset($mailParams->$k))$mailParams->$k=$v;
}}
$mail=WMail::get();
$mail->setParameters($mailParams );
if($lock){
return $mail->sendSchedule($uid, 'users_disapproved', time(), 1 );
}else{
return $mail->sendSchedule($uid, 'users_approved', time(), 1 );
}
}
public function checkPassword(&$password,$strenght=''){
$password=trim($password );
switch($strenght){
case 'weak':
if( strlen($password) < 4){
return WText::t('1401465958GTFC');
}break;
case 'normal':
if( strlen($password) < 6){
return WText::t('1401465958GTFD');
}
$match=null;
$nLetters=preg_match_all('/[A-Za-z]/',$password, $match );
if($nLetters < 1){
return WText::t('1401465958GTFE');
}
$match=null;
$nSymbols=preg_match_all('[\W]',$password, $match );
if($nSymbols < 1){
$match=null;
$nNb=preg_match_all('/[0-9]/',$password, $match );
if($nNb < 1){
return WText::t('1401465958GTFF');
}}break;
case 'strong':
if( strlen($password) < 8){
return WText::t('1401465958GTFG');
}
$match=null;
$nLetters=preg_match_all('/[A-Z]/',$password, $match );
if($nLetters < 1){
return WText::t('1401465958GTFH');
}
$match=null;
$nLetters=preg_match_all('/[a-z]/',$password, $match );
if($nLetters < 1){
return WText::t('1401465958GTFI');
}
$match=null;
$nSymbols=preg_match_all('[\W]',$password, $match );
if($nSymbols < 1){
$match=null;
$nNb=preg_match_all('/[0-9]/',$password, $match );
if($nNb < 1){
return WText::t('1401465958GTFF');
}}break;
default:
case 'super':
if( strlen($password) < 10){
return WText::t('1401465958GTFJ');
}
$match=null;
$nSymbols=preg_match_all('[\W]',$password, $match );
if($nSymbols < 2){
return WText::t('1401465958GTFK');
}
$match=null;
$nLetters=preg_match_all('/[A-Z]/',$password, $match );
if($nLetters < 1){
return WText::t('1401465958GTFH');
}
$match=null;
$nLetters=preg_match_all('/[a-z]/',$password, $match );
if($nLetters < 1){
return WText::t('1401465958GTFI');
}
$match=null;
$nNb=preg_match_all('/[0-9]/',$password, $match );
if($nNb < 1){
return WText::t('1401465958GTFL');
}break;
}
return '';
}
public function generateHashPassword($password){
$salt=WTools::randomString( 50, true);
$new=password_hash($password, PASSWORD_BCRYPT );
return $new;
}
public function verifyMatchPassword($password,$passwordDB){
$explodeA=explode(':',$passwordDB );
if( count($explodeA) > 1){
$salt=$explodeA[1];
$currentPass=$explodeA[0];
$sentPass=@crypt($password, $salt );
return ($sentPass==$currentPass?true : false);
}else{
return password_verify($password, $passwordDB );
}
}
}