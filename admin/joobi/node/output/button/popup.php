<?php 


* @license GNU GPLv3 */

class WButton_CorePopup extends WButtons_default {
protected $noJSonButton=true;
function create(){
WPage::addJSLibrary('joobibox');
if( strpos($this->buttonO->action, '(') !==false){
$outputLinkC=WClass::get('output.link');
$this->buttonO->href=$outputLinkC->convertLink('controller='.$this->buttonO->action.'(index=popup)','','');
}else{
$myurl=$this->buttonO->action;
$this->buttonO->href=WPage::linkPopUp('controller='.$myurl );
}
$this->buttonO->isPopUp=true;
return true;
}
}