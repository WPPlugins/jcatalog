<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_frontend_private_view extends WDataView{
var $yid=1642;
var $wizard=1;
var $wid='#ticket.node';
var $type=2;
var $params='pagetitle=1
horizmenu=1';
var $namekey='ticket_frontend_private';
var $menu=13;
var $frontend=1;
var $dropdown=3;
var $pagination=1;
var $filters=1;
var $sid='#ticket';
var $form=1;
var $icon='link';
var $rolid='#registered';
var $alias='My Tickets frontend - private';
var $useredit=1;
var $name='1227581118COMU';
var $description='1470801897KNUZ';
var $wname='1206964235BPWJ';
var $wdescription='1251087477HEHD';
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
'params'=>'nosort=1',
'ordering'=>1,
'map'=>'tkid',
'lid'=>5595,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_tkid_5',
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
'type'=>'output.butedit',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'nosort=1
lien=controller=ticket-my&task=edit(eid=tkid)',
'ordering'=>2,
'map'=>'tkid',
'lid'=>5596,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_tkid',
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
'sid'=>'#project',
'search'=>'0',
'publish'=>'0',
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'pjid',
'lid'=>5593,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_project_pjid',
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
'ordering'=>4,
'map'=>'pjid',
'lid'=>5606,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_project_pjid',
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
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'name',
'lid'=>5598,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_tickettrans_name_4',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAGC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=sticky
lid=7356
typec=ticket.sticky
remt=1
spc=
style=font-weight:bold;',
'ordering'=>6,
'map'=>'sticky',
'lid'=>7356,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_sticky',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_frontend_private_tickettrans_name_4',
'name'=>'1242282439OJUA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=owner
remt=1
lien=controller=ticket-reply(tkid=tkid)
style=font-weight:bold;',
'ordering'=>7,
'map'=>'name',
'lid'=>5890,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_tickettrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_frontend_private_tickettrans_name_4',
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
nosort=1
width=60
align=center',
'ordering'=>8,
'map'=>'namekey',
'lid'=>5597,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_frontend_private_tickettrans_name_4',
'name'=>'1206732400OWXG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'nosort=1
ovly=1',
'ordering'=>9,
'map'=>'description',
'lid'=>5599,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_tickettrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_frontend_private_tickettrans_name_4',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'direction=1
width=30
align=center',
'ordering'=>10,
'map'=>'replies',
'lid'=>5600,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_replies',
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
'type'=>'output.selectone',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=70
align=center',
'ordering'=>11,
'map'=>'status',
'lid'=>5601,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'#ticket#ticket_status_form',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_status',
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
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=prioritylisting
nosort=1
width=40
align=center',
'ordering'=>12,
'map'=>'priority',
'lid'=>5602,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'#ticket#ticket_priority',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_priority',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961898PIOD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1
formatdate=3
width=120
align=center',
'ordering'=>13,
'map'=>'created',
'lid'=>5604,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_created_3',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964391FHVL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1
remt=1
formatdate=3
width=120
align=center',
'ordering'=>14,
'map'=>'created',
'lid'=>5893,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_frontend_private_ticket_created_3',
'name'=>'1206964391FHVL',
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
formatdate=73
nosort=1
width=120
align=center',
'ordering'=>15,
'map'=>'created',
'lid'=>5892,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_created_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_frontend_private_ticket_created_3',
'name'=>'1206964391FHVL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.projecttrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>16,
'map'=>'name',
'lid'=>5891,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'#ticket#ticket_projecttrans',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_projecttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGQO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#projecttrans',
'search'=>1,
'publish'=>'0',
'parent'=>'0',
'params'=>'remt=1
nosort=1
align=center
style=font-weight:bold;',
'ordering'=>17,
'map'=>'name',
'lid'=>5594,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_projecttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_frontend_private_ticket_projecttrans_name',
'name'=>'1206964390BUEL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.projecttrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
nosort=1
align=center
style=font-weight:bold;',
'ordering'=>18,
'map'=>'name',
'lid'=>5607,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'#ticket#ticket_projecttrans',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_projecttrans_name_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_frontend_private_ticket_projecttrans_name',
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
width=60
align=center',
'ordering'=>19,
'map'=>'tktypeid',
'lid'=>5603,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_type',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_frontend_private_ticket_projecttrans_name',
'name'=>'1206732392OZVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=private
popuplink=1
align=center
typec=ticket.private',
'ordering'=>20,
'map'=>'private',
'lid'=>5608,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_private',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1219769905FKPR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>'0',
'parent'=>'0',
'params'=>'',
'ordering'=>21,
'map'=>'username',
'lid'=>5749,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_users_username',
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
'ordering'=>22,
'map'=>'uid',
'lid'=>5605,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_users_uid',
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
'ordering'=>25,
'map'=>'read',
'lid'=>10859,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_read',
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
'ordering'=>26,
'map'=>'authoruid',
'lid'=>10860,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_ticket_authoruid',
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
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'up',
'action'=>'controller=ticket',
'mid'=>3935,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_public_tickets',
'faicon'=>'fa-globe',
'color'=>'primary',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1227581118COMV',
'description'=>'' ),
array(
'type'=>3,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'new',
'action'=>'add',
'mid'=>3934,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'ticket_frontend_private_add',
'faicon'=>'fa-plus',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1271935568TCVA',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#list_ticket_user_1642',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'authoruid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'uid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>50,
'params'=>'',
'namekey'=>'list_ticket_user_1642',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tickets_status_filter_1642',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'publish',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>3,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'tickets_status_filter_1642',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_projects_acl1',
'bktbefore'=>'0',
'sid'=>'#ticket.project',
'map'=>'frontend',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'ticket_projects_acl1',
'name'=>'',
'ordering'=>5,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_projects_acl2',
'bktbefore'=>'0',
'sid'=>'#ticket.project',
'map'=>'rolid',
'type'=>7,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'ticket_projects_acl2',
'name'=>'',
'ordering'=>6,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tickets_private_sticky',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'sticky',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'tickets_private_sticky',
'name'=>'',
'ordering'=>8,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#comment_ticket_only_private',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'comment',
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
'namekey'=>'comment_ticket_only_private',
'name'=>'',
'ordering'=>9,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tickets_modified_filter_1642',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'modified',
'type'=>8,
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
'namekey'=>'tickets_modified_filter_1642',
'name'=>'',
'ordering'=>10,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#ticket#ticket_categories',
'ordering'=>3 )
);
}