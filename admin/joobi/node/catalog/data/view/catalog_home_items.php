<?php defined('JOOBI_SECURE') or die('J....');
class Data_catalog_catalog_home_items_view extends WDataView{
var $yid=500734;
var $wid='#catalog.node';
var $type=2;
var $params='head=1
nolist=1
subtitle=1
mtype=image
phpfile=1
cssfile=1';
var $namekey='catalog_home_items';
var $frontend=1;
var $subtype=250;
var $filters=1;
var $sid='#product';
var $form=1;
var $icon='view';
var $rolid='#allusers';
var $alias='Featured Items in Homepage';
var $useredit=1;
var $name='1304253971PIKJ';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $filtersA=array(
array(
'flid'=>'#productfeat_leftjoinpremium',
'bktbefore'=>'0',
'sid'=>'#product.images',
'map'=>'premium',
'type'=>50,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'productfeat_leftjoinpremium',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_wherepid',
'bktbefore'=>'0',
'sid'=>'#product',
'map'=>'pid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'product.limitpid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>15,
'typea'=>1,
'typeb'=>90,
'params'=>'',
'namekey'=>'product_wherepid',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_whererolid',
'bktbefore'=>'0',
'sid'=>'#product',
'map'=>'rolid',
'type'=>7,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'product_whererolid',
'name'=>'',
'ordering'=>6,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#productfeat_startavail',
'bktbefore'=>'0',
'sid'=>'#product',
'map'=>'publishstart',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>5,
'typea'=>1,
'typeb'=>21,
'params'=>'',
'namekey'=>'productfeat_startavail',
'name'=>'',
'ordering'=>7,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#productfeat_endavail',
'bktbefore'=>1,
'sid'=>'#product',
'map'=>'publishend',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>2,
'typea'=>1,
'typeb'=>21,
'params'=>'',
'namekey'=>'productfeat_endavail',
'name'=>'',
'ordering'=>8,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#prd_feat_grppid',
'bktbefore'=>'0',
'sid'=>'#product',
'map'=>'pid',
'type'=>9,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'prd_feat_grppid',
'name'=>'',
'ordering'=>9,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#productfeat_endavailzero',
'bktbefore'=>'0',
'sid'=>'#product',
'map'=>'publishend',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>1,
'logicopr'=>1,
'level'=>'0',
'publish'=>1,
'condopr'=>4,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'productfeat_endavailzero',
'name'=>'',
'ordering'=>10,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#catalog#catalog_home_items_sorting',
'ordering'=>'0' )
);
}