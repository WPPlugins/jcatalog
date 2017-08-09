<?php 


* @license GNU GPLv3 */

class Comment_CoreUseful_listing extends WListings_default{
function create() {
	$usefulclick = $this->getValue('usefulclick');		
	$useful	= $this->getValue('useful');				
	$tkid	= $this->getValue('tkid');					
	$authoruid = $this->getValue('authoruid');			
	$clickID = $this->getValue('clickid');
	$commentButtonC = WClass::get( 'comment.button', null, 'class', false );
	if ( empty($commentButtonC) ) return true;	
	$this->content = $commentButtonC->useful( $usefulclick, $useful, $tkid, $authoruid, $clickID );
	return true;
}}