<?php 


* @license GNU GPLv3 */

class Item_assign_back_controller extends WController {
function back() {
	WPages::redirect( 'controller=item-category' );
	return true;
}}