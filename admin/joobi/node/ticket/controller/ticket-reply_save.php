<?php 


* @license GNU GPLv3 */

class Ticket_reply_save_controller extends WController {
	function save() {
		parent::save();
		WPages::redirect( 'controller=ticket' );
		return true;
	}
}