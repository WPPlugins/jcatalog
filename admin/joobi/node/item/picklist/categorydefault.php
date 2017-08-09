<?php 


* @license GNU GPLv3 */

class Item_Categorydefault_picklist extends WPicklist {
	function create() {
		$catSortA = array();
		$catSortA['default'] = WText::t('1206732425HINT');
		$catSortA['ordering'] = WText::t('1206732421RJQW');
		$catSortA['alphabetic'] = WText::t('1219769904NDIK');
		$catSortA['recentlyupdated'] = WText::t('1307606756SRYQ');
		$catSortA['newest'] = WText::t('1304918557EIYL');
		$catSortA['oldest'] = WText::t('1307606755CNOQ');
		foreach( $catSortA as $k => $v ) {
			$this->addElement( $k, $v );
		}		
		return true;
	}
}