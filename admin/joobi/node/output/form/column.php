<?php 


* @license GNU GPLv3 */

class WForm_Corecolumn extends WForms_default {
function create(){
return true;
}
function show(){
return true;
}
function start(&$frame,$params=null){
$frame->content='';
$frame->startPane($params );
}
public function addElementToField(&$frame,$params=null,$HTML=null){
$frame->_data=$params;
if(empty($HTML)) return;
if('edit'==WPref::load('PMAIN_NODE_DIRECT_MODIFY')){
$outputDirectEditC=WClass::get('output.directedit');
$editButton=$outputDirectEditC->editView('form',$this->yid, $this->element->fid, 'form-layout');
if(!empty($editButton))$params->text=$editButton . $params->text;
}elseif('translate'==WPref::load('PMAIN_NODE_DIRECT_MODIFY')){
}
$frame->add($HTML );
}
function close(&$frame){
$frame->endPane();
$this->content=$frame->display();
}
}