<?php 


* @license GNU GPLv3 */

class Translation_element_changelanguage_controller extends WController {
function changelanguage(){
$sid=self::getFormValue('sid');
$eid=self::getFormValue('eid');
if(is_array($eid))$eid=$eid[0];
$type=self::getFormValue('type');
$map=self::getFormValue('map');
$eidmap=self::getFormValue('eidmap');
$lgid=self::getFormValue('lgid');
WPages::redirect('controller=translation-element&task=edit&eid='.$eid.'&eidmap='.$eidmap.'&type='.$type.'&lgid='.$lgid.'&map='.$map.'&sid='.$sid );
return true;
}
}