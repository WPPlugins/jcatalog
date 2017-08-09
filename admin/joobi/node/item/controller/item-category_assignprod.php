<?php 


* @license GNU GPLv3 */

class Item_category_assignprod_controller extends WController {
	function assignprod() {
		$catid = WGlobals::getEID();
		static $categorytransM = null;
		if (empty($categorytransM)) $categorytransM = WModel::get( 'item.categorytrans' );
		$categorytransM->select( 'name' );
		$categorytransM->whereE( 'catid', $catid );
		$categorytrans = $categorytransM->load( 'r' );
		WPages::redirect( 'controller=item-assign&task=listing&catid='. $catid .'&titleheader='. $categorytrans );
		return true;
	}}