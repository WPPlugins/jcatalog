<?php 


* @license GNU GPLv3 */

class Comment_Comment_fe_view extends Output_Listings_class {
function prepareView() {
		if ( ! WPref::load( 'PCOMMENT_NODE_ALLOWIMAGE' ) ) {
			$this->removeElements( 'comments_fe_commenttrans_filid' );
			$this->removeConditions( 'comment_fe_groupby_filid' );
		}
		return true;
	}}