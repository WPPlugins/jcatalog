<?php 


* @license GNU GPLv3 */

WView::includeElement( 'main.listing.iptracker' );
class Ticket_CoreIp_listing extends WListing_Coreiptracker {
public function create() {
		$showIP = false;
	if ( WPref::load( 'PTICKET_NODE_TKIP' ) ) {					
		$ticketAuthor = $this->getValue('authoruid');		
		$uid = $this->getValue('uid');				
		if ( WPref::load( 'PTICKET_NODE_TKIPDISPLAY' ) ) {					if ( empty($uid) || $ticketAuthor == $uid ) {
				$showIP = true;
			}		} else {
			$showIP = true;
		}
	}
	if ( $showIP ) {
		if ( WExtension::exist( 'security.node' ) && WApplication::isEnabled( 'jdefender', true ) ) {				
			return parent::create();
		}	}
	return false;
}
}