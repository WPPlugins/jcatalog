<?php 


* @license GNU GPLv3 */

class Item_cancel_controller extends WController {
function cancel() {
	$eid = WGlobals::getEID();
	$itemItemC = WClass::get( 'item.item' );
	$designation = $itemItemC->getDesignation( $eid );
	if ( empty($designation) ) $designation = 'catalog&task=listing';
	WPages::redirect( 'controller=' . $designation );
	return true;
}}