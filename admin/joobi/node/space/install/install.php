<?php 


* @license GNU GPLv3 */

class Space_Node_install extends WInstall {
	public function install(&$object) {
		if ( !empty( $this->newInstall ) || (property_exists($object, 'newInstall') && $object->newInstall) ) {
		}
		return true;
	}
}