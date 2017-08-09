<?php 


* @license GNU GPLv3 */

WView::includeElement( 'main.listing.rating' );
class Catalog_Searchrating_listing extends WListing_rating {
	function create() {
		static $jFeedbackExtensionExist = null;
		if ( WGlobals::checkCandy(50,true) ) return true;
		$comment = $this->getValue( 'pageprdallowreview' );
		$prodtypid = $this->getValue( 'prodtypid' );
		if ( $comment == 2 ) {				static $itemTypeC = null;
			if ( !isset($itemTypeC) ) $itemTypeC = WClass::get('item.type');
			$comment = $itemTypeC->loadTypeData( $prodtypid, 'pageprdallowreview' );
		}		if ( $comment == 5 ) {				if ( !defined('PCATALOG_NODE_PAGEPRDALLOWREVIEW') ) WPref::get( 'catalog.node' );
			$comment = PCATALOG_NODE_PAGEPRDALLOWREVIEW;
		}
		if ( empty($comment) ) return true;
		return parent::create();
	}
}