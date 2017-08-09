<?php 


* @license GNU GPLv3 */

class Address_Node_install extends WInstall {
	public function install(&$object) {
		if ( !empty( $this->newInstall ) || (property_exists($object, 'newInstall') && $object->newInstall) ) {
			WText::load( 'address.node' );
			$installWidgetsC = WClass::get( 'install.widgets' );
			$installWidgetsC->installWidgetType(
				'address.map'
				, 'Map widget'
				, WText::t('1206732424BJFR')
			, WText::t('1379006374DSBD')
			, 7				);
		}
		return true;
	}
}