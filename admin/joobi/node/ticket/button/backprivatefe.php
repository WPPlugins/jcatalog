<?php 


* @license GNU GPLv3 */

class Ticket_CoreBackprivatefe_button extends WButtons_external {
function create() {
	$this->setAddress( WPage::routeURL('controller=ticket-my') );
	$myText = WText::t('1206961882TDHA');
	$this->setTitle($myText);
	$this->setIcon('back');
}}