<?php 


* @license GNU GPLv3 */

class Item_Item_download_listing_per_product_view extends Output_Listings_class {
	function prepareView() {
		$myKeySession = WGlobals::getSession( 'order', 'secretKey', '' );
		$myKeyRequest = WGlobals::get( 'secretkey', '9' );
		$pid = WGlobals::getEID();
		if ( $myKeySession != md5( $myKeyRequest . JOOBI_SITE_TOKEN . $pid ) ) {
			$message = WMessage::get();
			$message->userE('1376611593MOOG');
			return false;
		}
		return true;
	}
}