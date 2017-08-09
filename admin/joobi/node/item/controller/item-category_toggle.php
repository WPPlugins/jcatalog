<?php 


* @license GNU GPLv3 */

class Item_category_toggle_controller extends WController {
	function toggle() {
		$property = $this->getToggleValue( 'map' );
		$value = $this->getToggleValue( 'value' );
		if ( $property == 'blocked' ) {
			$catid = WGlobals::getEID();
			if ( $value == 0 ) {
				$catnoBlock = WPref::load( 'PVENDORS_NODE_CATNOBLOCK' );
				if ( !$catnoBlock ) {
					WPages::redirect( 'controller=item-category-vendor&task=verification&eid='. $catid, 'admin' );
				}
			}
		}
		return parent::toggle();
	}
}