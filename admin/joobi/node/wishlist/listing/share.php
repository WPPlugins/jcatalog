<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.textlink');
class Wishlist_CoreShare_listing extends WListing_textlink {
function create() {
if ( $this->getValue( 'private' ) ) {
	return false;
}
return parent::create();
}
}