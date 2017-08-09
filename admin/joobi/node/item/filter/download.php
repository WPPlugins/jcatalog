<?php 


* @license GNU GPLv3 */

class Item_Download_filter {
	function create() {
		$eid = WGlobals::getEID();
		$bundle = WModel::getElementData( 'item' , $eid, 'bundle' );
		if ( $bundle > 0 ) {
			$itemBundleM = WModel::get( 'item.bundle' );
			$itemBundleM->whereE( 'pid', $eid );
			$allPIDA = $itemBundleM->load( 'lra', 'ref_pid' );
			if ( !empty($allPIDA) ) return $allPIDA;
		}		
		return false;
	}	
}