<?php 


* @license GNU GPLv3 */

class Vendor_CoreCurr_listing extends WListings_default{
function create() {
	if ( empty($this->value) ) return false;
	$symbol = $this->getValue( 'symbol' );
	$this->content = $this->value .' ('. $symbol .')';
	return true;
}
}