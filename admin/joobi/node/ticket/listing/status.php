<?php 


* @license GNU GPLv3 */

class Ticket_CoreStatus_listing extends WListings_default{
	function create() {
		$publish = $this->getValue( 'status' );
		$status= WType::get( 'ticket.publish');
		$this->content = WText::t('1206732392OZVH') .': <b>'.$status->publish[$publish] . '<b>';
		return true;
	}
}