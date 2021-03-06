<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
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