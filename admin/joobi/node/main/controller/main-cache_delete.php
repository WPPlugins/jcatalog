<?php 


* @license GNU GPLv3 */

class Main_cache_delete_controller extends WController {
	function delete() {
		$FOLDER=WGlobals::get('folder');  
		$FOLDERClass = WGet::folder(); 	
		if (is_string($FOLDER) && !empty($FOLDER) ) {
			if ($FOLDERClass->delete( WApplication::cacheFolder() . '/' . $FOLDER ) ) {
				$mess = WMessage::get();
				$mess->userS('1420121260PTWF',array('$FOLDER'=>$FOLDER));
			}
		}
		WPages::redirect( 'controller=main-cache&task=listing' );			
		return true;
	}
}