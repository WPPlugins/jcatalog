<?php 


* @license GNU GPLv3 */

class Theme_upload_controller extends WController {
function upload(){
$appsUploadC=WClass::get('apps.upload');
$status=$appsUploadC->uploadINstallPackage();
if(!$status ) return true;
return true;
}
}