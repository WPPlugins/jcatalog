<?php 


* @license GNU GPLv3 */

class Comment_CorePrivacy_cmt_listing extends WListings_default{
function create() {
	$private = $this->getValue( 'private' );
	if ($private )
			$value='<span class="label label-success" style="font-weight:bold;">'. WText::t('1219769905FKPR').'</span>';
		else
			$value='<span class="label label-danger" style="font-weight:bold;">'. WText::t('1224166212FTLB').'</span>';
		$this->content=$value;
		$this->content .= '<br/><br/>';
	return true;
}}