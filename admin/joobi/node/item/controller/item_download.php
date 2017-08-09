<?php 


* @license GNU GPLv3 */

class Item_download_controller extends WController {
	function download() {
		$pid = WGlobals::getEID();
		$filid = WGlobals::get( 'filid' );
		if ( empty($pid) || empty($filid) ) return false;
		$orderDownloadC = WClass::get( 'files.download' );
		$orderDownloadC->getFile( $filid, false );
		return true;
	}
}