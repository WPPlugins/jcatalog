<?php defined('JOOBI_SECURE') or die('J....');
class Data_vendor_conversation_node_table extends WDataTable{
var $name='conversation_node';
var $namekey='conversation.node';
var $dbtid=458;
var $rolid='#allusers';
var $type=1;
var $pkey='mcid';
var $suffix='node';
var $group='conversation';
var $domain=51;
var $export=2;
var $engine=7;
var $node='vendor';
var $columnsA=array(
array(
'dbcid'=>3223,
'name'=>'mcid',
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
'namekey'=>'458mcid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3229,
'name'=>'title',
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
'size'=>255.0,
'export'=>1,
'namekey'=>'458title',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3234,
'name'=>'content',
'pkey'=>'0',
'checkval'=>'0',
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'458content',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3235,
'name'=>'top',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>8,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'458top',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3236,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>5,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'458created',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3237,
'name'=>'modified',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>6,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'458modified',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3238,
'name'=>'uid',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'458uid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>3485,
'name'=>'parent',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'458parent',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7796,
'name'=>'flag',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'vendid458',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11224,
'name'=>'receiveruid',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'receiveruid458',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11227,
'name'=>'contentextra',
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
'namekey'=>'contentextra458',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>476,
'ref_dbtid'=>458,
'name'=>'mcid',
'name2'=>'mcid',
'namekey'=>'FK_conv_status_mcid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#vendor#conversation_status' ),
array(
'dbtid'=>459,
'ref_dbtid'=>458,
'name'=>'mcid',
'name2'=>'mcid',
'namekey'=>'FK_conversation_to_mcid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#vendor#conversation_to' ),
array(
'dbtid'=>458,
'ref_dbtid'=>458,
'name'=>'parent',
'name2'=>'mcid',
'namekey'=>'FK_Parent458_parentmcid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>99,
'ref_table'=>'#vendor#conversation_node' ),
array(
'dbtid'=>458,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_conversation_node_uid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>99,
'ref_table'=>'#users#members_node' )
);
}