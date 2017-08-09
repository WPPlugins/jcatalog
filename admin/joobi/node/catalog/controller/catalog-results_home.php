<?php 


* @license GNU GPLv3 */

class Catalog_results_home_controller extends WController {
	function home() {
		if ( WPref::load( 'PCATALOG_NODE_NEWFLEX' ) ) {
			$this->setView( 'catalog_search_results' );
			$catalogStdSeearchC = WClass::get( 'catalog.stdsearch' );
			$lk = $catalogStdSeearchC->loadSearchfilters();
		}
		return true;
	}
}