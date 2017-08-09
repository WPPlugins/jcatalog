<?php 


* @license GNU GPLv3 */

class Ticket_projectmembers_change_controller extends WController {
function change() {
	$pjid = WGlobals::get( 'pjid' );
	$supportLevel = WGlobals::get( 'level' );
	$uid = WGlobals::get( 'uid' );
	WGlobals::set( 'uid', null );
	WGlobals::set( 'level', null );
	$value = $supportLevel + 1;
	if ( $value > WPref::load( 'PTICKET_NODE_SUPPORTLEVEL' ) ) $value = 1;
	$ticketPropjectMembersM = WModel::get( 'ticket.projectmembers' );
	$ticketPropjectMembersM->whereE( 'uid', $uid );
	$ticketPropjectMembersM->whereE( 'pjid', $pjid );
	$ticketPropjectMembersM->setVal( 'supportlevel', $value );
	$ticketPropjectMembersM->update();
	return true;
}
}