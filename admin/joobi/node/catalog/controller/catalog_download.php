<?php 


* @license GNU GPLv3 */

class Catalog_download_controller extends WController {
	function download() {
		$pid = WGlobals::getEID();
		if ( empty($pid) ) return false;
		$catalogDownloadC = WClass::get( 'catalog.download' );
		$catalogDownloadC->downloadFile( $pid );
		return true;
	}
}