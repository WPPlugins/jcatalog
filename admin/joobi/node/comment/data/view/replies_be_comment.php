<?php defined('JOOBI_SECURE') or die('J....');
class Data_comment_replies_be_comment_view extends WDataView{
var $yid=500853;
var $wid='#comment.node';
var $type=2;
var $params='head=1
nolist=1
maxitem=200';
var $namekey='replies_be_comment';
var $level=50;
var $filters=1;
var $sid='#comment.reply';
var $form=1;
var $icon='default';
var $rolid='#manager';
var $alias='Replies BE for comment';
var $name='1262915431QYDZ';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=controller=users&task=show(eid=uid)',
'ordering'=>2,
'map'=>'',
'lid'=>10180,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_replies',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964391FHVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=cmtauthorbe
remt=1
lien=controller=users&task=show(eid=authoruid)',
'ordering'=>3,
'map'=>'name',
'lid'=>10181,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_users_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#replies_be_comment_replies',
'name'=>'1206732400OWZO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'tkid',
'lid'=>10182,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_comment_tkid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#replies_be_comment_replies',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#comment.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'tkrid',
'lid'=>10183,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_comment_reply_tkrid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#replies_be_comment_replies',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#comment.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'map'=>'authoruid',
'lid'=>10184,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_comment_reply_authoruid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#replies_be_comment_replies',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#comment.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'created',
'lid'=>10185,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_comment_reply_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#replies_be_comment_replies',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#comment.replytrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
nosort=1
rtag=1
style=vertical-align: top;',
'ordering'=>8,
'map'=>'description',
'lid'=>10186,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_comment_replytrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#replies_be_comment_replies',
'name'=>'1206961882TDGX',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=deletrep
remt=1
width=8%
align=right
style=vertical-align: top',
'ordering'=>9,
'map'=>'tkid',
'lid'=>10178,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_actions',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#replies_be_comment_replies',
'name'=>'1217251965LDTZ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'uid',
'lid'=>10179,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_users_uid',
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
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'id',
'lid'=>10300,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'replies_be_comment_users_id',
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

var $filtersA=array(
array(
'flid'=>'#replies_comment_be1',
'bktbefore'=>'0',
'sid'=>'#comment.reply',
'map'=>'tkid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'tkid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>33,
'params'=>'',
'namekey'=>'replies_comment_be1',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tkrid_orderby_created',
'bktbefore'=>'0',
'sid'=>'#comment.reply',
'map'=>'created',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'asc',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'tkrid_orderby_created',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}