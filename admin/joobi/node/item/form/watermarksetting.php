<?php 


* @license GNU GPLv3 */

WView::includeElement( 'form.yesno' );
class Item_CoreWatermarksetting_form extends WForm_yesno {
	function create() {
		parent::create();
		$this->content .= '<br /><a class="btn btn-success" target="_blank" href="'. WPage::linkAdmin( 'controller=apps&task=preferences' ) .'">'. WText::t('1338404831MNYL') .'</a>';
		return true;
	}}