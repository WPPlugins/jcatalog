<?php 


* @license GNU GPLv3 */

class Wishlist_users_items_back_controller extends WController {
function back() {
	WPages::redirect( 'controller=wishlist-users' );
	return true;
}}