<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_replies_fe_show_notregi_view extends WDataView{
var $yid=1697;
var $wid='#ticket.node';
var $type=2;
var $params='nolist=1
maxitem=200';
var $namekey='ticket_replies_fe_show_notregi';
var $frontend=1;
var $level=50;
var $filters=1;
var $sid='#ticket.reply';
var $form=1;
var $icon='default';
var $rolid='#allusers';
var $alias='Replies FE show (not registered)(fe)';
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
'sid'=>'#ticket.replytrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'nosort=1
anchor=tkrid
style=vertical-align: top;',
'ordering'=>3,
'map'=>'description',
'lid'=>5965,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_replytrans_description',
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
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=150
style=vertical-align: top;',
'ordering'=>4,
'map'=>'',
'lid'=>5966,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_details',
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
'type'=>'output.datetime',
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
formatdate=3
nosort=1
rtag=1
width=120
align=center',
'ordering'=>5,
'map'=>'created',
'lid'=>5967,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_reply_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_replies_fe_show_notregi_details',
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
'ordering'=>6,
'map'=>'timeresp',
'lid'=>5969,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_reply_timeresp',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_replies_fe_show_notregi_details',
'name'=>'1230530179NTHL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=ratingnrestrict
remt=1',
'ordering'=>7,
'map'=>'tkid',
'lid'=>7803,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_rating',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_replies_fe_show_notregi_details',
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
'ordering'=>8,
'map'=>'tkid',
'lid'=>7806,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_tkid',
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
'ordering'=>9,
'map'=>'authoruid',
'lid'=>7807,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_authoruid',
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
'ordering'=>10,
'map'=>'rolid',
'lid'=>8544,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_users_rolid',
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
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'tkrid',
'lid'=>7805,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_reply_tkrid',
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
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'comment',
'lid'=>8546,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_reply_comment',
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
'ordering'=>13,
'map'=>'trid',
'lid'=>8547,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_rating_trid',
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
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'score',
'lid'=>8545,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_reply_score',
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
'sid'=>'#ticket.reply',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'uid',
'lid'=>7804,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'ticket_replies_fe_show_notregi_ticket_reply_uid',
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
'flid'=>'#replies_show_notregiste_fe1',
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
'namekey'=>'replies_show_notregiste_fe1',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#replies_show_notregiste__fe2',
'bktbefore'=>'0',
'sid'=>'#ticket.reply',
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
'namekey'=>'replies_show_notregiste__fe2',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#replies_show_notregiste__fe3',
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
'namekey'=>'replies_show_notregiste__fe3',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}