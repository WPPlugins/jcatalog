<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_type_table extends WDataTable{
var $name='ticket_type';
var $namekey='ticket.type';
var $dbtid=1010;
var $rolid='#allusers';
var $type=1;
var $pkey='tktypeid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='ticket';
var $columnsA=array(
array(
'dbcid'=>9348,
'name'=>'tktypeid',
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
'namekey'=>'1010tktypeid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9355,
'name'=>'namekey',
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
'size'=>150.0,
'export'=>1,
'namekey'=>'namekey1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>9356,
'name'=>'alias',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>150.0,
'export'=>1,
'namekey'=>'alias1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9357,
'name'=>'type',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'type1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9358,
'name'=>'rolid',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'rolid1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9359,
'name'=>'uid',
'pkey'=>'0',
'checkval'=>'0',
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
'namekey'=>'uid1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>9360,
'name'=>'modifiedby',
'pkey'=>'0',
'checkval'=>'0',
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
'namekey'=>'modifiedby1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9361,
'name'=>'core',
'pkey'=>'0',
'checkval'=>1,
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'core1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9362,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>11,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'publish1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9363,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
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
'namekey'=>'created1010',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9364,
'name'=>'modified',
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
'namekey'=>'modified1010',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9377,
'name'=>'params',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>13,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'params1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9378,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>9,
'ordering'=>12,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering1010',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>1012,
'ref_dbtid'=>1010,
'name'=>'tktypeid',
'name2'=>'tktypeid',
'namekey'=>'FK_ticket_type_tktypeid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#ticket#ticket_typetrans' ),
array(
'dbtid'=>1010,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_ticket_type_uid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>1,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>1010,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_ticket_type_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#role#role_node' )
);

var $contraintsA=array(
array(
'ctid'=>65991,
'type'=>3,
'namekey'=>'PK_ticket_type' ),
array(
'ctid'=>65993,
'type'=>1,
'namekey'=>'UK_namekey_ticket_type' )
);

var $contraintsItemsA=array(
array(
'ctid'=>65993,
'dbcid'=>9355,
'ordering'=>5 )
);
}