<?php 


* @license GNU GPLv3 */

class Vendor_edit_controller extends WController {
function edit() {
	$vendorC = WClass::get( 'vendor.helper', null, 'class', false );
	$vendid = $vendorC->getDefault();
	WGlobals::setEID( $vendid );
	return parent::edit();
}}