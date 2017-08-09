<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_credentials_node_table extends WDataTable{
var $name='credentials_node';
var $namekey='credentials.node';
var $dbtid=997;
var $rolid='#allusers';
var $type=1;
var $pkey='crdid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='main';
var $columnsA=array(
array(
'dbcid'=>9085,
'name'=>'crdid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'997crdid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9086,
'name'=>'namekey',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>150.0,
'export'=>1,
'namekey'=>'namekey997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>9092,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>1,
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'publish997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9207,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>16,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9221,
'name'=>'premium',
'pkey'=>'0',
'checkval'=>1,
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>18,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'premium997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9087,
'name'=>'alias',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>150.0,
'export'=>1,
'namekey'=>'alias997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9088,
'name'=>'type',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'type997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9089,
'name'=>'rolid',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'rolid997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9090,
'name'=>'uid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'uid997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>9091,
'name'=>'modifiedby',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'modifiedby997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9093,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'created997',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9094,
'name'=>'modified',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'modified997',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9095,
'name'=>'params',
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
'namekey'=>'params997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9096,
'name'=>'directory',
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
'size'=>255.0,
'export'=>1,
'namekey'=>'directory997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9097,
'name'=>'username',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>13,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>200.0,
'export'=>1,
'namekey'=>'username997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9098,
'name'=>'passcode',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>14,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>200.0,
'export'=>1,
'namekey'=>'passcode997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9099,
'name'=>'url',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>15,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>250.0,
'export'=>1,
'namekey'=>'url997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9219,
'name'=>'crdidtype',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>17,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'crdidtype997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10968,
'name'=>'apisecret',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>19,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>254.0,
'export'=>1,
'namekey'=>'apisecret997',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>997,
'ref_dbtid'=>232,
'name'=>'modifiedby',
'name2'=>'uid',
'namekey'=>'FK_credentials_node_uid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>1,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>997,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_credentials_node_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#role#role_node' ),
array(
'dbtid'=>997,
'ref_dbtid'=>1003,
'name'=>'crdidtype',
'name2'=>'crdidtype',
'namekey'=>'FK_credentials_node_crdidtype',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#main#credentials_type' )
);

var $contraintsA=array(
array(
'ctid'=>65976,
'type'=>3,
'namekey'=>'PK_credentials_node' ),
array(
'ctid'=>65977,
'type'=>1,
'namekey'=>'UK_credentials_node_namekey' ),
array(
'ctid'=>66277,
'type'=>2,
'namekey'=>'IX_credentials_node_premium_publish_ordering' )
);

var $contraintsItemsA=array(
array(
'ctid'=>65977,
'dbcid'=>9086,
'ordering'=>5 )
);
}