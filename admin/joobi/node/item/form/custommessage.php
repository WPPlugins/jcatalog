<?php 


* @license GNU GPLv3 */

class Item_CoreCustommessage_form extends WForms_default {
function create() {
	if ( !empty($this->data->prdgeneral) ) return false;
	$text = '<span class="label label-danger" style="font-weight:bold">' . WText::t('1418159973LMLX') . '</span>';
	$this->content = $text;
	return true;
}
function show() {
	return $this->create();
}}