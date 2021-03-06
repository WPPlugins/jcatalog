<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
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