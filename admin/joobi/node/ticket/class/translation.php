<?php 


* @license GNU GPLv3 */

class Ticket_Translation_class extends WClasses {
	public function secureTranslation($itemO,$sid,$eid) {
		$uid = WUser::get( 'uid' );
		if ( empty($uid) ) return false;
						if ( WRole::hasRole( 'supportmanager' ) ) return true;
		return false;
	}
}