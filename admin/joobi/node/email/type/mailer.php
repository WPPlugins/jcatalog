<?php 


* @license GNU GPLv3 */

class Email_Mailer_type extends WTypes {
var $mailer=array(
'phpmail'=>'PHP Mail Function',
'sendmail'=>'SendMail',
'qmail'=>'QMail',
'smtp'=>'SMTP Server'
);
}