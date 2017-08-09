<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Email_Loadmailer_class extends WClasses {
static private $_mailerA=null;
public function getMailer($type='email',$typeOfmailer=''){
if(empty($typeOfmailer)){
if(empty($type )){
$this->codeE('The type of mailer is not specified');
}
if( is_numeric($type )){
$emailMmailerM=WModel::get('email.mailer');
$emailMmailerM->whereE('publish', 1 );
$emailMmailerM->whereE('designation',$designation );
$emailMmailerM->checkAccess();
$emailMmailerM->orderBy('premium','DESC');
$mailerIDO=$emailMmailerM->load('o');
}
if(empty($mailerIDO)){
$mailerIDO;
}else{
}
switch($type){
case 'sms':
$designation=2;
break;
case 'email':
$designation=1;
break;
case 'elasticemail':
$designation=1;
break;
default:
if( is_numeric($type )){
$designation=0;
}else{
$this->codeE('The type of mailer is unknown');
return false;
}
}
if(!isset( self::$_mailerA[$type] )){
$emailMmailerM=WModel::get('email.mailer');
$emailMmailerM->whereE('publish', 1 );
if(!empty($designation)){
$emailMmailerM->whereE('designation',$designation );
$emailMmailerM->orderBy('premium','DESC');
}else{
$emailMmailerM->whereE('mailerid',$type );
}
self::$_mailerA[$type]=$emailMmailerM->load('o');
if(empty( self::$_mailerA[$type] )){
$this->codeE('The mailer was not found: '.$type );
}else{
WTools::getParams( self::$_mailerA[$type] );
}
}
if(empty(self::$_mailerA[$type])){
$this->userE('1391449404BHVL');
$typeOfmailer='framework';
}else{
$emailTypeT=WType::get('email.type');
$typeOfmailer=$emailTypeT->getName( self::$_mailerA[$type]->type );
if(empty($typeOfmailer)){
$typeOfmailer='framework';
}else{
self::$_mailerA[$type]->mailer=$typeOfmailer;
}
}
}
WLoadFile('email.class.parent');
if(!in_array($typeOfmailer, array('smtp','phpmailer','qmail','sendmail'))){
if(isset(self::$_mailerA[$type])){
switch( self::$_mailerA[$type]->type){
case 11:
$mailerInstance=WAddon::get('mailing.'.$typeOfmailer );
if(empty($mailerInstance)){
$mailerInstance=new Email_Parent_class;
}
break;
default:
$mailerInstance=WAddon::get('mailing.'.$typeOfmailer );
break;
}
}else{
$mailerInstance=WAddon::get('mailing.'.$typeOfmailer );
}
}else{
$mailerInstance=new Email_Parent_class;
}
if(empty($mailerInstance))$mailerInstance=WAddon::get('email.framework');
if(!empty(self::$_mailerA[$type]))$mailerInstance->addProperties( self::$_mailerA[$type], '', false, 'mailerInfoO');
$mailerInstance->setUp();
return $mailerInstance;
}
}
