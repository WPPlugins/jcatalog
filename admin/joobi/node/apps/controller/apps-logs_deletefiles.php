<?php 


* @license GNU GPLv3 */

class Apps_logs_deletefiles_controller extends WController {
function deletefiles(){
$folder=WGet::folder();
$folder->delete( JOOBI_DS_USER.'logs');
$folder->create( JOOBI_DS_USER.'logs');
$mess=WMessage::get();
$mess->userS('1342037586EZIY');
return true;
}}