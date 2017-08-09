<?php 


* @license GNU GPLv3 */

class Main_view_edit_controller extends WController {
	function edit() {
		$mainEditC = WClass::get( 'main.edit' );
		if ( !$mainEditC->checkEditAccess() ) return false;
		$eid = WGlobals::getEID();
		$custom = WModel::getElementData( 'main.view', $eid, 'custom' );
		if ( empty($custom) ) $this->setView( 'main_view_form_core' );
		return parent::edit();
	}
}