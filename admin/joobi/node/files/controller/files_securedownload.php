<?php 


* @license GNU GPLv3 */

class Files_securedownload_controller extends WController {
function securedownload() {
	$filid = WGlobals::getEID();
	$roleHelper = WRole::get();
	$hasRole = WRole::hasRole( 'storemanager' );
	$itemDownloadC = WClass::get('files.download');
	$itemDownloadC->getFile( $filid, !$hasRole );
	return true;
}}