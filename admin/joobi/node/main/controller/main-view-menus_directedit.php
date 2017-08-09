<?php 


* @license GNU GPLv3 */

class Main_view_menus_directedit_controller extends WController {
function directedit() {
	$pref = WPref::get( 'main.node' );
	$modify = WPref::load( 'PMAIN_NODE_DIRECT_MODIFY' );
	if ( 'edit' == $modify ) {
		$pref->updatePref( 'direct_modify', '' );
	} elseif ( empty($modify) ) {
		$pref->updatePref( 'direct_modify', 'edit' );
	}	
	$extensionHelperC = WCache::get();
	$extensionHelperC->resetCache( 'Preference' );
	return true;
}}