<?php 


* @license GNU GPLv3 */

WLoadFile( 'wishlist.controller.wishlist-my-items_add' );
class Catalog_favorite_controller extends Wishlist_my_items_add_controller {
		function favorite() {
	return parent::add();
}
}