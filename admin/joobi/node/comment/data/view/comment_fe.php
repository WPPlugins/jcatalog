<?php defined('JOOBI_SECURE') or die('J....');
class Data_comment_comment_fe_view extends WDataView{
var $yid=2048;
var $wid='#comment.node';
var $type=2;
var $params='hdata=tkid
nested=1
head=1
nolist=1
graphtype=
phpfile=1';
var $namekey='comment_fe';
var $frontend=1;
var $pagination=5;
var $filters=1;
var $sid='#comment';
var $form=1;
var $icon='comment';
var $rolid='#allusers';
var $alias='Comments FE';
var $name='1206961912MJQH';
var $description='1470801914KFJA';
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
'params'=>'remt=1',
'ordering'=>1,
'map'=>'',
'lid'=>8434,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_comment',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1251466557JSUA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=header
direction=1
remt=1
spc=
anchor=tkid
classes=reviewRating',
'ordering'=>2,
'map'=>'score',
'lid'=>8406,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_comment_score',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_fe_comment',
'name'=>'1251534828ITXY',
'description'=>'',
'textlink'=>'1206964391FHVM' ),
array(
'type'=>'output.customized',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=cmtauthor
remt=1
spc= 
classes=reviewHeader',
'ordering'=>3,
'map'=>'username',
'lid'=>8411,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_users_username',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_fe_comment',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.image',
'sid'=>'#comment.images',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'infonly=1
remt=1
imgmaxwidth=100
imgmaxheight=100
classes=reviewImage',
'ordering'=>4,
'map'=>'filid',
'lid'=>19802,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_commenttrans_filid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_fe_comment',
'name'=>'1206961936HCWM',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'main.textarea',
'sid'=>'#commenttrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
spc=
classes=reviewContent',
'ordering'=>5,
'map'=>'description',
'lid'=>8414,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_commenttrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_fe_comment',
'name'=>'1206732392OZVG',
'description'=>'1206732392OZVG',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=useful
remt=1
spc=
classes=reviewUseful',
'ordering'=>6,
'map'=>'useful',
'lid'=>8442,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'comments_fe_comment_useful',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_fe_comment',
'name'=>'1251534828ITXT',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'uid',
'lid'=>8453,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_users_uid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_fe_comment',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#commenttrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'name',
'lid'=>8452,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_commenttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_fe_comment',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=showreplies
remt=1
spc= ',
'ordering'=>9,
'map'=>'tkid',
'lid'=>10091,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_show_replies',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comments_fe_comment',
'name'=>'1262855106GGLB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=deletcmt
remt=1
width=20%
align=right
style=vertical-align: top;',
'ordering'=>10,
'map'=>'tkid',
'lid'=>8443,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'comments_fe_deleteedit',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1251534828ITXZ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'private',
'lid'=>8707,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_comment_private',
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
'sid'=>'#comment.clickyesno',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'uid',
'lid'=>8907,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_ticket_clickyesno_uid',
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
'ordering'=>13,
'map'=>'filid',
'lid'=>19803,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_users_filid',
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
'ordering'=>14,
'map'=>'id',
'lid'=>10298,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_users_id',
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
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'tkid',
'lid'=>8407,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_comment_tkid',
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
'sid'=>'#comment.clickyesno',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'map'=>'clickid',
'lid'=>8552,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_ticket_clickyesno_clickid',
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
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'useful',
'lid'=>8408,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_comment_useful_1',
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
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'usefulclick',
'lid'=>8409,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_comment_usefulclick',
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
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>19,
'map'=>'created',
'lid'=>8410,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_comment_created',
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
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>20,
'map'=>'etid',
'lid'=>8412,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_comment_etid',
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
'sid'=>'#comment',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>21,
'map'=>'authoruid',
'lid'=>8413,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comments_fe_comment_authoruid',
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
'flid'=>'#comment_fe_groupby_filid',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'tkid',
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
'namekey'=>'comment_fe_groupby_filid',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#Comment_etid_fromElementID',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'etid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'eid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>32,
'params'=>'',
'namekey'=>'Comment_etid_fromElementID',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#commenttype_component',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'commenttype',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'comment.cattype',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>90,
'params'=>'',
'namekey'=>'commenttype_component',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#comment_10',
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
'namekey'=>'comment_10',
'name'=>'',
'ordering'=>5,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#comment_curruser_private',
'bktbefore'=>2,
'sid'=>'#comment',
'map'=>'private',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'0,1',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>15,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'comment_curruser_private',
'name'=>'',
'ordering'=>6,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#comment_currentuser',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'authoruid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'comment.registered',
'bktafter'=>1,
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>90,
'params'=>'',
'namekey'=>'comment_currentuser',
'name'=>'',
'ordering'=>7,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#comment_privacy',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'private',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'0',
'bktafter'=>1,
'logicopr'=>1,
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'comment_privacy',
'name'=>'',
'ordering'=>8,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#comment_publish_1',
'bktbefore'=>'0',
'sid'=>'#comment',
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
'namekey'=>'comment_publish_1',
'name'=>'',
'ordering'=>9,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#group_commets_clickyes',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'tkid',
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
'namekey'=>'group_commets_clickyes',
'name'=>'',
'ordering'=>10,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#comments_date_order',
'bktbefore'=>'0',
'sid'=>'#comment',
'map'=>'modified',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'PCOMMENT_NODE_CMTDATE',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>130,
'params'=>'',
'namekey'=>'comments_date_order',
'name'=>'',
'ordering'=>11,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}