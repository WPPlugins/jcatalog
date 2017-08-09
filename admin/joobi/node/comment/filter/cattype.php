<?php 


* @license GNU GPLv3 */

class Comment_Cattype_filter {
function create() {
	$comVal = WGlobals::get( 'sharedItemType', 0, 'global' );
	if ( !empty($comVal) ) return $comVal;
	$controller = WGlobals::get('controller');
	$task = WGlobals::get( 'task' );
	$comOption = WApplication::getApp();
	if ( 'vendors' == $controller && 'home' == $task ) $comOption = 'vendors-profile';
	$comVal = null;
	$commentType = WClass::get('comment.commenttype');
	$value = $commentType->comValue($comOption);
	return $value;
}}