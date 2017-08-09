<?php 


* @license GNU GPLv3 */

WView::includeElement( 'form.publish' );
class Item_CorePublishapproval_form extends WForm_Corepublish {
	function create() {
		if ( WRoles::isAdmin( 'storemanager' ) ) return parent::create();
		else {
			if ( ! WPref::load( 'PVENDORS_NODE_PRODNOBLOCK' ) ) return false;
			$block = $this->getValue( 'blocked' );
			if ( $block ) return false;
			else {
				$unpublishApprove = WPref::load( 'PVENDORS_NODE_UNPUBLISHAPPROVE' );
				$publishApprove = WPref::load( 'PVENDORS_NODE_PUBLISHAPPROVE' );
				if ( !empty($unpublishApprove) || !empty($publishApprove) ) $this->element->infonly = 1;
				return parent::create();
			}
		}
		return true;
	}
}