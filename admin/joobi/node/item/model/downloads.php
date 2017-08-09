<?php 


* @license GNU GPLv3 */

class Item_Downloads_model extends WModel {
	function __construct() {
		$myImageO = new stdClass;
		$myImageO->fileType = 'files';
		$myImageO->folder = 'safe';
		$myImageO->path = 'products';
		$myImageO->secure = true;		
		$myImageO->format = WPref::load( 'PITEM_NODE_DWLDFORMAT' );	
		$myImageO->maxSize = WPref::load( 'PITEM_NODE_DWLDMAXSIZE' ) * 1028;	
		$myImageO->storage = WPref::load( 'PITEM_NODE_FILES_METHOD_DOWNLOADS' );
		$this->_fileInfo['filid'] = $myImageO;
		parent::__construct();
	}
}