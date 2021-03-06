<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_listing_be_view extends WDataView{
var $yid=1007;
var $wizard=1;
var $wid='#ticket.node';
var $type=2;
var $params='phpfile=1';
var $namekey='ticket_listing_be';
var $menu=13;
var $dropdown=3;
var $pagination=1;
var $filters=1;
var $sid='#ticket';
var $form=1;
var $icon='link';
var $rolid='#supportagent';
var $alias='Tickets listing backend';
var $fields=1;
var $useredit=1;
var $name='1206964235BPWJ';
var $description='1470801897KNUY';
var $wname='1215507804KDXT';
var $wdescription='1475336595MALG';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'tkid',
'lid'=>2827,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_tkid_7',
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
'sid'=>'#ticket',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'authoruid',
'lid'=>6514,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_authoruid',
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
'ordering'=>5,
'map'=>'pjid',
'lid'=>3883,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_pjid',
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
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'map'=>'pjid',
'lid'=>2906,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_project_pjid',
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
'type'=>'output.checkbox',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>7,
'map'=>'tkid',
'lid'=>2828,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_tkid_6',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206964391FHVO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.butedit',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=ticket&task=edit(eid=tkid)
width=30',
'ordering'=>8,
'map'=>'tkid',
'lid'=>2905,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_tkid_2',
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
'type'=>'output.text',
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'name',
'lid'=>2829,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_tickettrans_name_5',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAGC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'lock',
'lid'=>7589,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_lock',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_tickettrans_name_5',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=unread
remt=1
lien=controller=ticket-reply&task=listing&private=false(tkid=tkid)(tktypeid=tktypeid)(priority=priority)(authoruid=authoruid)',
'ordering'=>11,
'map'=>'name',
'lid'=>5884,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_tickettrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_tickettrans_name_5',
'name'=>'1206732412DAGC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
width=80
align=center',
'ordering'=>12,
'map'=>'namekey',
'lid'=>2830,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_tickettrans_name_5',
'name'=>'1206732400OWXG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>13,
'map'=>'description',
'lid'=>2835,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_tickettrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_tickettrans_name_5',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=15%',
'ordering'=>14,
'map'=>'',
'lid'=>5645,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_details',
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
'sid'=>'#ticket.projecttrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
align=center',
'ordering'=>15,
'map'=>'name',
'lid'=>2900,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_projecttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_details',
'name'=>'1206732411EGQO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=typelisting
remt=1
width=50
align=center
style=font-weight:bold;',
'ordering'=>16,
'map'=>'tktypeid',
'lid'=>2831,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_type',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_details',
'name'=>'1206732392OZVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=priority
width=50
align=center
typec=ticket.priority',
'ordering'=>17,
'map'=>'priority',
'lid'=>2832,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_priority',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_details',
'name'=>'1206961898PIOD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>20,
'map'=>'commenttype',
'lid'=>8986,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_commenttype',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_details',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=40
align=center',
'ordering'=>25,
'map'=>'status',
'lid'=>3713,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'#ticket#ticket_status_form_no',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_status',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
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
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>26,
'map'=>'',
'lid'=>3771,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
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
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=users&task=show(eid=authoruid)
align=center',
'ordering'=>27,
'map'=>'name',
'lid'=>2838,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_users_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_created',
'name'=>'1206732400OWZO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>28,
'map'=>'username',
'lid'=>6071,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_users_username',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_created',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'direction=1
remt=1
formatdate=5
width=110
align=center',
'ordering'=>29,
'map'=>'created',
'lid'=>2833,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_created_4',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_created',
'name'=>'1206961850KLRI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
formatdate=73
align=center',
'ordering'=>30,
'map'=>'created',
'lid'=>3770,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_created',
'name'=>'1215507804KDYB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>31,
'map'=>'modified',
'lid'=>3772,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_modified_1',
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
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'direction=1
style=font-weight:bold;',
'ordering'=>32,
'map'=>'replies',
'lid'=>2952,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_replies',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_ticket_modified_1',
'name'=>'1206964391FHVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
width=110
align=center',
'ordering'=>33,
'map'=>'modified',
'lid'=>2836,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_modified_3',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_ticket_modified_1',
'name'=>'1215507804KDYD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=73
style=font-weight:bold;font-size:12px;',
'ordering'=>34,
'map'=>'modified',
'lid'=>3773,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_modified',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#all_tickets_be_ticket_modified_1',
'name'=>'1215507804KDYB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>36,
'map'=>'',
'lid'=>5644,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'ticket_listing_be_response_time',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1227581114PJCA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=resptimeg
typec=ticket.resptimeg',
'ordering'=>38,
'map'=>'resptime',
'lid'=>5650,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'ticket_listing_be_ticket_resptime',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_listing_be_response_time',
'name'=>'1230530179NTHK',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=73',
'ordering'=>39,
'map'=>'deadline',
'lid'=>5647,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'ticket_listing_be_ticket_deadline',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_listing_be_response_time',
'name'=>'1209674948GCLT',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=isprivate
typec=ticket.privacy
align=center',
'ordering'=>40,
'map'=>'private',
'lid'=>5609,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_private',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1219769905FKPR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>42,
'map'=>'sticky',
'lid'=>7269,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_sticky',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282439OJUA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>45,
'map'=>'read',
'lid'=>10852,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_read',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'1275546208KHTH',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'width=1%',
'ordering'=>46,
'map'=>'tkid',
'lid'=>13677,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'all_tickets_be_ticket_tkid',
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
'params'=>'lslct=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'profile',
'action'=>'changeowner',
'mid'=>11277,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'ticket_all_tickets_be_owner',
'faicon'=>'fa-user',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1397143969FGJW',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>50,
'icon'=>'',
'action'=>'divider',
'mid'=>11276,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_divider_112',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>50,
'icon'=>'filter',
'action'=>'controller=ticket&task=listingassigned',
'mid'=>4938,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_my_tickets',
'faicon'=>'fa-ticket',
'color'=>'info',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964391FHVC',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'level'=>50,
'icon'=>'',
'action'=>'divider',
'mid'=>5222,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_divider_111',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>102,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=listingnew',
'ordering'=>5,
'level'=>50,
'icon'=>'after',
'action'=>'custom',
'mid'=>5217,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_custom',
'faicon'=>'fa-arrow-down',
'color'=>'info',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1243948338KVSR',
'description'=>'' ),
array(
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'level'=>50,
'icon'=>'before',
'action'=>'controller=ticket-queue',
'mid'=>5093,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_all_pending',
'faicon'=>'fa-eye',
'color'=>'warning',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1246509032AGXG',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'level'=>50,
'icon'=>'',
'action'=>'divider',
'mid'=>5077,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_divider_122',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1',
'ordering'=>8,
'level'=>50,
'icon'=>'move',
'action'=>'moveproject',
'mid'=>4196,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_moveproject',
'faicon'=>'fa-arrows',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961849MVDR',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'level'=>50,
'icon'=>'',
'action'=>'divider',
'mid'=>1419,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_divider_41',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>3,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'level'=>'0',
'icon'=>'new',
'action'=>'add',
'mid'=>1402,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_add',
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
'ordering'=>11,
'level'=>'0',
'icon'=>'edit',
'action'=>'edit',
'mid'=>1403,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_edit',
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
'ordering'=>12,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>4195,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_divider',
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
'params'=>'confirm=1
lslct=1',
'ordering'=>13,
'level'=>'0',
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>1404,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_deleteall',
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
'params'=>'',
'ordering'=>14,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>1462,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_divider_38',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8567,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportagent',
'namekey'=>'all_tickets_be_help',
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
'flid'=>'#tickets_be_leftjoin',
'bktbefore'=>'0',
'sid'=>'#ticket.projectmembers',
'map'=>'uid',
'type'=>50,
'ref_sid'=>'0',
'refmap'=>'uid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>50,
'params'=>'',
'namekey'=>'tickets_be_leftjoin',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#only_published_projects_1007',
'bktbefore'=>'0',
'sid'=>'#ticket.project',
'map'=>'publish',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>25,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'only_published_projects_1007',
'name'=>'',
'ordering'=>5,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tickets_authoruid',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'authoruid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'authoruid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>30,
'params'=>'',
'namekey'=>'tickets_authoruid',
'name'=>'',
'ordering'=>6,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_modified_external_OB',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'modified',
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
'namekey'=>'ticket_modified_external_OB',
'name'=>'',
'ordering'=>9,
'requiresvalue'=>'0',
'requirednode'=>'',
'rolid'=>'#allusers',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_comment_exfct',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'comment',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'ticket.commentfilter',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>15,
'typea'=>1,
'typeb'=>90,
'params'=>'',
'namekey'=>'ticket_comment_exfct',
'name'=>'',
'ordering'=>12,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_groupby_tkid',
'bktbefore'=>'0',
'sid'=>'#ticket',
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
'namekey'=>'ticket_groupby_tkid',
'name'=>'',
'ordering'=>13,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#ticket#ticket_priority',
'ordering'=>4 ),
array(
'did'=>'#ticket#ticket_categories',
'ordering'=>3 ),
array(
'did'=>'#ticket#ticket_types',
'ordering'=>2 ),
array(
'did'=>'#ticket#ticket_status_select',
'ordering'=>1 )
);
}