<?php 


* @license GNU GPLv3 */

 class Project_Addsubproject_controller extends WController {
	function addsubproject() {
		WGlobals::setEID( 0);
		$this->setView( 'project_milestone_form');
		return true;
	}
}