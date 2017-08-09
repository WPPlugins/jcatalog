<?php 


* @license GNU GPLv3 */

class Currency_conversion_deletebydate_controller extends WController {
function deletebydate() {
	$curid = WGlobals::get( 'curid' );
	$date = WController::getFormValue( 'date' );
	if ( !empty($date) ) {
		$currencyHistoryM = WModel::get( 'currency.conversionhistory' );
		$currencyHistoryM->where( 'modified', '<=', $date);
		$currencyHistoryM->delete();
	}
	WPages::redirect( 'controller=currency-conversion&task=listing&curid='. $curid);
	return true;
}
}