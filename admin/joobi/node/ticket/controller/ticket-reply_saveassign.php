<?php 


* @license GNU GPLv3 */

class Ticket_reply_saveassign_controller extends WController {
function saveassign() {
	$modelID = $this->sid;
	$trk = WGlobals::get( JOOBI_VAR_DATA );
	$returnid = WGlobals::get('returnid');
	$realURL = base64_decode($returnid);
	$replyTransID = WModel::getID('ticket.replytrans');
	$description = $trk[$replyTransID][description];
	if (empty($description)) {
		WPages::redirect($realURL);
	} else {
		parent::save();
	}
	$tkid = $trk[$modelID]['tkid'];
	$ticketM = WModel::get('ticket');
	$ticketM->whereE('tkid', $tkid);
	$ticketInfo = $ticketM->load('o', array('tktypeid', 'priority'));
	$link = 'controller=ticket-reply&task=assign&tkid='.$tkid.'&tktypeid='.$ticketInfo->tktypeid.'&priority='.$ticketInfo->priority;
	WPages::redirect($link);
	return true;
}}