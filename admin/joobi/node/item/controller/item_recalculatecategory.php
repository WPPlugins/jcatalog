<?php 


* @license GNU GPLv3 */

class Item_recalculatecategory_controller extends WController {
function recalculatecategory() {
	$itemCAtrecalculateC = WClass::get( 'item.catrecalculate' );
	$itemCAtrecalculateC->reCalculateAll();
	$this->userS('1436323750RBXF');
	WPages::redirect( 'controller=item&task=preferences' );
	return true;
}
}