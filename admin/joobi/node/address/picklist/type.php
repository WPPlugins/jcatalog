<?php 


* @license GNU GPLv3 */

class Address_Type_picklist extends WPicklist {
	function create() {
		$this->addElement( 0, WText::t('1342235342FNDP') );
		$this->addElement( 1, WText::t('1342235342FNDQ') );
		return true;
	}
}