<?php 


* @license GNU GPLv3 */

class Item_CoreUnpublishapproval_button extends WButtons_external {
function create() {
	if ( WRoles::isAdmin( 'storemanager' ) ) return false;
	$unpublishApprove = WPref::load( 'PVENDORS_NODE_UNPUBLISHAPPROVE' );
	if (empty($unpublishApprove)) return false;
	$text = WText::t('1306763087RUZI');
	$this->setTitle( $text );
	$this->setIcon( 'unpublish' );
	$this->setAction( 'unpublishapproval' );
	return true;
}
}