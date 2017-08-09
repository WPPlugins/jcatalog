<?php 


* @license GNU GPLv3 */

class Ticket_load_class extends WClasses {
	public function get($tkid) {
		static $myTicketO = null;
		if ( isset($myTicketO) ) return $myTicketO;
				$ticketM = WModel::get( 'ticket' );
		$ticketM->whereE( 'tkid', $tkid );
		$myTicketO = $ticketM->load( 'o', array( 'tkid', 'status', 'priority', 'modified' ) );
		return $myTicketO;
	}
}