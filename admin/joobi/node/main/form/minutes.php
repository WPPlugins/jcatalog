<?php 


* @license GNU GPLv3 */

WView::includeElement( 'form.text' );
class WForm_Coreminutes extends WForm_text {
	function create() {
				if ( empty( $this->element->width ) ) $this->element->width = 6;
		$this->value = $this->value / 60;
		if ( false === strpos( $this->element->map, '[' ) ) {
			$map = $this->element->sid . '|' . $this->element->map;
		} else {
			$map = $this->element->map;
		}
		$currentForm = WView::form( $this->formName );
		$currentForm->hidden( JOOBI_VAR_DATA . 'zt[' . $this->element->type . '][' . $this->element->fid . ']', $map );		
		$this->addPostText = WText::t('1206732357ILFM');
		return parent::create();
	}
	function show() {
		$this->value = $this->value / 60;
		$status = parent::show();
		$this->content .= ' ' . WText::t('1206732357ILFM');
		return $status;
	}	
}
class Main_Minutes_form extends WClasses {
	function preSaveValidate($value) {
		return $value * 60;
	}	
}