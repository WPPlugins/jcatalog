<?php 


* @license GNU GPLv3 */

class Vendor_inbox_cancelmessage_controller extends WController {
function cancelmessage() {
	$trk = WGlobals::get( JOOBI_VAR_DATA );
	$vendid = ( isset($trk['x']['id']) ) ? $trk['x']['id'] : 0;
	parent::cancel();
	$link = ( !empty($vendid)) ? 'controller=vendor-inbox&task=listing&id='. $vendid : 'controller=vendor-inbox&task=listing';
	WPages::redirect( $link, true );
	return true;
}}