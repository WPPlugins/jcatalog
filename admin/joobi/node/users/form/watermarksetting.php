<?php 


* @license GNU GPLv3 */

WView::includeElement('form.yesno');
class Users_Watermarksetting_form extends WForm_yesno {
function create(){
parent::create();
$this->content .='<br /><a class="btn btn-success" target="_blank" href="'.WPage::routeURL('controller=apps&task=preferences').'">'.WText::t('1338404831MNYL'). '</a>';
return true;
}
}