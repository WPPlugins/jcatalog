<?php 


* @license GNU GPLv3 */

class Ticket_Ticket_myassigned_tickets_view extends Output_Listings_class {
protected function prepareView() {
	if ( !WPref::load( 'PTICKET_NODE_TKRT' ) ) {
		$this->removeElements( array( 'ticket_myassigned_tickets_response_time' ) );
	}
	return true;
}}