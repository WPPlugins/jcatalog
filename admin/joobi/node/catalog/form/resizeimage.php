<?php 


* @license GNU GPLv3 */

WView::includeElement( 'form.image' );
class Catalog_Resizeimage_form extends WForm_image {
function show() {
	$pageParams = WGlobals::get( 'categoryPageParams', null, 'global' );
	if ( !empty($pageParams->categoryImageWidth) ) $this->resizedWidth = $pageParams->categoryImageWidth;
	if ( !empty($pageParams->categoryImageHeight) ) $this->resizedHeight = $pageParams->categoryImageHeight;
	return parent::show();
}
}