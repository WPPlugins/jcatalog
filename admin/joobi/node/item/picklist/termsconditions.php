<?php 


* @license GNU GPLv3 */

class Item_Termsconditions_picklist extends WPicklist {
	function create() {
		$itemTermsC = WClass::get( 'item.termsconditions' );
		$termsInfoO = $itemTermsC->createListofTerms();
		if ( empty($termsInfoO) ) return false;
		foreach( $termsInfoO as $one ) {
			$link = WPage::linkPopUp( 'controller=catalog&task=terms&eid='. $one->termid . '&titleheader=' . $one->name );
			$html = ' ' . WPage::createPopUpLink( $link, $one->name, 900, 550 );
			$this->addElement( $one->termid, $html );
		}
		return true;	
	}}