<?php 


* @license GNU GPLv3 */

class Theme_Theme_node_show_view extends Output_Forms_class {
function prepareView(){
$type=$this->getValue('type');
if( 106==$type){
$this->removeMenus( array('theme_node_show_edit','theme_node_show_add_file','theme_node_show_upload_file','theme_node_show_2'));
}else{
$this->removeMenus( array('theme_node_show_edit_newsletter'));
}
return true;
}
}