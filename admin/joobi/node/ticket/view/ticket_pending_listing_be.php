<?php 


* @license GNU GPLv3 */

class Ticket_Ticket_pending_listing_be_view extends Output_Listings_class {
protected function prepareView() {
	if ( !WPref::load( 'PTICKET_NODE_TKRT' ) ) {
		$this->removeElements( array( 'ticket_pending_listing_be_response_time' ) );
	}
	return true;
}}