<?php 


* @license GNU GPLv3 */

class Wishlist_myitems_listing_controller extends WController {
function listing() {
$type=WGlobals::get('type');
switch ($type) {
	case '110':
	case '120':
		$this->setView('wishlist_category_listing_wishlist_items');
	break;
	default:
		$this->setView('wishlist_products_listing_wishlist_items');
	break;
}
return true;
}}