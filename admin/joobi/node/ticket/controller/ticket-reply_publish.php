<?php 


* @license GNU GPLv3 */

class Ticket_reply_publish_controller extends WController {
function publish() {
	$tkrid = WGlobals::get('tkrid');
	$tkid = WGlobals::get('tkid');
	$type = WGlobals::get('tktypeid');
	$priority = WGlobals::get('priority');
	$myModel=WModel::get('ticket.reply');
	$myModel->whereE('tkrid',$tkrid);
	$myModel->setVal('publish',$myModel->setCalcul(1,'-','publish',null,0));
	$myModel->update();
	WPages::redirect( 'controller=ticket-reply&tkid='.$tkid.'&tktypeid='.$type.'&priority='.$priority );
	return true;
}}