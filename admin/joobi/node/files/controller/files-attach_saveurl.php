<?php 


* @license GNU GPLv3 */

WLoadFile( 'files.controller.files_saveurl' );
class Files_attach_saveurl_controller extends Files_saveurl_controller {
function saveurl() {
	$this->controller = 'files-attach';
	$this->index = 'popup';
	return parent::saveurl();
}}