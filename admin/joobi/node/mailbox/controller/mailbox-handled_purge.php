<?php 


* @license GNU GPLv3 */

class Mailbox_handled_purge_controller extends WController {
	function purge() {
		$mailboxHandledM = WModel::get( 'mailbox.handled' );
		$mailboxHandledM->emptyTable();
		$message = WMessage::get();
		$message->userS('1241989381TANT');
		return true;
	}}