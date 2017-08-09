<?php 


* @license GNU GPLv3 */

class Ticket_Type_model extends WModel {
	public function secureTranslation($sid,$eid) {
		$translationC = WClass::get( 'ticket.translation', null, 'class', false );
		if ( empty($translationC) ) return false;
		if ( !$translationC->secureTranslation( $this, $sid, $eid ) ) return false;
		return true;
	}	
}