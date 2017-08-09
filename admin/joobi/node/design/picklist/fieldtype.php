<?php 


* @license GNU GPLv3 */

class Design_Fieldtype_picklist extends WPicklist {
	function create() {
		$fieldsM = WModel::get( 'design.fields' );
		$fieldsM->makeLJ( 'design.fieldstrans' );
		$fieldsM->whereLanguage();
		$fieldsM->select( 'name', 1 );
		$fieldsM->whereE( 'publish', 1 );
		$fieldsM->orderBy( 'category' );
		$fieldsM->orderBy( 'ordering' );
		$allFieldsA = $fieldsM->load( 'ol' , array('fieldid', 'category') );
		$this->addElement( 0, WText::t('1356698582LCCK') );
		if ( !empty($allFieldsA) ) {
			$done = array();
			$categoryP = WView::picklist( 'design_fields_categories' );
			$allCategoryA = $categoryP->getValues();
			foreach( $allFieldsA as $oneField ) {
				if ( empty($done[$oneField->category]) ) {
					$this->addElement( '--'.$oneField->category, '--'. $allCategoryA[$oneField->category] );
					$done[$oneField->category] = true;
				}
				$this->addElement( $oneField->fieldid, $oneField->name );
			}
		}
		return true;
	}
}