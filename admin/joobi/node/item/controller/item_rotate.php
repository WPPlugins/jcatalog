<?php 


* @license GNU GPLv3 */

class Item_rotate_controller extends WController {
	function rotate() {
		$pid = WGlobals::get( 'pid' );
		$filid = WGlobals::get( 'filid' );
		$direx = WGlobals::get( 'direx' );
		if ( empty($pid) || empty($filid) || empty($direx) ) {
			return false;
		}		
						$imagesRotateC = WClass::get( 'images.rotate' );
		$status = $imagesRotateC->fromImageID( $filid, $direx, true );
		if ( $status ) {
			if ( 'right' == $direx ) {
				$this->userS('1479418233BUHV');
			} else {
				$this->userS('1479418233BUHW');
			}			
		} else {
			$this->userE('1478361850QIHD');
		}		
		$controller = WGlobals::getSession( 'itemEdit', 'controller', 'item' );
		WPages::redirect( 'controller=' . $controller . '&task=edit&eid=' . $pid );
		return true;
	}	
}