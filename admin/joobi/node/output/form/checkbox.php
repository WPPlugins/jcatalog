<?php 


* @license GNU GPLv3 */

class WForm_Corecheckbox extends WForms_default {
function create(){
$class=(isset($this->element->classes ))?$this->element->classes.' checkBox' : 'checkBox';
$this->content='<input type="checkbox" id="'.$this->idLabel.'" name="'.$this->map .'" class="'.$class.'"';
if($this->value)$this->content .=' checked ' ;
$this->content .=' />' ;
return true;
}
}