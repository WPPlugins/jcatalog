<?php defined('JOOBI_SECURE') or die('J....');
class Data_address_address_list_for_vendors_view extends WDataView{
var $yid=501290;
var $wid='#address.node';
var $type=2;
var $params='hdata=vendid';
var $namekey='address_list_for_vendors';
var $menu=13;
var $frontend=1;
var $pagination=1;
var $filters=1;
var $sid='#address';
var $form=1;
var $icon='about';
var $rolid='#vendor';
var $alias='List of Address for Vendors';
var $useredit=1;
var $name='1310464659GIBP';
var $description='1470801930GUQS';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.customized',
'sid'=>'#vendor',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=selectadidvendors
align=center
typec=address.radio',
'ordering'=>2,
'map'=>'adid',
'lid'=>13259,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_vendor_adid_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1212062321PNLD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'',
'lid'=>13260,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961911NYAR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>4,
'map'=>'address1',
'lid'=>13261,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_address1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#address_list_for_vendors_address',
'name'=>'1206961922ESOL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>5,
'map'=>'address2',
'lid'=>13262,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_address2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#address_list_for_vendors_address',
'name'=>'1206961922ESOM',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>6,
'map'=>'address3',
'lid'=>13263,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_address3',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#address_list_for_vendors_address',
'name'=>'1206961922ESON',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>7,
'map'=>'city',
'lid'=>13264,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_city',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#address_list_for_vendors_address',
'name'=>'1206961911NYAU',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>8,
'map'=>'state',
'lid'=>13265,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_state',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#address_list_for_vendors_address',
'name'=>'1206961922ESOZ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#countries',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>9,
'map'=>'name',
'lid'=>13266,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_countries_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#address_list_for_vendors_address',
'name'=>'1206961911NYAW',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>10,
'map'=>'zipcode',
'lid'=>13267,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_zipcode',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#address_list_for_vendors_address',
'name'=>'1206961911NYAT',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendor',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'adid',
'lid'=>13271,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_vendor_adid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'modified',
'lid'=>13272,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_modified',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>13,
'map'=>'alias',
'lid'=>13268,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_alias',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811583DBTA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.butedit',
'sid'=>'#address',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=address-vendor&task=edit(eid=adid)(vendid=vendid)
align=center',
'ordering'=>14,
'map'=>'adid',
'lid'=>13269,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_adid_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732361LXFE',
'description'=>'',
'textlink'=>'1206732361LXFE' ),
array(
'type'=>'output.butdelete',
'sid'=>'#address',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=address-vendor&task=delete(eid=adid)(vendid=vendid)
align=center',
'ordering'=>15,
'map'=>'adid',
'lid'=>13270,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_list_for_vendors_address_adid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732372QTKL',
'description'=>'',
'textlink'=>'1206732372QTKL' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'class=return',
'ordering'=>1,
'level'=>'0',
'icon'=>'new',
'action'=>'add(vendid=vendid)',
'mid'=>8345,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'address_list_for_vendors_new',
'faicon'=>'fa-plus-square',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFD',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#groupby_address_modified_copy7092',
'bktbefore'=>'0',
'sid'=>'#address',
'map'=>'adid',
'type'=>9,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'groupby_address_modified_copy7092',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#left_join_vendid',
'bktbefore'=>'0',
'sid'=>'#vendor',
'map'=>'vendid',
'type'=>50,
'ref_sid'=>'0',
'refmap'=>'vendid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>33,
'params'=>'',
'namekey'=>'left_join_vendid',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#item_where_usercreate',
'bktbefore'=>'0',
'sid'=>'#address',
'map'=>'usercreate',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'item_where_usercreate',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#item_where_vendid_vendid_copy7787',
'bktbefore'=>'0',
'sid'=>'#address',
'map'=>'vendid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'vendid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>33,
'params'=>'',
'namekey'=>'item_where_vendid_vendid_copy7787',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}