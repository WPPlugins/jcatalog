<?php 


* @license GNU GPLv3 */

class Item_CoreEnddate_form extends WForms_default {
function show()
{
	if ($this->value > 0) $this->content = WApplication::date( WTools::dateFormat( 'date' ), $this->value );
	else $this->content = '<span class="label label-danger">'. WText::t('1237967968ABUO') .'</span>';
	return true;
}}