<?php defined('JOOBI_SECURE') or die('J....');
class Data_catalog_product_subimg_listing_view extends WDataView{
var $yid=797;
var $wid='#catalog.node';
var $type=2;
var $params='classes=str_subimage';
var $namekey='product_subimg_listing';
var $frontend=1;
var $level=25;
var $subtype=210;
var $filters=1;
var $sid='#product.images';
var $form=1;
var $icon='default';
var $rolid='#allusers';
var $alias='Product page subimages';
var $useredit=1;
var $name='1206961995OYES';
var $description='1470801991OOAA';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.customized',
'sid'=>'#product.images',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=subimages
lid=2125
typec=product.subimages
thumb=1
imgfull=1
classes=jsubimages',
'ordering'=>1,
'map'=>'filid',
'lid'=>2125,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'product_subimg_listing_product_images_filid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961995OYFZ',
'description'=>'',
'textlink'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#str_product_subimages_797',
'bktbefore'=>'0',
'sid'=>'#product.images',
'map'=>'ordering',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>1,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'str_product_subimages_797',
'name'=>'',
'ordering'=>'0',
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#str_product_subimages_pid_797',
'bktbefore'=>'0',
'sid'=>'#product.images',
'map'=>'pid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>32,
'params'=>'',
'namekey'=>'str_product_subimages_pid_797',
'name'=>'',
'ordering'=>'0',
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#str_remove_main_pic_front_797',
'bktbefore'=>'0',
'sid'=>'#product.images',
'map'=>'ordering',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>1,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'str_remove_main_pic_front_797',
'name'=>'',
'ordering'=>'0',
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}