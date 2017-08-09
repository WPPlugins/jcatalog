<?php 


* @license GNU GPLv3 */

class Ticket_Ticket_reply_head_be_view extends Output_Listings_class {
	protected function prepareView() {
		if ( !WPref::load( 'PTICKET_NODE_TKRT' ) ) {
			$this->removeElements( array( 'ticket_reply_head_be_ticket_resptime', 'ticket_reply_head_be_ticket_deadline' ) );
		}
		$isteURL  = WPref::load( 'PTICKET_NODE_SITEINTEGRATION' );
		$licenseExist = WExtension::exist( 'license.node' );
		if ( !$isteURL || !$licenseExist ) {
			$this->removeElements( array( 'task_reply_head_be_site_url', 'task_reply_head_be_license_subtype', 'task_reply_head_be_license_maintenance', 'task_reply_head_be_license_token' ) );
		}
		return true;
	}	
}