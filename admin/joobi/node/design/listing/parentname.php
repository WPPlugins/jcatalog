<?php 


* @license GNU GPLv3 */

class Design_CoreParentname_listing extends WListings_default{
	function create() {
		$parent = WGlobals::get( 'picklistParent', 0, 'global' );
		if ( empty($parent) ) return false;
		static $picklistP = null;
		if ( !isset($picklistP) ) $picklistP = WView::picklist( $parent );
		$value = $this->getValue( 'parent' );
		$this->content = $picklistP->getName( $value );
		return true;
	}}