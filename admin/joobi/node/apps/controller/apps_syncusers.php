<?php 


* @license GNU GPLv3 */

class Apps_syncusers_controller extends WController {
function syncusers(){
$CMSaddon=WAddon::get('api.'.JOOBI_FRAMEWORK.'.import');
$CMSaddon->importCMSUsers(true);
$message=WMessage::get();
$message->userS('1337190873HKCO');
WPages::redirect('controller=users');
return true;
}
}