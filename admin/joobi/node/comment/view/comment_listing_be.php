<?php 


* @license GNU GPLv3 */

class Comment_Comment_listing_be_view extends Output_Listings_class {
function prepareView() {
	if ( JOOBI_FRAMEWORK_TYPE != 'joomla' ) {
		$this->removeElements( array( 'comment_listing_be_joomla_content_id', 'comment_listing_be_joomla_content_catid', 'comment_listing_be_joomla_content_alias' ) );
	}
	return true;
}}