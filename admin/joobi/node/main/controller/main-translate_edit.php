<?php 


* @license GNU GPLv3 */

class Main_translate_edit_controller extends WController {
	function edit() {
		$mainEditC = WClass::get( 'main.edit' );
		if ( !$mainEditC->checkTranslateAccess() ) return false;
		return parent::edit();
	}}