<?php 


* @license GNU GPLv3 */

class Ticket_Jprojectslist_picklist extends WPicklist {
	function create() {
		$this->addElement( 0, ' - ' . WText::t('1361919649HLBW') . ' - ' );
		$ticketProjM = WModel::get('ticket.project');
		$ticketProjM->makeLJ('ticket.projecttrans','pjid');
		$ticketProjM->whereLanguage( 1 );
		$ticketProjM->select( array( 'pjid', 'parent' ), 0 );
		$ticketProjM->select('name', 1);
		if ( WRoles::isAdmin( 'supportagent' ) ) {		
		} else {
			$ticketProjM->whereE('publish', 1);
			if ( WGlobals::checkCandy(50) ) {
				$ticketProjM->whereE('frontend', 1, 0, null, 1, 0);
				$ticketProjM->whereIn( 'rolid', WUser::roles(), 0, null, 0, 1, 0 );
			} else {
				$ticketProjM->whereE('frontend', 1, 0);
			}
		}
		$ticketProjM->orderBy( 'ordering' );
		$ticketProjM->setLimit( 500 );
		$resultsA = $ticketProjM->load('ol');
		if ( empty($resultsA) ) return false;
		$parent = array();
		$parent['pkey'] = 'pjid';
		$parent['parent'] = 'parent';
		$parent['name'] = 'name';
		$childOrderParent=array();
		$listA = WOrderingTools::getOrderedList( $parent, $resultsA, 1, false, $childOrderParent );
		foreach( $listA as $project)  {
			$this->addElement($project->pjid,$project->name);
		}
	}
}