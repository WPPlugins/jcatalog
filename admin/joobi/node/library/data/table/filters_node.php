<?php defined('JOOBI_SECURE') or die('J....');
class Data_library_filters_node_table extends WDataTable{
var $name='filters_node';
var $namekey='filters.node';
var $dbtid=185;
var $rolid='#allusers';
var $type=1;
var $pkey='flid';
var $suffix='node';
var $group='filters';
var $domain=9;
var $export=0;
var $noaudit=1;
var $engine=7;
var $node='library';
var $columnsA=array(
array(
'dbcid'=>1276,
'name'=>'flid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'185flid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1279,
'name'=>'sid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185sid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1289,
'name'=>'level',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>14,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185level',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1290,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>17,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185publish',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>2403,
'name'=>'namekey',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>6,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>100.0,
'export'=>1,
'namekey'=>'185namekey',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>6462,
'name'=>'yid',
'pkey'=>'0',
'checkval'=>1,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'yid185',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6463,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>19,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering185',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1278,
'name'=>'bktbefore',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>16,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185bktbefore',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1280,
'name'=>'map',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>5,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>30.0,
'export'=>1,
'namekey'=>'185map',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1282,
'name'=>'type',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>9,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185type',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1283,
'name'=>'ref_sid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>12,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185ref_sid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1284,
'name'=>'refmap',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>30.0,
'export'=>1,
'namekey'=>'185refmap',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1286,
'name'=>'bktafter',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>15,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185bktafter',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1287,
'name'=>'logicopr',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>13,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185logicopr',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1657,
'name'=>'condopr',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>8,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185condopr',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1658,
'name'=>'typea',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>10,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185typea',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1659,
'name'=>'typeb',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>11,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185typeb',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1660,
'name'=>'params',
'pkey'=>'0',
'checkval'=>'0',
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>18,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'185params',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3522,
'name'=>'name',
'pkey'=>'0',
'checkval'=>'0',
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>7,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>40.0,
'export'=>1,
'namekey'=>'185name',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10879,
'name'=>'requiresvalue',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>20,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'requiresvalue185',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10890,
'name'=>'requirednode',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>21,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>100.0,
'export'=>1,
'namekey'=>'requirednode185',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11028,
'name'=>'rolid',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>22,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'rolid185',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11029,
'name'=>'isadmin',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>23,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'isadmin185',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>185,
'ref_dbtid'=>2,
'name'=>'yid',
'name2'=>'yid',
'namekey'=>'FK_filters_node_yid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#library#layout_node' ),
array(
'dbtid'=>185,
'ref_dbtid'=>621,
'name'=>'sid',
'name2'=>'sid',
'namekey'=>'FK_filters_node_sid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#library#model_node' ),
array(
'dbtid'=>185,
'ref_dbtid'=>621,
'name'=>'ref_sid',
'name2'=>'sid',
'namekey'=>'FK_filter_node_ref_sid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>3,
'ref_table'=>'#library#model_node' ),
array(
'dbtid'=>185,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_filters_node_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>4,
'ref_table'=>'#role#role_node' )
);

var $contraintsA=array(
array(
'ctid'=>8129,
'type'=>1,
'namekey'=>'UK_filters_node_namekey' ),
array(
'ctid'=>65543,
'type'=>3,
'namekey'=>'PK_filters_node_did' ),
array(
'ctid'=>65869,
'type'=>2,
'namekey'=>'IX_filters_node_yid_publish_ordering_level' ),
array(
'ctid'=>65870,
'type'=>2,
'namekey'=>'IX_filters_node_sid' )
);

var $contraintsItemsA=array(
array(
'ctid'=>8129,
'dbcid'=>2403,
'ordering'=>1 )
);
}