<?php 


* @license GNU GPLv3 */

class Ticket_Project_model extends WModel {
	protected $_parentIdentifier = 'root';
function addValidate() {
	if ( !isset( $this->parent ) ) $this->parent = 1;
	return parent::addValidate();
}
function addExtra() {
	if (!defined('PTICKET_NODE_TKPROJECTASSIGN')) WPref::get('ticket.node');
	if (PTICKET_NODE_TKPROJECTASSIGN) {		
		$projectMembersM = WModel::get('ticket.projectmembers');	
			$projectMembersM->pjid = $this->pjid;			
			$projectMembersM->uid = $this->uid;			
			$projectMembersM->supportlevel = '1';			
			$projectMembersM->save();				
	}
	return parent::addExtra();
}
	public function secureTranslation($sid,$eid) {
		$translationC = WClass::get( 'ticket.translation', null, 'class', false );
		if ( empty($translationC) ) return false;
		if ( !$translationC->secureTranslation( $this, $sid, $eid ) ) return false;
		return true;
	}	
}