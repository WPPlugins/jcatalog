<?php defined('JOOBI_SECURE') or die('J....');
class Data_users_users_listings_view extends WDataView{
var $yid=501043;
var $wid='#users.node';
var $type=2;
var $params='graphtype=
phpfile=1';
var $namekey='users_listings';
var $menu=13;
var $dropdown=3;
var $pagination=1;
var $filters=1;
var $sid='#users';
var $form=1;
var $icon='members';
var $rolid='#manager';
var $alias='Users list (backend)';
var $fields=1;
var $useredit=1;
var $name='1229653442FEQZ';
var $description='1470784939JZZQ';
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
'params'=>'align=center',
'ordering'=>2,
'map'=>'',
'lid'=>11401,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_#',
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
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>3,
'map'=>'uid',
'lid'=>11402,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_uid_3',
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
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=users&task=edit(eid=uid)
align=center',
'ordering'=>4,
'map'=>'uid',
'lid'=>11440,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_uid',
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
'type'=>'output.image',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'thumb=1
dftimg=userx
imgfull=1
imgmaxwidth=40px
imgmaxheight=40px
width=50px
align=center',
'ordering'=>5,
'map'=>'filid',
'lid'=>17170,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_filid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1228709252AHXW',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.selectone',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>6,
'map'=>'status',
'lid'=>20561,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'#users#users_status',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_status',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVH',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=users&task=show(eid=uid)
align=center',
'ordering'=>7,
'map'=>'name',
'lid'=>11405,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_name',
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
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>8,
'map'=>'username',
'lid'=>11406,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_username',
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
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>9,
'map'=>'email',
'lid'=>11407,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_email',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRU',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>10,
'map'=>'',
'lid'=>14109,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_role',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1209142268NMKA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.access',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
align=center',
'ordering'=>11,
'map'=>'rolid',
'lid'=>11408,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_rolid_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#users_listings_role',
'name'=>'1241675187IFAK',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.textlink',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=users-roles(eid=uid)
lienrolid=sadmin
usebtn=1
color=info
popuplink=1
poph=90%
popw=70%
align=center',
'ordering'=>12,
'map'=>'rolid',
'lid'=>11720,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'users_listings_users_rolid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#users_listings_role',
'name'=>'1306382540KOEE',
'description'=>'',
'textlink'=>'1355258015PSTY' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=73
align=center',
'ordering'=>13,
'map'=>'login',
'lid'=>14110,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_login_header',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298294092CJJG',
'description'=>'1298294092CJJG',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1
remt=1
formatdate=73
align=center',
'ordering'=>14,
'map'=>'login',
'lid'=>11415,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_login',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#users_listings_users_login_header',
'name'=>'1298294092CJJG',
'description'=>'1298294092CJJG',
'textlink'=>'' ),
array(
'type'=>'main.iptracker',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
dsict=6
align=center',
'ordering'=>15,
'map'=>'ip',
'lid'=>14111,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_ip',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#users_listings_users_login_header',
'name'=>'1230531895KYXK',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=2
direction=1
formatdate=5
width=170
align=center',
'ordering'=>16,
'map'=>'registerdate',
'lid'=>11411,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_registerdate',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGSE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'infonly=1
formatdate=5
requirednode=main.node
align=center',
'ordering'=>17,
'map'=>'confirmed',
'lid'=>20641,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_confirmed',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRX',
'description'=>'1489081654HHGC',
'textlink'=>'' ),
array(
'type'=>'main.lock',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'infonly=1
formatdate=5
requirednode=main.node
align=center',
'ordering'=>18,
'map'=>'blocked',
'lid'=>17168,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_block',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.textlink',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
formatdate=73
requirednode=mailing.node
lien=controller=email-report-sent(uid=uid)(titleheader=name)
usebtn=1
color=success
popuplink=1
poph=90%
popw=90%
align=center',
'ordering'=>20,
'map'=>'uid',
'lid'=>16970,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_login_report_uid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961899DDKO',
'description'=>'',
'textlink'=>'1392297641IKCB' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>21,
'map'=>'uid',
'lid'=>11417,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_uid_1',
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
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>22,
'map'=>'id',
'lid'=>11414,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_id',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350400ESTF',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>23,
'map'=>'ctyid',
'lid'=>14112,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_ctyid',
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
'type'=>'main.removefk',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=files,users',
'ordering'=>24,
'map'=>'uid',
'lid'=>17171,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'users_listings_users_removekey',
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
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node
confirm=1
lslct=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'lock',
'action'=>'lock',
'mid'=>7133,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'users_listings_lock',
'faicon'=>'fa-lock',
'color'=>'danger',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRI',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node
confirm=1
lslct=1',
'ordering'=>2,
'level'=>'0',
'icon'=>'unlock',
'action'=>'unlock',
'mid'=>7134,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'users_listings_unlock',
'faicon'=>'fa-unlock',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1401377882ETOG',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>3,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>7135,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'users_listings_divider_31',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>3,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'level'=>'0',
'icon'=>'new',
'action'=>'add',
'mid'=>7138,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'users_listings_add',
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
'ordering'=>5,
'level'=>'0',
'icon'=>'edit',
'action'=>'edit',
'mid'=>7139,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'users_listings_edit',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1',
'ordering'=>6,
'level'=>'0',
'icon'=>'move',
'action'=>'show',
'mid'=>7140,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'users_listings_show',
'faicon'=>'fa-arrows',
'color'=>'info',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVE',
'description'=>'' ),
array(
'type'=>7,
'publish'=>1,
'parent'=>'0',
'params'=>'confirm=1
lslct=1',
'ordering'=>8,
'level'=>'0',
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>7142,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'users_listings_delete',
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
'flid'=>'#users_listing_groupby',
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
'namekey'=>'users_listing_groupby',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#users#users_roles_listing',
'ordering'=>'0' )
);
}