<?php 


* @license GNU GPLv3 */

class Ticket_CoreStatuslisting_listing extends WListings_default{
function create() {
	static $droplist = null;
	if ( empty( $droplist ) ) $droplist = WType::get( 'ticket.publish' );
	$this->content = $droplist->getName( $this->value );
	return true;
}}