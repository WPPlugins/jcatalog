<?php 


* @license GNU GPLv3 */

class Item_category_assign_back_controller extends WController {
function back() {
	WPages::redirect( 'controller=catalog&task=listing' );
	return true;
}}