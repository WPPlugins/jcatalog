<?php 


* @license GNU GPLv3 */

class Item_Customjomsocial_filter {
function create() {
	if ( WRoles::isAdmin( 'storemanager' ) ) return false;
	else {
		$profileID = WGlobals::get( 'userid' );
		$uid = WUser::get( 'uid', $profileID, false );
		static $vendidA = null;
		if ( !isset( $vendidA[ $uid ] ) && !empty( $uid ) ) {
			$vendorHelperC = WClass::get('vendor.helper',null,'class',false);
			$vendidA[ $uid ] = $vendorHelperC->getVendorID( $uid );
		}
 		if ( empty( $vendidA[ $uid ] ) || empty( $uid  ) ) {
			return '0';
		} else return $vendidA[ $uid ];
	}
}}