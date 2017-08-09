<?php 


* @license GNU GPLv3 */

if ( WLoadFile( 'main.class.type', JOOBI_DS_NODE ) ) {
	class Vendor_Type_class extends Main_Type_class {
		var $typeModelName = 'vendor.type';
		var $typeModelPK = 'vendtypid';
		var $itemModelName = 'vendor';
		var $itemModelPK = 'vendid';
		var $designationNode = 'vendor';
		var $cacheFolder = 'VendorType';
		var $designationMap = 'type';
	}
}