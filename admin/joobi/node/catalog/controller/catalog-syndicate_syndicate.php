<?php 


* @license GNU GPLv3 */

class Catalog_syndicate_syndicate_controller extends WController {
	function syndicate() {
		$vendorC = WClass::get( 'vendor.helper' );
		$uid = WUser::get('uid');
		$vendid = $vendorC->getVendorID($uid);
		$pid = self::getFormValue( 'eid' );
		if ( !empty($vendid) && !empty($pid) ) {
			$catid = self::getFormValue( 'catid' );
			$itemSyndicateC = WClass::get( 'item.syndicate' );
			$itemSyndicateC->syndicateToItem( $pid, $vendid, $catid );
		}
		return true;
	}
}