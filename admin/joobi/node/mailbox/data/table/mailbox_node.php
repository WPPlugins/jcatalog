<?php defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_mailbox_node_table extends WDataTable{
var $name='mailbox_node';
var $namekey='mailbox.node';
var $dbtid=681;
var $rolid='#allusers';
var $type=1;
var $pkey='inbid';
var $suffix='node';
var $group='mailbox';
var $domain=51;
var $export=2;
var $engine=7;
var $node='mailbox';
var $columnsA=array(
array(
'dbcid'=>6583,
'name'=>'inbid',
'pkey'=>1,
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'681inbid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6584,
'name'=>'password',
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
'size'=>250.0,
'export'=>1,
'namekey'=>'password681',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6585,
'name'=>'server',
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
'size'=>250.0,
'export'=>1,
'namekey'=>'server681',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6586,
'name'=>'username',
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
'size'=>255.0,
'export'=>1,
'namekey'=>'username681',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6587,
'name'=>'addon',
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
'size'=>255.0,
'export'=>1,
'namekey'=>'addon681',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6588,
'name'=>'description',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'description681',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6589,
'name'=>'name',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>250.0,
'export'=>1,
'namekey'=>'name681',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6590,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>1,
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'publish681',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6605,
'name'=>'params',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'params681',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11101,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering681',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>735,
'ref_dbtid'=>681,
'name'=>'inbid',
'name2'=>'inbid',
'namekey'=>'FX_mailbox_message_inbid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#mailbox#mailbox_messages' ),
array(
'dbtid'=>684,
'ref_dbtid'=>681,
'name'=>'inbid',
'name2'=>'inbid',
'namekey'=>'inbid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#mailbox#emanager_mailbox' )
);

var $contraintsA=array(
array(
'ctid'=>65597,
'type'=>3,
'namekey'=>'PK_mailbox_node' )
);
}