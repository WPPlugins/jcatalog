<?php 


* @license GNU GPLv3 */

class Mailbox_Mailbox_picklist extends WPicklist {
	function create() {
		$mailboxM = WModel::get( 'mailbox' );
		$mailboxM->rememberQuery( true, 'Mailbox_node' );
		$mailboxM->whereE( 'publish', 1 );
		$mailboxM->setLimit( 500 );
		$mailboxM->orderBy( 'name' );
		$results = $mailboxM->load( 'ol', array( 'name', 'inbid' ) );
		$this->addElement( 0, ' - ' . WText::t('1448507522RQGF') . ' - ' );
		if ( !empty($results) ) {
			foreach( $results as $myResult ) {
				$this->addElement( $myResult->inbid , $myResult->name );
			}		}
		return true;
	}	
}