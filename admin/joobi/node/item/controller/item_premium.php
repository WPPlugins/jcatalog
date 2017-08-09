<?php 


* @license GNU GPLv3 */

class Item_premium_controller extends WController {
	function premium() {
		$pid = WGlobals::get('pid');
		$premium = WGlobals::get('premium');
		$filid = WGlobals::get('filid');
		$controller = WGlobals::get('tocontroller');
		if ( $premium==0 ) {
			$productImageM = WModel::get('item.images');
			$productImageM->whereE('pid', $pid);
			$productImageM->setVal('premium',0);
			$productImageM->setVal('ordering',2);
			$productImageM->update();
			$productImageM->whereE('pid', $pid);
			$productImageM->whereE('filid', $filid);
			$productImageM->setVal('premium',1);
			$productImageM->setVal('ordering',1);
			$productImageM->update();
		}
		WPages::redirect( 'controller=' . $controller . '&task=edit&eid=' . $pid );
		return true;
	}}