<?php 


* @license GNU GPLv3 */

class Vendor_Manufacturer_model extends WModel {
	function addValidate() {
				$vendorsTypeC = WClass::get( 'vendors.type' );
		$this->vendtypid = $vendorsTypeC->loadTypeData( 'manufacturer', 'vendtypid' );
		return true;
	}	
}