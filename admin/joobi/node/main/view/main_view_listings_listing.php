<?php 


* @license GNU GPLv3 */

class Main_Main_view_listings_listing_view extends Output_Listings_class {
function prepareQuery() {
	if ( WPref::load( 'PMAIN_NODE_SHOWHIDDENVIEW' ) ) {
		$this->removeConditions( array( 'main_view_listings_listing_useredit' ) );
		$this->userE('1468849010FNSQ');
	} else {
				$this->removeElements( array( 'main_view_listings_listing_useredit' ) );
	}
$this->userN('1466623925HDVN');
	return true;
}}