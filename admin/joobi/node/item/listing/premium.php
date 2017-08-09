<?php 


* @license GNU GPLv3 */

class Item_CorePremium_listing extends WListings_default{
	function create() {
		$premium = $this->value;
		$pid = $this->getValue('pid');
		$filid = $this->getValue('filid');
		$this->element->lien = null;
		if ( $premium == 1 ) {
			$objButtonO = WPage::newBluePrint( 'button' );
			$objButtonO->type = 'link';
			$objButtonO->text = WText::t('1423096583JHOD');
			$objButtonO->color = 'success';
			$objButtonO->link = '#';
			$this->content = WPage::renderBluePrint( 'button', $objButtonO );
		} else {
			$objButtonO = WPage::newBluePrint( 'button' );
			$objButtonO->text = WText::t('1423096583JHOE');
			$objButtonO->type = 'link';
			$objButtonO->color = 'warning';
				$controller = WGlobals::get('controller');
			$objButtonO->link = WPage::link( 'controller=item&task=premium&pid=' . $pid . '&filid=' . $filid . '&premium=' . $premium . '&tocontroller=' . $controller );
			$this->content = WPage::renderBluePrint( 'button', $objButtonO );
		}
		return true;
	}
}