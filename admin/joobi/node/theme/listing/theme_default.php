<?php 


* @license GNU GPLv3 */

WView::includeElement('listing.yesno');
class Theme_Theme_default_listing extends WListing_yesno {
function create(){
if($this->getValue('publish')==0){
$this->element->infonly=1;
}
return parent::create();
}
}