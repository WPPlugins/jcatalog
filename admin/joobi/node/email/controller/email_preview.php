<?php 


* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
 class Email_Preview_controller extends WController {
function preview(){
$previewClass=WClass::get('email.preview');
$previewClass->preview();
}
}