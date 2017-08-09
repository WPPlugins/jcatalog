<?php 


* @license GNU GPLv3 */

class Mailbox_api_controller extends WController {
	function api() {
				$pw = WPref::load( 'PEMAIL_NODE_ALLOWBYURLPWD' );
		if ( empty($pw) ) {
			return false;
		}		
		$key = WGlobals::get( 'key' );
		if ( $key != $pw ) {
			return false;
		}
				$type = WGlobals::get( 'type' );
		if ( empty($type) ) return false;
				$api = WClass::get( 'mailbox.' . $type );
		if ( empty($api) ) return false;
		$api->process();
		return true;
	}
}