<?php 


* @license GNU GPLv3 */

class Ticket_CoreCatpref_listing extends WListings_default{
function create() {
	$iconO = WPage::newBluePrint( 'icon' );
	$iconO->icon = 'preferences';
	$iconO->text = WText::t('1206732392OZUQ');
	$this->content = WPage::renderBluePrint( 'icon', $iconO );
	return true;
}}