<?php 


* @license GNU GPLv3 */

class Main_module_cache_controller extends WController {
function cache() {
	$ext=WCache::get();
	$ext->resetCache();
	WPages::redirect('previous');
	return true;
}}