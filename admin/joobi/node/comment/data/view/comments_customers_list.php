<?php defined('JOOBI_SECURE') or die('J....');
class Data_comment_comments_customers_list_view extends WDataView{
var $yid=2049;
var $wizard=1;
var $wid='#comment.node';
var $type=2;
var $namekey='comments_customers_list';
var $menu=13;
var $level=50;
var $pagination=1;
var $filters=1;
var $sid='#comment.member';
var $form=1;
var $icon='members';
var $rolid='#manager';
var $alias='jComment Customers List BE';
var $name='1206961902CIFI';
var $description='1470801914KFJD';
var $wname='1298350844JHJZ';
var $wdescription='1251534828ITYI';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'#comment.member',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'lid'=>8381,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_#',
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
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'',
'lid'=>8390,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_name',
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
'sid'=>'#comment.member',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=users&task=show(eid=uid)
popuplink=1',
'ordering'=>4,
'map'=>'name',
'lid'=>8383,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_comment_member_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_customers_list_name',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#comment.member',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'username',
'lid'=>8384,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_comment_member_username',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_customers_list_name',
'name'=>'1206732411EGRV',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.textlink',
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=2
lien=controller=comment&task=listing(uid=uid)(comment=10)(titleheader=name)
align=center',
'ordering'=>6,
'map'=>'tkid',
'lid'=>8389,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_comment_tkid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1234467597SEXU',
'description'=>'',
'textlink'=>'1234467597SEXU' ),
array(
'type'=>'output.text',
'sid'=>'#comment.member',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>7,
'map'=>'email',
'lid'=>8385,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'comments_customers_list_comment_member_email',
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
'type'=>'output.access',
'sid'=>'#comment.member',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>8,
'map'=>'rolid',
'lid'=>8386,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_comment_member_rolid',
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
'type'=>'output.datetime',
'sid'=>'#comment.member',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
align=center',
'ordering'=>9,
'map'=>'login',
'lid'=>11588,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_comment_member_login_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282446GIMI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#comment.member',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
formatdate=73
align=center',
'ordering'=>10,
'map'=>'login',
'lid'=>11589,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_comment_member_login',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_customers_list_comment_member_login_1',
'name'=>'1242282446GIMI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#comment.member',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
formatdate=2
align=center',
'ordering'=>11,
'map'=>'login',
'lid'=>8387,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_comment_member_login_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_customers_list_comment_member_login_1',
'name'=>'1242282446GIMI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#comment.member',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
align=center',
'ordering'=>12,
'map'=>'registerdate',
'lid'=>8388,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_comment_member_registerdate',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRY',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#comment.member',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>13,
'map'=>'uid',
'lid'=>8404,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'comments_customers_list_comment_member_uid',
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
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8755,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'comments_customers_list_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#show those who posted comments',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'authoruid',
'type'=>50,
'ref_sid'=>'#comment.member',
'refmap'=>'uid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'show those who posted comments',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#show without doubles',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'comment',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>10,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'show without doubles',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#Filter by authoruid',
'bktbefore'=>'0',
'sid'=>'#comment.member',
'map'=>'uid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'authoruid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>33,
'params'=>'',
'namekey'=>'Filter by authoruid',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#distinct',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'authoruid',
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
'namekey'=>'distinct',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}