<?php 


* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'listing.yesno' );
class WListing_Coreyesnoreverse extends WListing_yesno {
	function create() {
		$this->value = !$this->value;
		return parent::create();
	}
}