<?php 


* @license GNU GPLv3 */

class Project_Roleid_filter {
function create() {
	$rolidA = array();
	$roleHelper = WRole::get();
	$rolidA[] = $roleHelper->getRole( 'project_member', 'rolid' );
	$rolidA[] = $roleHelper->getRole( 'project_manager', 'rolid' );
	return $rolidA;
}}