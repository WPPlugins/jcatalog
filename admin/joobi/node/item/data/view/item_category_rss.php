<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_category_rss_view extends WDataView{
var $yid=500868;
var $wid='#item.node';
var $type=2;
var $params='hdata=catid
graphtype=';
var $namekey='item_category_rss';
var $frontend=1;
var $subtype=230;
var $filters=1;
var $sid='#item';
var $form=1;
var $icon='help';
var $rolid='#allusers';
var $alias='Item Category RSS';
var $useredit=1;
var $name='1426726903FYFS';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'name',
'lid'=>10304,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'product_category_rss_itemtrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961882TDHC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'description',
'lid'=>10305,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'product_category_rss_itemtrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961882TDHD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'namekey',
'lid'=>10306,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'product_category_rss_item_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1398436917DTKC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'modified',
'lid'=>10307,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'product_category_rss_item_modified',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1262946981FCDH',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'created',
'lid'=>10308,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'product_category_rss_item_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1262946981FCDI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'map'=>'pid',
'lid'=>10309,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'product_category_rss_item_pid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961911NYAK',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.image',
'sid'=>'#item.images',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'filid',
'lid'=>10310,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'product_category_rss_item_images_filid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1263376384BKZR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.categoryitem',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'catid',
'lid'=>10311,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'product_category_rss_item_categoryitem_catid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961996SSZW',
'description'=>'',
'textlink'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#item_category_rss_catid',
'bktbefore'=>'0',
'sid'=>'#item.categoryitem',
'map'=>'catid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'catid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>33,
'params'=>'',
'namekey'=>'item_category_rss_catid',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#item_category_rss_orderby',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'created',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'DESC',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'item_category_rss_orderby',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#item_category_rss_pid_groupby',
'bktbefore'=>'0',
'sid'=>'#item',
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
'namekey'=>'item_category_rss_pid_groupby',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' )
);
}