<?php 


* @license GNU GPLv3 */

class Comment_Comment_post_fe_view extends Output_Forms_class {
	function prepareView() {
		if ( ! WUser::get('uid') || ! WPref::load( 'PCOMMENT_NODE_ALLOWIMAGE' ) ) {
			$this->removeElements( 'post_comment_fe_comment_filid' );
		}
		return true;
	}
}