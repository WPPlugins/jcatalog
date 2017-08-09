<?php 


* @license GNU GPLv3 */

class Item_CoreRelatedlistpricebe_listing extends WListings_default{
function create() {
	$price = $this->value;
	if ( $price <= 0 ) $display = WText::t('1206961944PEUR');
	else {
		$curid = $this->getValue( 'curid' );
		$display = WTools::format( $price, 'currency', $curid );
	}
	$this->content = $display;
	return true;
}}