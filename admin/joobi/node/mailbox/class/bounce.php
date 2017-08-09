<?php 


* @license GNU GPLv3 */

class Mailbox_Bounce_class extends WClasses {
	public function addHandled($email,$type) {
		if ( empty($email) || empty($type) ) return null;
		$returnedInfos = new stdClass;
		$time = time();
		$mailboxHandledM = WModel::get( 'mailbox.handled' );
		$mailboxHandledM->whereE('email',$email);
		$mailboxHandledM->whereE('type',$type);
		$infos = $mailboxHandledM->load( 'o', array('total','created') );
		if ( empty($infos->total) ) {
						$mailboxHandledM->setVal('email',$email);
			$mailboxHandledM->setVal('type',$type);
			$mailboxHandledM->setVal('created',$time);
			$mailboxHandledM->setVal('modified',$time);
			$mailboxHandledM->setVal('total',1);
			$mailboxHandledM->setIgnore();
			$mailboxHandledM->insert();
			$returnedInfos->total = 1;
			$returnedInfos->delay = 0;
		} else {
						$returnedInfos->total = $infos->total + 1;
			$mailboxHandledM->whereE('email',$email);
			$mailboxHandledM->whereE('type',$type);
			$mailboxHandledM->setVal('modified',$time);
			$mailboxHandledM->setVal('total',$returnedInfos->total);
			$mailboxHandledM->update();
			$returnedInfos->delay = $time - $infos->created;
		}
		return $returnedInfos;
	}
}