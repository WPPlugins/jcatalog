<?php 


* @license GNU GPLv3 */

class Item_Noadmin_filter {
	function create() {
		if ( WRoles::isAdmin( 'storemanager' ) ) return false;
		else return 1;
	}
}