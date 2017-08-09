<?php 


* @license GNU GPLv3 */

class Ticket_CoreTemplates_form extends WForms_default {
function create(){
	$this->element->name='';		
	$tkid=WGlobals::get('tkid');		
	$priority=WGlobals::get('priority');
	$type=WGlobals::get('tktypeid');
	if (!empty($tkid)){				
		$ticketM = WModel::get('ticket');
		$ticketM->select('pjid');
		$ticketM->whereE('tkid',$tkid);
		$pjid=$ticketM->load('lr');
		$link=WPage::routeURL('controller=ticket-reply&task=templatelisting&pjid='.$pjid.'&tktypeid='.$type.'&priority='.$priority.'&tkid='.$tkid);
		$this->content='<a href="'.$link.'">Show Canned Replies</a>';
		return true;
	} else {					
		return false;			
	}
}}