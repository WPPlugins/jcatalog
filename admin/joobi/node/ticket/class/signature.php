<?php 


* @license GNU GPLv3 */

class Ticket_Signature_class extends WClasses {
	public function getUserSignature($uid) {
		if ( WRoles::isNotAdmin( 'supportagent' ) ) return false;
		$exist = WExtension::exist( 'contacts.node' );
		if ( $exist && !empty($uid) ) {
			$contactsDetailsM = WModel::get( 'contacts.details' );
			$contactsDetailsM->whereE( 'uid', $uid );
			return $contactsDetailsM->load( 'lr', 'signature' );
		}
		return false;
	}
}