<?php 


* @license GNU GPLv3 */

class Ticket_newowner_controller extends WController {
	function newowner() {
		$tkid = WGlobals::get( 'tkid' );
		$uid = WGlobals::get( 'uid' );
		if ( !empty($tkid) && !empty($uid) ) {
			$ticketM = WModel::get( 'ticket' );
			$ticketM->whereE( 'tkid', $tkid );
			$ticketM->setVal( 'authoruid', $uid );
			$ticketM->update();
		}
		WPages::redirect( 'controller=ticket' );
		return true;
	}
}