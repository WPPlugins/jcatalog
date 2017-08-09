<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_product_trans_table extends WDataTable{
var $name='product_trans';
var $namekey='product.trans';
var $dbtid=309;
var $rolid='#allusers';
var $type=20;
var $pkey='pid,lgid';
var $suffix='trans';
var $group='product';
var $domain=51;
var $export=2;
var $engine=5;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>1737,
'name'=>'description',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'309description',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1738,
'name'=>'lgid',
'pkey'=>1,
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>4.0,
'export'=>1,
'namekey'=>'309lgid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1739,
'name'=>'name',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>150.0,
'export'=>1,
'namekey'=>'309name',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1740,
'name'=>'pid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'309pid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'itemID',
'fieldtype'=>'' ),
array(
'dbcid'=>5863,
'name'=>'introduction',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>5,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'309introduction',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6804,
'name'=>'auto',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>2,
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'auto309',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6805,
'name'=>'fromlgid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'fromlgid309',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7705,
'name'=>'seotitle',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>255.0,
'export'=>1,
'namekey'=>'seotitle309',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7706,
'name'=>'seodescription',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>255.0,
'export'=>1,
'namekey'=>'seodescription309',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7707,
'name'=>'seokeywords',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>255.0,
'export'=>1,
'namekey'=>'seokeywords309',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10880,
'name'=>'promo',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>11,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'promo309',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11105,
'name'=>'shorturl',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>12,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>250.0,
'export'=>1,
'namekey'=>'shorturl309',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>309,
'ref_dbtid'=>306,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_product_trans_pid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#product_node' ),
array(
'dbtid'=>703,
'ref_dbtid'=>309,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_subscription_history_pid_trans',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#subscription#subscription_history' ),
array(
'dbtid'=>932,
'ref_dbtid'=>309,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_wishlist_products_pid_pid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#wishlist#wishlist_products' ),
array(
'dbtid'=>309,
'ref_dbtid'=>199,
'name'=>'lgid',
'name2'=>'lgid',
'namekey'=>'FK_product_trans_lgid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#library#language_node' )
);

var $contraintsA=array(
array(
'ctid'=>65400,
'type'=>3,
'namekey'=>'PK_producttrans_pid_lgid' ),
array(
'ctid'=>66043,
'type'=>5,
'namekey'=>'FX_product_trans_name' ),
array(
'ctid'=>66044,
'type'=>5,
'namekey'=>'FX_product_trans_description' ),
array(
'ctid'=>66045,
'type'=>5,
'namekey'=>'FX_product_trans_introduction' )
);

var $contraintsItemsA=array(
array(
'ctid'=>66043,
'dbcid'=>1739,
'ordering'=>1 ),
array(
'ctid'=>66044,
'dbcid'=>1737,
'ordering'=>1 ),
array(
'ctid'=>66045,
'dbcid'=>5863,
'ordering'=>1 )
);
}