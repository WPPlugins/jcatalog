<?php 


* @license GNU GPLv3 */

class Mailbox_Node_model extends WModel {
function validate() {
	$this->server = trim( $this->server );
	$this->username = trim( $this->username );
	$this->password = trim( $this->password );
	return true;
}}