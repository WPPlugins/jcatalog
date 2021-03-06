<?php defined('JOOBI_SECURE') or die('J....');
class Data_countries_country_node_table extends WDataTable{
var $name='country_node';
var $namekey='country.node';
var $dbtid=200;
var $rolid='#allusers';
var $type=1;
var $pkey='ctyid';
var $suffix='node';
var $group='country';
var $domain=51;
var $export=2;
var $engine=7;
var $node='countries';
var $columnsA=array(
array(
'dbcid'=>1929,
'name'=>'ctyid',
'pkey'=>1,
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'200ctyid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1931,
'name'=>'isocode3',
'pkey'=>'0',
'checkval'=>'0',
'type'=>15,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>3.0,
'export'=>1,
'namekey'=>'200isocod3',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1933,
'name'=>'namekey',
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
'size'=>80.0,
'export'=>1,
'namekey'=>'200namekey',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>8025,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>'0',
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
'namekey'=>'publish200',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8922,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering200',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1930,
'name'=>'isocode2',
'pkey'=>'0',
'checkval'=>'0',
'type'=>15,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>2.0,
'export'=>1,
'namekey'=>'200isocod2',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1932,
'name'=>'name',
'pkey'=>'0',
'checkval'=>'0',
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>5,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>80.0,
'export'=>1,
'namekey'=>'200name',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1934,
'name'=>'numcode',
'pkey'=>'0',
'checkval'=>'0',
'type'=>2,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>6,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'200numcode',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7048,
'name'=>'timezone',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'timezone200',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8761,
'name'=>'core',
'pkey'=>'0',
'checkval'=>1,
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'core200',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8945,
'name'=>'modified',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>11,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'modified200',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10969,
'name'=>'description',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>12,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'description200',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>724,
'ref_dbtid'=>200,
'name'=>'ctyid',
'name2'=>'ctyid',
'namekey'=>'ctyid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>1,
'ref_table'=>'#security#ip_node' ),
array(
'dbtid'=>734,
'ref_dbtid'=>200,
'name'=>'ctyid',
'name2'=>'ctyid',
'namekey'=>'FK_country.language_ctyid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#countries#country_language' ),
array(
'dbtid'=>313,
'ref_dbtid'=>200,
'name'=>'ctyid',
'name2'=>'ctyid',
'namekey'=>'FK_zones.countries_ctyid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#zones#zones_countries' ),
array(
'dbtid'=>690,
'ref_dbtid'=>200,
'name'=>'ctyid',
'name2'=>'ctyid',
'namekey'=>'FK_currency.country_ctyid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#currency#currency_country' ),
array(
'dbtid'=>323,
'ref_dbtid'=>200,
'name'=>'ctyid',
'name2'=>'ctyid',
'namekey'=>'FK_address_node_ctyid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#address#address_node' ),
array(
'dbtid'=>831,
'ref_dbtid'=>200,
'name'=>'ctyid',
'name2'=>'ctyid',
'namekey'=>'FK1_ctyid_200',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#users#members_country' ),
array(
'dbtid'=>232,
'ref_dbtid'=>200,
'name'=>'ctyid',
'name2'=>'ctyid',
'namekey'=>'FK_members_ctyid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>4,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>652,
'ref_dbtid'=>200,
'name'=>'originctyid',
'name2'=>'ctyid',
'namekey'=>'FK_vendors_node_originctyid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>6,
'ref_table'=>'#vendor#vendor_node' ),
array(
'dbtid'=>882,
'ref_dbtid'=>200,
'name'=>'ctyid',
'name2'=>'ctyid',
'namekey'=>'882_ctyid_200',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>99,
'ref_table'=>'#countries#country_states' )
);

var $contraintsA=array(
array(
'ctid'=>48166,
'type'=>1,
'namekey'=>'UK_country_node_namekey' ),
array(
'ctid'=>65562,
'type'=>3,
'namekey'=>'PK_country_node_ctryid' ),
array(
'ctid'=>66314,
'type'=>2,
'namekey'=>'IX_country_node_publish_isocode3_ordering' )
);

var $contraintsItemsA=array(
array(
'ctid'=>48166,
'dbcid'=>1933,
'ordering'=>1 )
);
}