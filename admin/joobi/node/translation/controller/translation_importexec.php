<?php 


* @license GNU GPLv3 */

class Translation_Importexec_controller extends WController {
function importexec(){
$translationProcessC=WClass::get('translation.process');
$translationProcessC->setDontForceInsert(true);
$translationProcessC->importexec();
}
}