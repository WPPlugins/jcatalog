<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_replies_listing_fe_view extends WDataView{
var $yid=996;
var $wid='#ticket.node';
var $type=2;
var $params='nolist=1
maxitem=200
phpfile=1';
var $namekey='ticket_replies_listing_fe';
var $frontend=1;
var $filters=1;
var $sid='#ticket.reply';
var $form=1;
var $icon='default';
var $rolid='#registered';
var $alias='Replies FE';
var $useredit=1;
var $name='1206964391FHVD';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'score',
'lid'=>8532,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_reply_score',
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
'ordering'=>2,
'map'=>'rolid',
'lid'=>8531,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_users_rolid',
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
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'tkid',
'lid'=>2791,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_tkid',
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
'ordering'=>4,
'map'=>'uid',
'lid'=>5878,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_users_uid',
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
'sid'=>'#ticket.replytrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'nosort=1
anchor=tkrid
style=vertical-align: top;',
'ordering'=>5,
'map'=>'description',
'lid'=>2790,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_replytrans_description_2',
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
'type'=>'output.text',
'sid'=>'#ticket.replytrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
nosort=1
rtag=1
style=vertical-align: top;',
'ordering'=>6,
'map'=>'description',
'lid'=>6022,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_replytrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_ticket_replytrans_description_2',
'name'=>'1206961882TDGX',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.image',
'sid'=>'#ticket.replyfiles',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'filid',
'lid'=>6019,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_replyfiles_filid_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_ticket_replytrans_description_2',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket.replyfiles',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=attachreply
style=font-weight:bold;
typec=ticket.attachreply',
'ordering'=>8,
'map'=>'filid',
'lid'=>6020,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_replyfiles_filid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_ticket_replytrans_description_2',
'name'=>'1218027307KDZS',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.replyfiles',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'tkrid',
'lid'=>6023,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_replyfiles_tkrid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_ticket_replytrans_description_2',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'tkrid',
'lid'=>6021,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_reply_tkrid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_ticket_replytrans_description_2',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=25%
style=vertical-align: top;',
'ordering'=>11,
'map'=>'',
'lid'=>2802,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_details',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961936HCWR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=users&task=show(eid=uid)',
'ordering'=>12,
'map'=>'username',
'lid'=>3761,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_users_username',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_details',
'name'=>'1206732400OWZO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1
formatdate=5
width=120
align=center',
'ordering'=>15,
'map'=>'created',
'lid'=>2789,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_reply_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_details',
'name'=>'1230530179NTHI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=77',
'ordering'=>17,
'map'=>'timeresp',
'lid'=>5652,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_replies_listing_fe_response_time',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_details',
'name'=>'1227581114PJCA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=rating
remt=1',
'ordering'=>18,
'map'=>'tkrid',
'lid'=>7666,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_rating',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_details',
'name'=>'1246243851IGLH',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>19,
'map'=>'authoruid',
'lid'=>7799,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_authoruid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_details',
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
'ordering'=>20,
'map'=>'login',
'lid'=>10220,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_users_login',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_details',
'name'=>'1206961869IGND',
'description'=>'1262917442HNEK',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>21,
'map'=>'id',
'lid'=>10280,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_users_id',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#task_replies_fe_details',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>22,
'map'=>'comment',
'lid'=>8533,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_reply_comment',
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
'sid'=>'#ticket.rating',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>23,
'map'=>'trid',
'lid'=>8534,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'task_replies_fe_ticket_rating_trid',
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
'flid'=>'#list_ticket_replies_996',
'bktbefore'=>'0',
'sid'=>'#ticket.reply',
'map'=>'tkid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'tickets.tkid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>52,
'params'=>'',
'namekey'=>'list_ticket_replies_996',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#only_published_replies3',
'bktbefore'=>'0',
'sid'=>'#ticket.reply',
'map'=>'rolid',
'type'=>7,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>30,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'only_published_replies3',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_reply_fe_groupby',
'bktbefore'=>'0',
'sid'=>'#ticket.reply',
'map'=>'tkrid',
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
'namekey'=>'ticket_reply_fe_groupby',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}