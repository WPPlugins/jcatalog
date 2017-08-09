<?php 


* @license GNU GPLv3 */

class Item_CoreDashboard_module extends WModule {
	public function create() {
		$controller = new stdClass;
		$controller->wid = WExtension::get( 'item.node', 'wid' );
		$params = new stdClass;
		$form = WView::getHTML( 'item_node_dashboard' , $controller, $params );
		if ( !empty($form) ) $this->content = '<div>' . $form->make() . '</div>';
	}
}