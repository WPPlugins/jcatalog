<?php 


* @license GNU GPLv3 */

class Ticket_CoreSticky_listing extends WListings_default{
function create(){
	$sticky=$this->getValue('sticky');
	if ($sticky){
		$iconO = WPage::newBluePrint( 'icon' );
		$iconO->icon = 'push-pin';
		$iconO->text = WText::t('1395500429FBNE');
		$this->content = WPage::renderBluePrint( 'icon', $iconO );
	}
	return true;
}
}