<?php 


* @license GNU GPLv3 */

class Wishlist_my_items_back_controller extends WController {
function back() {
	$lastPage = WGlobals::getSession( 'pageLocation', 'lastPage', 'controller=catalog' );
	$lastPageItem = WGlobals::getSession( 'pageLocation', 'lastPageItem', true );
	WPages::redirect( $lastPage, $lastPageItem );
	return true;
}}