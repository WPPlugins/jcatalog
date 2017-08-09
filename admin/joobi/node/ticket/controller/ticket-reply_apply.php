<?php 


* @license GNU GPLv3 */

class Ticket_reply_apply_controller extends WController {
function apply() {
	$trk = WGlobals::get( JOOBI_VAR_DATA );
	$ticketSID = WModel::getID('ticket.reply');
	$tkid = $trk[$ticketSID]['tkid'];
	$type = WGlobals::get('tktypeid' );
	$priority = WGlobals::get('priority' );
	parent::apply();
	WPages::redirect( 'controller=ticket-reply&task=listing&private=false&tkid='.$tkid.'&tktypeid='.$type.'&priority='.$priority );
	return true;
}}