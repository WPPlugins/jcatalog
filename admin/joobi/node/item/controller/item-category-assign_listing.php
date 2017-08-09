<?php 


* @license GNU GPLv3 */

class Item_category_assign_listing_controller extends WController {
function listing() {
	$pid = WGlobals::get('pid');
	if ( WRoles::isNotAdmin( 'storemanager' ) ) {
		if ( empty( $pid ) ) {
			$message = WMessage::get();
			$message->exitNow( 'Unauthorized access 125' );
		}
		$productHelperC = WClass::get( 'item.restriction', null, 'class', false);
 		if ( $productHelperC ) $result = $productHelperC->filterRestriction( 'query', 'item', 'pid', $pid );
		else $result = false;
		if ( !$result ) {
			$message = WMessage::get();
			$message->exitNow( 'Unauthorized access 126' );
		}
	}
	return true;
}}