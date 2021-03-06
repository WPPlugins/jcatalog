<?php defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_rule_condition_table extends WDataTable{
var $name='rule_condition';
var $namekey='rule.condition';
var $dbtid=811;
var $rolid='#allusers';
var $type=1;
var $pkey='cdtid';
var $suffix='condition';
var $group='rule';
var $domain=51;
var $export=2;
var $engine=7;
var $node='mailbox';
var $columnsA=array(
array(
'dbcid'=>7417,
'name'=>'cdtid',
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
'namekey'=>'811cdtid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7439,
'name'=>'subject',
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
'size'=>254.0,
'export'=>1,
'namekey'=>'subject811',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7440,
'name'=>'fromemail',
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
'namekey'=>'fromemail811',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7441,
'name'=>'toemail',
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
'namekey'=>'toemail811',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7442,
'name'=>'wordswithin',
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
'size'=>254.0,
'export'=>1,
'namekey'=>'wordswithin811',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7443,
'name'=>'wordsnotin',
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
'size'=>254.0,
'export'=>1,
'namekey'=>'wordsnotin811',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7444,
'name'=>'condition',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'condition811',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7445,
'name'=>'datefrom',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'datefrom811',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7446,
'name'=>'dateto',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'dateto811',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7447,
'name'=>'attachment',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'attachment811',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>809,
'ref_dbtid'=>811,
'name'=>'cdtid',
'name2'=>'cdtid',
'namekey'=>'809_cdtid_811',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>99,
'ref_table'=>'#mailbox#rule_node' )
);

var $contraintsA=array(
array(
'ctid'=>65716,
'type'=>3,
'namekey'=>'PK_rule_condition' )
);
}