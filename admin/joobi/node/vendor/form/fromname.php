<?php 


* @license GNU GPLv3 */

class Vendor_CoreFromname_form extends WForms_default {
function create() {
$urlUID = WGlobals::get( 'id' );
$uid = $this->getValue( 'uid' );
$receiveruid = $this->getValue( 'receiveruid' );
if ( $urlUID == $uid ) {
$this->content = WUser::get( 'name', $receiveruid );
} else {
$this->content = WUser::get( 'name', $uid );
}
return true;
}
}