<?php 


* @license GNU GPLv3 */

class Email_Mailermethod_picklist extends WPicklist {
function create(){
$this->addElement('--1a','--'.WText::t('1391449403DZJI'));
$this->addElement( 1, 'Framework method');
$this->addElement( 2, 'PHP Mailer');
$this->addElement( 11, 'Elastic Email');
switch( strtoupper( substr( PHP_OS, 0, 3 ))){
case "WIN":
break;
case "MAC":
case "DAR":
default:
$this->addElement( 3, 'Send mail');
$this->addElement( 4, 'Qmail');
break;
}$this->addElement( 10, 'SMTP Server');
$this->addElement('--100a','--'.WText::t('1391449403DZJJ'));
$this->addElement( 101, 'SMS Bulk SMS');
$this->addElement( 102, 'SMS CallFire');
$this->addElement( 103, 'SMS Clickatell');
$this->addElement( 104, 'SMS iTagg');
$this->addElement( 105, 'SMS Nexmo');
$this->addElement( 110, 'SMS Masivos');
$this->addElement( 115, 'SMS ZW eText');
$this->addElement( 117, 'SMS Mobility');
return true;
}
}