<?php 


* @license GNU GPLv3 */

class Apps_installall_controller extends WController {
function installall(){
$eid=WGlobals::getEID();
$appsInfoC=WCLass::get('apps.info');
$status=$appsInfoC->possibleUpdate($eid );
if(!$status){
$popuplink=WPage::link('controller=apps&task=club');
WPages::redirect($popuplink, false, false);
}
$eid=WExtension::get( JOOBI_MAIN_APP.'.application','wid');
WPages::redirect('controller=apps&task=show&eid='.$eid.'&update=install');
return true;
}}