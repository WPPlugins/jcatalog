<?php 


* @license GNU GPLv3 */

class Item_Catpublish_filter {
function create() {
if ( WRoles::isAdmin( 'storemanager' ) ) return false;
else return 1;
}
}