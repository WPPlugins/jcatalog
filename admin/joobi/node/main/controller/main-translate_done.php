<?php 


* @license GNU GPLv3 */

class Main_translate_done_controller extends WController {
	function done() {
		$mainEditC = WClass::get( 'main.edit' );
		if ( !$mainEditC->checkTranslateAccess() ) return false;
		$trk = WGlobals::get( JOOBI_VAR_DATA );
		$text = $trk['x']['text'];
		$type = $trk['x']['type'];
		$eid = $trk['x']['eid'][0];
		$lgid = $trk['x']['lgid'];
		if ( empty($lgid) || empty($type) || empty($eid) ) return true;
		switch ( $type ) {
			case 'listing' :
				$modelM = WModel::get( 'library.viewlistingstrans' );
				$dbtid = WModel::get( 'library.viewlistingstrans', 'dbtid' );
				$column = 'lid';
				break;
			case 'form' :
				$modelM = WModel::get( 'library.viewformstrans' );
				$dbtid = WModel::get( 'library.viewformstrans', 'dbtid' );
				$column = 'fid';
				break;
			case 'menu' :
				$modelM = WModel::get( 'library.viewmenustrans' );
				$dbtid = WModel::get( 'library.viewmenustrans', 'dbtid' );
				$column = 'mid';
				break;
			case 'view' :
				$modelM = WModel::get( 'library.viewtrans' );
				$dbtid = WModel::get( 'library.viewtrans', 'dbtid' );
				$column = 'yid';
				break;
			default:
			return true;
		}
		$modelM->whereE( 'lgid', $lgid );
		$modelM->whereE( $column, $eid );
		$modelM->setVal( 'name', $text );
		$modelM->setVal( 'auto', 5 );	
		$modelM->setVal( 'fromlgid', 0 );
		$modelM->update();
		if ( !empty($dbtid) ) {
									$populateM = WModel::get( 'translation.populate' );
			$populateM->makeLJ( 'library.columns', 'dbcid', 'dbcid' );
			$populateM->makeLJ( 'library.table', 'dbtid', 'dbtid', 1, 2 );
			$populateM->whereE( 'eid', $eid );
			$populateM->whereE( 'dbtid', $dbtid, 2 );
			$populateM->whereE( 'name', 'name', 1 );
			$myIMAC = $populateM->load( 'lr', array( 'imac' ) );	
			if ( !empty($myIMAC) ) {
				$code = WLanguage::get( $lgid, 'code' );
				$dictionaryM = WModel::get( 'translation.' . $code, 'object', null, false );
				if ( !empty($dictionaryM) ) {
					$dictionaryM->setVal( 'auto', 5 );						$dictionaryM->setVal( 'text', $text );
					$dictionaryM->whereE( 'imac', $myIMAC );
					$dictionaryM->update();
				}			}
		}
		$extensionHelperC = WCache::get();
		$extensionHelperC->resetCache( 'Views' );
		return true;
	}}