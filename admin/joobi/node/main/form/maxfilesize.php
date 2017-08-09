<?php 


* @license GNU GPLv3 */

WView::includeElement( 'form.text' );
class WForm_Coremaxfilesize extends WForm_text {
	function create() {
		$this->element->width = 9;
		$status = parent::create();
		$maxFileSize1 = @ini_get('post_max_size');
		$maxFileSize2 = @ini_get('upload_max_filesize');
		$maxFileSize = ( $maxFileSize2 > $maxFileSize1 ) ? $maxFileSize2 : $maxFileSize1;
		$maxFileSizeShow = WTools::returnBytes( WTools::returnBytes( $maxFileSize ), true );
		$this->content .= '  ' . WText::t('1331164428MGHN') . ' : ' . $maxFileSizeShow;
		return $status;
	}
}