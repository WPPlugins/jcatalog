<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_exporttofile_controller extends WController {
	function exporttofile() {
		$itemExportC = WClass::get( 'item.export' );
		$message = WMessage::get();
		$trk = WGlobals::get( JOOBI_VAR_DATA );
		$columns = $trk['x']['columns'];
		$lgid = $trk['x']['lgid'];
		$producttype = WGlobals::get( 'producttype', 'item' );
		$allItemsA = $itemExportC->getItems( $columns , $lgid, '', $producttype );
		if ( !empty($allItemsA) ) {
			$processedLines = $itemExportC->processItemsForExport( $allItemsA, $columns, $producttype );
			if ( empty($processedLines) ) return true;
			$foldername = 'export_products_' .  date( 'Y.d.m_H.i.s' );
			$images = $itemExportC->copydownloadImageFile( $allItemsA, $foldername );
			$download = $itemExportC->downloadFile( $processedLines, $foldername );
			if ( $download ) $message->userS('1309235262PVSQ');
		} else {
			$message->userN('1308888714FSXU');
			return true;
		}
		return true;
	}
}