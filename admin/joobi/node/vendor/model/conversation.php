<?php 


* @license GNU GPLv3 */

class Vendor_Conversation_model extends WModel {
	function validate() {
		$receiverid = WController::getFormValue( 'id' );
		if ( empty($receiverid) ) $receiverid = WController::getFormValue( 'receiverid' );
		if ( !empty( $receiverid) ) $this->receiveruid = $receiverid;
		return true;
	}
}