<?php 


* @license GNU GPLv3 */

class Comment_add_controller extends WController {
function add() {
	WGlobals::setEID( 0 );
	if ( WUser::isRegistered() ) {
		$this->setView( 'comment_post_fe' );
	} else {
		if ( !defined('PCOMMENT_NODE_CMTNONORREG') ) WPref::get('comment.node');
		if ( ! PCOMMENT_NODE_CMTNONORREG ) {
			$message = WMessage::get();
			$message->userW('1327547572MFBV');
		}
	}
	return true;
}
}