<?php 


* @license GNU GPLv3 */

class Wishlist_my_items_mylist_controller extends WController {
function mylist() {
	WPages::redirect( 'controller=wishlist-my' );
	return true;
}}