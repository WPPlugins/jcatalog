<?php 


* @license GNU GPLv3 */

class Currency_Updateexchangerate_scheduler extends Scheduler_Parent_class {
	function process() {
		$curRateC = WClass::get( 'currency.rate' );
		$curRateC->updateExchangeRate();
		return true;
	}
}