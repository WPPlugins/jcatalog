<?php 


* @license GNU GPLv3 */

class Ticket_CoreAuthor_form extends WForms_default {
function create(){
	$author='';
	$tkrid=WGlobals::getEID( true );
	$model=WModel::get('ticket.reply');
	$model->whereE('tkrid',$tkrid[0]);
	$author=$model->load('lr','authoruid');
	$this->content = WUser::get('name',$author);
		return true;
}}