<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_main_view_listings_listing_view extends WDataView{
var $yid=501630;
var $wizard=1;
var $wid='#main.node';
var $type=2;
var $params='graphtype=
phpfile=1';
var $namekey='main_view_listings_listing';
var $menu=13;
var $dropdown=3;
var $pagination=1;
var $filters=1;
var $sid='#main.view';
var $form=1;
var $icon='model';
var $rolid='#admin';
var $alias='Main Listings';
var $name='1206961868QEYE';
var $description='';
var $wname='1347652452OQAO';
var $wdescription='1347652452OQAP';
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
'lid'=>15775,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view__copy6869',
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
'sid'=>'#main.view',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=main-view&task=edit(eid=yid) n width=2%',
'ordering'=>2,
'map'=>'yid',
'lid'=>15776,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_check_yid_copy9464',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732392OZVA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.viewtrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'order=1',
'ordering'=>3,
'map'=>'name',
'lid'=>15777,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_trans_copy5613',
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
'sid'=>'#main.viewtrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
remt=1
lien=controller=main-view&task=edit(eid=yid)',
'ordering'=>4,
'map'=>'name',
'lid'=>20730,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_trans_copy5613_copy1492516327',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_listing_main_view_trans_copy5613',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.view',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
remt=1',
'ordering'=>5,
'map'=>'alias',
'lid'=>20731,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_trans_copy5613_copy1492516327_copy1492516355',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_listing_main_view_trans_copy5613',
'name'=>'1211811583DBTA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.viewtrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>6,
'map'=>'description',
'lid'=>15778,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_trans_description_copy3933',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_listing_main_view_trans_copy5613',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.textlink',
'sid'=>'#main.view',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=main-listing(yid=yid)
usebtn=1
color=success
width=8%
align=center',
'ordering'=>7,
'map'=>'yid',
'lid'=>15779,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_yid_2_copy7154',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1233298082QODE',
'description'=>'',
'textlink'=>'1462284636EIMB' ),
array(
'type'=>'output.textlink',
'sid'=>'#main.view',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=main-menu(yid=yid)(titleheader=main.viewtrans:name)
usebtn=1
color=info
width=7%
align=center',
'ordering'=>8,
'map'=>'yid',
'lid'=>15780,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_yid_menus_copy7835',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961868QEYD',
'description'=>'',
'textlink'=>'1206961868QEYD' ),
array(
'type'=>'output.text',
'sid'=>'#main.view',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'namekey',
'lid'=>15782,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_main_view_namekey_copy8084',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1398436917DTKC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#apps',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>10,
'map'=>'name',
'lid'=>15783,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_apps_name_copy8358',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWXH',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.view',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'sid',
'lid'=>15788,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_main_view_sid_copy6367',
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
'type'=>'output.access',
'sid'=>'#main.view',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'rolid',
'lid'=>15784,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_main_view_rolid_copy9230',
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
'sid'=>'#main.view',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'infonly=1
align=center',
'ordering'=>13,
'map'=>'useredit',
'lid'=>20483,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listings_listing_useredit',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#main.view',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'infonly=1',
'ordering'=>14,
'map'=>'publish',
'lid'=>15785,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_main_view_publish_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKN',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.view',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'alias',
'lid'=>15789,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_main_view_alias_copy7961',
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
'sid'=>'#main.view',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'infonly=1',
'ordering'=>16,
'map'=>'core',
'lid'=>15786,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_main_view_core_copy6239',
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
'type'=>'output.text',
'sid'=>'#main.view',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'wid',
'lid'=>15790,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_main_view_wid_copy5878',
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
'sid'=>'#main.view',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'width=2%',
'ordering'=>18,
'map'=>'yid',
'lid'=>15787,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'main_view_listing_yid_copy9633',
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
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'confirm=1
lslct=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'default',
'action'=>'restore',
'mid'=>13513,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'main_view_listings_listing_restore',
'faicon'=>'',
'color'=>'warning',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1217608861BKDT',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=0',
'ordering'=>3,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>10650,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'main_views_listing_divider_copy9877_copy5656_copy3960',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>2,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'level'=>'0',
'icon'=>'',
'action'=>'directedit',
'mid'=>10647,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'main_views_listing_direct_edit_copy2886',
'faicon'=>'',
'color'=>'info',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWXQ',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=0',
'ordering'=>5,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>10648,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'main_views_listing_divider_copy1163',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>2,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1',
'ordering'=>6,
'level'=>'0',
'icon'=>'edit',
'action'=>'edit',
'mid'=>10649,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'main_views_listing_edit_copy3482',
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
'ordering'=>7,
'level'=>'0',
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>10651,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'main_views_listing_deleteall_copy1039',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKL',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=0',
'ordering'=>8,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>10652,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'main_views_listing_divider_copy9877_copy2524',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#main_view_listings_listing_useredit',
'bktbefore'=>'0',
'sid'=>'#main.view',
'map'=>'useredit',
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
'namekey'=>'main_view_listings_listing_useredit',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#2fkq6hz72_copy9313_copy8247',
'bktbefore'=>'0',
'sid'=>'#main.view',
'map'=>'core',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'ASC',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>30,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'2fkq6hz72_copy9313_copy8247',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#2shrmpz72',
'bktbefore'=>'0',
'sid'=>'#main.view',
'map'=>'type',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>2,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'2shrmpz72',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#2fkq6hz72_copy4099_copy3624',
'bktbefore'=>'0',
'sid'=>'#main.view',
'map'=>'publish',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'DESC',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'2fkq6hz72_copy4099_copy3624',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#2fkq6hz72_copy2396',
'bktbefore'=>'0',
'sid'=>'#main.view',
'map'=>'wid',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>30,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'2fkq6hz72_copy2396',
'name'=>'',
'ordering'=>5,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#main#main_nodes',
'ordering'=>'0' )
);
}