<?php 


* @license GNU GPLv3 */

class Catalog_query_controller extends WController {
	function query() {
		$catalogNormalSearchC = WClass::get( 'catalog.normalsearch' );
		$catalogNormalSearchC->query();
		return true;
	}
}