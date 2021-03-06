<?php defined('JOOBI_SECURE') or die('J....');
class Data_wishlist_wishlist_products_table extends WDataTable{
var $name='wishlist_products';
var $namekey='wishlist.products';
var $dbtid=932;
var $rolid='#allusers';
var $type=30;
var $pkey='wlid,pid,vendid,catid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='wishlist';
var $columnsA=array(
array(
'dbcid'=>8542,
'name'=>'wlid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'932wlid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8543,
'name'=>'pid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'932pid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'itemID',
'fieldtype'=>'' ),
array(
'dbcid'=>8547,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>1,
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'publish932',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8929,
'name'=>'vendid',
'pkey'=>1,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'vendid932',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'vendorID',
'fieldtype'=>'' ),
array(
'dbcid'=>8930,
'name'=>'catid',
'pkey'=>1,
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'catid932',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'categoryID',
'fieldtype'=>'' ),
array(
'dbcid'=>8546,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'created932',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8931,
'name'=>'name',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>254.0,
'export'=>1,
'namekey'=>'name932',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>932,
'ref_dbtid'=>930,
'name'=>'wlid',
'name2'=>'wlid',
'namekey'=>'FK_wishlist_products_node_wlid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#wishlist#wishlist_node' ),
array(
'dbtid'=>932,
'ref_dbtid'=>309,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_wishlist_products_pid_pid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#item#product_trans' ),
array(
'dbtid'=>932,
'ref_dbtid'=>335,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_wishlist_products_pid_catid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#item#productcat_trans' ),
array(
'dbtid'=>932,
'ref_dbtid'=>652,
'name'=>'vendid',
'name2'=>'vendid',
'namekey'=>'FK_wishlist_products_vendid_vendid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>4,
'ref_table'=>'#vendor#vendor_node' ),
array(
'dbtid'=>932,
'ref_dbtid'=>947,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_wishlist_products_catid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>5,
'ref_table'=>'#mailing#mailing_mailingcat' )
);

var $contraintsA=array(
array(
'ctid'=>65890,
'type'=>3,
'namekey'=>'PK_wishlist_products' ),
array(
'ctid'=>66299,
'type'=>2,
'namekey'=>'IX_wishlist_products_pid_publish' )
);
}