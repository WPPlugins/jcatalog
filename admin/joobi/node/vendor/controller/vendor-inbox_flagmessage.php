<?php 


* @license GNU GPLv3 */

class Vendor_inbox_flagmessage_controller extends WController {
function flagmessage()
{
	$mcid = WGlobals::getEID();
	$flag = WGlobals::get( 'flag' );
	$setFlag = ( !empty($flag) ) ? 0 : 1;
	$conversationM = WModel::get( 'vendor.conversation' );
	$conversationM->setVal( 'flag', $setFlag );
	$conversationM->whereE( 'mcid', $mcid );
	$conversationM->update();
	WPages::redirect( 'controller=vendor-inbox&task=listing', true );
	return true;
}}