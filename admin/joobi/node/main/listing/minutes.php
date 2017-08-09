<?php 


* @license GNU GPLv3 */

class WListing_Coreminutes extends WListings_default{
	function create() {
		if ( empty($this->value) || $this->value == 0 ) return false;
		$time = round( $this->value / 60, 0 );
		if ( empty($time) ) return false;
		$this->content = $time;
		$this->content .= ' ' . WText::t('1206732357ILFM');
		return true;
	}
}