<?php 


* @license GNU GPLv3 */

 class Translation_Edit_controller extends WController {
function edit(){
$sid=WGlobals::get('sid');
$title=WGlobals::get('title');
$name=WGlobals::get('name');
$this->controller='translation';
$this->task='edit';
$this->wid=WExtension::get('translation','wid');
$this->sid=$sid;
$this->layout->sid=$sid;
$params=new stdClass;
$params->dynamicForm=true;
$this->layout=WView::get('translation_edit_trans','html',$params, $this );
$this->layout->name=$title.' '.$name;
$this->content=$this->layout->make();
return true;
}
}