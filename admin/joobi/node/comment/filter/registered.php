<?php 


* @license GNU GPLv3 */

class Comment_Registered_filter {
function create() {
	$loguid = 1;	
	if (WUser::isRegistered())	$loguid = WUser::get('uid');	
	return $loguid ;
}}