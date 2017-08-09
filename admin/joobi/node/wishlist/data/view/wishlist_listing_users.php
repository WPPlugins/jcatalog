<?php defined('JOOBI_SECURE') or die('J....');
class Data_wishlist_wishlist_listing_users_view extends WDataView{
var $yid=502302;
var $wid='#wishlist.node';
var $type=2;
var $namekey='wishlist_listing_users';
var $menu=1;
var $frontend=1;
var $pagination=1;
var $filters=1;
var $sid='#wishlist';
var $form=1;
var $icon='list';
var $rolid='#allusers';
var $alias='List of users with wishlist';
var $name='1229653442FEQZ';
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
'lid'=>19963,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'wishlist_listing_wishlist__copy1450297517',
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
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
lien=controller=users&task=show(eid=authoruid)
lienrolid=registered
popuplink=1',
'ordering'=>2,
'map'=>'username',
'lid'=>19971,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'wishlist_listing_users_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRV',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.textlink',
'sid'=>'#wishlist',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=wishlist-users-items(wlid=wlid)(titleheader=username)
usebtn=1
color=success
align=center',
'ordering'=>3,
'map'=>'wlid',
'lid'=>19964,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'wishlist_listing_wishlist_wishlist_wlid_5',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1450313276AJQS',
'description'=>'',
'textlink'=>'1462285041OAPF' ),
array(
'type'=>'output.text',
'sid'=>'#wishlist',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'width=2%',
'ordering'=>11,
'map'=>'authoruid',
'lid'=>19976,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'wishlist_listing_wishlist_wishlist_wlid_copy1450297517',
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
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#wishlist',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'width=2%',
'ordering'=>12,
'map'=>'authoruid',
'lid'=>19978,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'wishlist_listing_wishlist_wishlist_authoruid2',
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
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>2,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'edit',
'action'=>'edit',
'mid'=>14140,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#storemanager',
'namekey'=>'wishlist_listing_wishlist_edit_copy1450297517',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'default',
'action'=>'standard',
'mid'=>14141,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'wishlist_listing_wishlist_standard_copy1450297517',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>7,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1
confirm=1',
'ordering'=>5,
'level'=>'0',
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>14142,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#storemanager',
'namekey'=>'wishlist_listing_wishlist_deleteall_copy1450297517',
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
'flid'=>'#wishlist_listing_groupby_copy1450297517',
'bktbefore'=>'0',
'sid'=>'#users',
'map'=>'uid',
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
'namekey'=>'wishlist_listing_groupby_copy1450297517',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#wishlist_listing_users_punlish_copy1450299606',
'bktbefore'=>'0',
'sid'=>'#wishlist',
'map'=>'type',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>30,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'wishlist_listing_users_punlish_copy1450299606',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#wishlist_listing_users_punlish',
'bktbefore'=>'0',
'sid'=>'#wishlist',
'map'=>'publish',
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
'namekey'=>'wishlist_listing_users_punlish',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#wishlist_listing_users_private',
'bktbefore'=>'0',
'sid'=>'#wishlist',
'map'=>'private',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'0',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'wishlist_listing_users_private',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' )
);
}