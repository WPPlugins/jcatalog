<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_terms_listing_view extends WDataView{
var $yid=501269;
var $wid='#item.node';
var $type=2;
var $params='horizmenu=1
graphtype=
phpfile=1';
var $namekey='item_terms_listing';
var $menu=13;
var $frontend=1;
var $dropdown=3;
var $pagination=1;
var $filters=1;
var $sid='#item.terms';
var $form=1;
var $icon='about';
var $rolid='#vendor';
var $alias='Terms';
var $useredit=1;
var $name='1310010343GRLB';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'lid'=>13023,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_#',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732392OZVA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.checkbox',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'termid',
'lid'=>13044,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_terms_termid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.butedit',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=item-terms&task=edit(eid=termid)',
'ordering'=>3,
'map'=>'termid',
'lid'=>13024,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_termid_5',
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
'textlink'=>'' ),
array(
'type'=>'output.butshow',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=item-terms&task=show(eid=termid)
width=50px
align=center',
'ordering'=>4,
'map'=>'termid',
'lid'=>13042,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_termid_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732372QTKM',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.termstrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=250px',
'ordering'=>5,
'map'=>'name',
'lid'=>13038,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_termstrans_name_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.termstrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=item-terms&task=edit(eid=termid)
lienrolid=storemanager',
'ordering'=>6,
'map'=>'name',
'lid'=>13041,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_termstrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_terms_listing_item_terms_item_termstrans_name_2',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.terms',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>7,
'map'=>'namekey',
'lid'=>13045,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_terms_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_terms_listing_item_terms_item_termstrans_name_2',
'name'=>'1211811557LMRO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.terms',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>8,
'map'=>'alias',
'lid'=>13027,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_terms_alias',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_terms_listing_item_terms_item_termstrans_name_2',
'name'=>'1211811583DBTA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.termstrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>9,
'map'=>'description',
'lid'=>13039,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_termstrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_terms_listing_item_terms_item_termstrans_name_2',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=termtype
width=100px
align=center',
'ordering'=>10,
'map'=>'type',
'lid'=>13026,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_terms_type',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.terms',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'url',
'lid'=>13034,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_url',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
width=250px',
'ordering'=>15,
'map'=>'created',
'lid'=>13040,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961850KLRI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=2',
'ordering'=>16,
'map'=>'created',
'lid'=>13032,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_terms_created_4',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_terms_listing_item_terms_item_terms_created',
'name'=>'1206732411EGRY',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=3
direction=1
formatdate=73',
'ordering'=>17,
'map'=>'modified',
'lid'=>13031,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_terms_modified',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_terms_listing_item_terms_item_terms_created',
'name'=>'1206961850KLRL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendortrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'direction=1
align=center',
'ordering'=>18,
'map'=>'name',
'lid'=>17164,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_vendor_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961850KLRE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.access',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'direction=1
align=center',
'ordering'=>19,
'map'=>'rolid',
'lid'=>17166,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_rolid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAEO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'direction=1
align=center',
'ordering'=>20,
'map'=>'share',
'lid'=>17163,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_share',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1227580115NTZC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendor',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>21,
'map'=>'vendid',
'lid'=>17165,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_vendid',
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
'type'=>'main.core',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'infonly=1
order=2
direction=1',
'ordering'=>22,
'map'=>'core',
'lid'=>13030,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_core',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'infonly=1
order=1
direction=1',
'ordering'=>23,
'map'=>'publish',
'lid'=>13033,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'item_terms_listing_item_terms_item_terms_publish',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732372QTKN',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>24,
'map'=>'uid',
'lid'=>13037,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_terms_listing_item_terms_users_uid',
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
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>25,
'map'=>'uid',
'lid'=>13036,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_terms_listing_item_terms_item_terms_uid',
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
'sid'=>'#item.terms',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=2%',
'ordering'=>26,
'map'=>'termid',
'lid'=>13035,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'item_terms_listing_item_terms_item_terms_termid_3',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWXG',
'description'=>'',
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>3,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'new',
'action'=>'add',
'mid'=>8167,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'item_terms_listing_item_terms_add',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFD',
'description'=>'' ),
array(
'type'=>2,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1',
'ordering'=>2,
'level'=>'0',
'icon'=>'edit',
'action'=>'edit',
'mid'=>8168,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'item_terms_listing_item_terms_edit',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'' ),
array(
'type'=>7,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1
confirm=1',
'ordering'=>4,
'level'=>'0',
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>8170,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'item_terms_listing_item_terms_delete',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKL',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#item_terms_listing_access',
'bktbefore'=>'0',
'sid'=>'#item.terms',
'map'=>'rolid',
'type'=>7,
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
'namekey'=>'item_terms_listing_access',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#item_terms_listing_share',
'bktbefore'=>1,
'sid'=>'#item.terms',
'map'=>'share',
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
'namekey'=>'item_terms_listing_share',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#item_terms_listing_vendid',
'bktbefore'=>'0',
'sid'=>'#item.terms',
'map'=>'vendid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'item.customvendid',
'bktafter'=>1,
'logicopr'=>1,
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>90,
'params'=>'',
'namekey'=>'item_terms_listing_vendid',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#item#item_term_type',
'ordering'=>'0' )
);
}