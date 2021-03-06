<?php defined('JOOBI_SECURE') or die('J....');
class Data_install_widgets_type_table extends WDataTable{
var $name='widgets_type';
var $namekey='widgets.type';
var $dbtid=1030;
var $rolid='#allusers';
var $type=1;
var $pkey='wgtypeid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='install';
var $columnsA=array(
array(
'dbcid'=>9581,
'name'=>'wgtypeid',
'pkey'=>1,
'checkval'=>'0',
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>1,
'size'=>0.0,
'export'=>'0',
'namekey'=>'1030wgtypeid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9588,
'name'=>'namekey',
'pkey'=>'0',
'checkval'=>'0',
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>100.0,
'export'=>'0',
'namekey'=>'namekey1030',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>9589,
'name'=>'alias',
'pkey'=>'0',
'checkval'=>'0',
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>150.0,
'export'=>'0',
'namekey'=>'alias1030',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9590,
'name'=>'type',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'type1030',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9591,
'name'=>'rolid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'rolid1030',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9592,
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
'export'=>'0',
'namekey'=>'uid1030',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>9593,
'name'=>'core',
'pkey'=>'0',
'checkval'=>'0',
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'core1030',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9594,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'publish1030',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9595,
'name'=>'created',
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
'export'=>'0',
'namekey'=>'created1030',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9596,
'name'=>'modified',
'pkey'=>'0',
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
'export'=>'0',
'namekey'=>'modified1030',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9678,
'name'=>'groupid',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>12,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'groupid1030',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>1031,
'ref_dbtid'=>1030,
'name'=>'wgtypeid',
'name2'=>'wgtypeid',
'namekey'=>'FK_widgets_type_trans_wgtypeid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#install#widgets_type_trans' ),
array(
'dbtid'=>1014,
'ref_dbtid'=>1030,
'name'=>'wgtypeid',
'name2'=>'wgtypeid',
'namekey'=>'FK_widgets_node_wgtypeid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>4,
'ref_table'=>'#library#widgets_node' )
);

var $contraintsA=array(
array(
'ctid'=>66026,
'type'=>3,
'namekey'=>'PK_widgets_type' ),
array(
'ctid'=>66028,
'type'=>1,
'namekey'=>'UK_widgets_type_namekey' )
);

var $contraintsItemsA=array(
array(
'ctid'=>66028,
'dbcid'=>9588,
'ordering'=>5 )
);
}