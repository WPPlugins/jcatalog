<?php 


* @license GNU GPLv3 */

class Comment_articles_enable_controller extends WController {
function enable() {
	if ( JOOBI_FRAMEWORK_TYPE != 'joomla' ) return true;
	$model = 'role.content';
	$id = WGlobals::get( 'id' );			
	if ( empty($id) ) return true; 			
		$cmtRestrictC = WClass::get('comment.restrictions');
	$cmtRestrictC->enable($id, $model);
	WPages::redirect('controller=comment-articles');
	return true;
}}