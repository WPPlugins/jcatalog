<?php 


* @license GNU GPLv3 */

WLoadFile( 'wishlist.controller.wishlist_my_items_add' );
class Wishlist_my_items_favorite_controller extends Wishlist_my_items_add_controller {
function favorite() {
	return parent::add();
}}