<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'form.text' );
class WForm_Corehours extends WForm_text {
	function create() {
				if ( empty( $this->element->width ) ) $this->element->width = 6;
		$this->value = $this->value / 3600;
		if ( false === strpos( $this->element->map, '[' ) ) {
			$map = $this->element->sid . '|' . $this->element->map;
		} else {
			$map = $this->element->map;
		}		
		$currentForm = WView::form( $this->formName );
		$currentForm->hidden( JOOBI_VAR_DATA . 'zt[' . $this->element->type . '][' . $this->element->fid . ']', $map );
		$this->addPostText = WText::t('1206732357ILFL');
		return parent::create();
	}
	function show() {
		$this->value = $this->value / 3600;
		$status = parent::show();
		$this->content .= ' ' . WText::t('1206732357ILFL');
		return $status;
	}
}
class Main_Hours_form extends WClasses {
	function preSaveValidate($value) {
		return $value * 3600;
	}
}