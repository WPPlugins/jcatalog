<?php 


* @license GNU GPLv3 */

class Item_type_toggle_controller extends WController {
function toggle() {
	$cache = WCache::get();
	$cache->resetCache( 'Menus' );
	return parent::toggle();
}
}