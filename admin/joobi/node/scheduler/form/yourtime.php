<?php 


* @license GNU GPLv3 */

WView::includeElement('form.datetime');
class Scheduler_Yourtime_form extends WForm_datetime {
function show(){
$this->value=time();
return parent::show();
}
}