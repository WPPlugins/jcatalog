<?php 


* @license GNU GPLv3 */

WView::includeElement( 'listing.butdelete' );
class Address_CoreDeletebutton_listing extends WListing_butdelete {
function create() {
	$selectedid = WGlobals::get('selectedid');
	$basketaddtype = WGlobals::get('basketaddtype');
	if ( $this->value != $selectedid ) {
		return parent::create();
	}
	return false;
}}