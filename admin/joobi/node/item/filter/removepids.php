<?php 


* @license GNU GPLv3 */

class Item_Removepids_filter {
function create() {
	$removeCurrentA = WGlobals::get( 'removeCurrentA', array() );
	return $removeCurrentA;
}}