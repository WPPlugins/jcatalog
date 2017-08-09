<?php 


* @license GNU GPLv3 */

WView::includeElement( 'form.select' );
class Main_CoreRptjdoctype_form extends WForm_select {
	function create() {
		$trk = WGlobals::get( JOOBI_VAR_DATA );
		$jdoctype = (!empty( $trk['x']['jdoctype'] ) ? $trk['x']['jdoctype'] : WGlobals::get('jdoctype') );
		if ( empty($jdoctype) ) {
			$jdoctype = WGlobals::getSession( 'graphFilters', 'jdoctype' );
			if ( empty($jdoctype) ) $jdoctype = 220;	
		}
		WGlobals::setSession( 'graphFilters', 'jdoctype', $jdoctype );
		$this->value = $jdoctype;
		WPage::addJSLibrary( 'validation' );
		return parent::create();
	}}