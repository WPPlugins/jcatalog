<?php 


* @license GNU GPLv3 */

class Ticket_CoreBackpublicfe_button extends WButtons_external {
function create() {
	$this->setAddress( WPage::routeURL('controller=ticket') );
	$myText = WText::t('1206961882TDHA');
	$this->setTitle($myText);
	$this->setIcon('back');
}}