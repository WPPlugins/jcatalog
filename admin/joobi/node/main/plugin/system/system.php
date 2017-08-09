<?php 


* @license GNU GPLv3 */

class Main_System_plugin extends WPlugin {
	function onAfterRender() {
				if ( WRoles::isAdmin() ) return true;
				if ( JOOBI_FRAMEWORK_TYPE != 'joomla' ) return true;
						$task = WGlobals::get( 'task' );
		if ( $task == 'edit' ) return true;
		$buffer = JResponse::getBody();
				$bodyTagPos = strpos( $buffer, '<body' );
		if ( $bodyTagPos > 5 ) {
			$headerHTML = substr( $buffer, 0, $bodyTagPos );
			$bodyHTML = substr( $buffer, $bodyTagPos );
			$tagProcessC = WClass::get( 'output.process' );
			$tagProcessC->replaceTags( $bodyHTML );
			JResponse::setBody( $headerHTML . $bodyHTML );
		}
		return true;
	}
}