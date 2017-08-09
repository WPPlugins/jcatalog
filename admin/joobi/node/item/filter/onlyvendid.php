<?php 


* @license GNU GPLv3 */

class Item_Onlyvendid_filter {
function create() {
	$uid = WUser::get('uid');
	if ( !empty( $uid ) ) {
		$vendorHelperC = WClass::get( 'vendor.helper' );
		$vendid = $vendorHelperC->getVendorID( $uid );
		if ( empty($vendid) && WRoles::isAdmin( 'storemanager' ) ) {
			$vendid = $vendorHelperC->getDefault();
		}
	}
	if ( empty( $vendid ) || empty( $uid ) ) {
		$message = WMessage::get();
		$message->exitNow( 'Unauthorized access 91' );
	} else return $vendid;
}
}