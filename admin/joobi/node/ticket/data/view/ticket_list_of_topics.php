<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_list_of_topics_view extends WDataView{
var $yid=501187;
var $wizard=1;
var $wid='#ticket.node';
var $type=2;
var $params='graphtype=';
var $namekey='ticket_list_of_topics';
var $menu=13;
var $frontend=1;
var $pagination=1;
var $filters=1;
var $sid='#ticket.project';
var $form=1;
var $icon='category';
var $rolid='#allusers';
var $alias='List of Topics';
var $useredit=1;
var $name='1242674480GIFT';
var $description='';
var $wname='1301972485LRRR';
var $wdescription='1475336595MALH';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'pjid',
'lid'=>12254,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_project_pjid',
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
'sid'=>'#ticket.projecttrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'width=40%',
'ordering'=>3,
'map'=>'name',
'lid'=>12246,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_projecttrans_name_4',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242674480GIFT',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.projecttrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=ticket-project&task=posts(pjid=pjid)(titleheader=ticket.projecttrans:name)
style=font-weight:bold;',
'ordering'=>4,
'map'=>'name',
'lid'=>12247,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_projecttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#list_of_topics_ticket_projecttrans_name_4',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.projecttrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
truncate=150',
'ordering'=>5,
'map'=>'description',
'lid'=>12248,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_projecttrans_description_3',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#list_of_topics_ticket_projecttrans_name_4',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.projecttrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
ovly=1',
'ordering'=>6,
'map'=>'description',
'lid'=>12249,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_projecttrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#list_of_topics_ticket_projecttrans_name_4',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>7,
'map'=>'tickets',
'lid'=>12333,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_project_tickets',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1301972449PYGZ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>8,
'map'=>'tickets',
'lid'=>12296,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_project_tickets_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1301972449PYGY',
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
'map'=>'modified',
'lid'=>12250,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_modified_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1301972449PYGW',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=ticket-reply(tkid=ltkid)(#=tkrid)',
'ordering'=>10,
'map'=>'name',
'lid'=>12257,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_tickettrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#list_of_topics_ticket_modified_2',
'name'=>'1242637108SGWW',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=ticket-reply(tkid=ltkid)(#=tkrid)',
'ordering'=>11,
'map'=>'username',
'lid'=>12258,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_users_username',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#list_of_topics_ticket_modified_2',
'name'=>'1301972449PYGX',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'authoruid',
'lid'=>12251,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_authoruid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#list_of_topics_ticket_modified_2',
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
formatdate=5',
'ordering'=>13,
'map'=>'modified',
'lid'=>12252,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_modified',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#list_of_topics_ticket_modified_2',
'name'=>'1242282450QJDI',
'description'=>'1242637108SGWU',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'ltkid',
'lid'=>12255,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_project_ltkid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#list_of_topics_ticket_modified_2',
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
'map'=>'tkrid',
'lid'=>12256,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'list_of_topics_ticket_reply_tkrid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#list_of_topics_ticket_modified_2',
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
'icon'=>'new',
'action'=>'controller=ticket-project&amp;task=add',
'mid'=>7800,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#supportmoderator',
'namekey'=>'list_of_topics_new_topic',
'faicon'=>'fa-plus-square',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1301972467EVBQ',
'description'=>'' ),
array(
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'filter',
'action'=>'controller=ticket-my',
'mid'=>7819,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'list_of_topics_my_topics',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1301972467EVBR',
'description'=>'' ),
array(
'type'=>101,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>255,
'level'=>'0',
'icon'=>'wizard',
'action'=>'',
'mid'=>14530,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'4lunkxz72m',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732391QBUR',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#ticket_project_parent_copy9555',
'bktbefore'=>'0',
'sid'=>'#ticket.project',
'map'=>'parent',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'pjid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>30,
'params'=>'',
'namekey'=>'ticket_project_parent_copy9555',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_project_frontend_copy1632',
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
'namekey'=>'ticket_project_frontend_copy1632',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tickets_project_access_copy6022',
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
'typeb'=>2,
'params'=>'',
'namekey'=>'tickets_project_access_copy6022',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_groupby_copy3765',
'bktbefore'=>'0',
'sid'=>'#ticket.project',
'map'=>'pjid',
'type'=>9,
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
'namekey'=>'ticket_groupby_copy3765',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_project_ltkid_copy3860',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'tkid',
'type'=>50,
'ref_sid'=>'#ticket.project',
'refmap'=>'ltkid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'ticket_project_ltkid_copy3860',
'name'=>'',
'ordering'=>5,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_private_copy8437',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'private',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'0',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'ticket_private_copy8437',
'name'=>'',
'ordering'=>6,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tickets_modified_copy8235',
'bktbefore'=>'0',
'sid'=>'#ticket.projecttrans',
'map'=>'name',
'type'=>8,
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
'namekey'=>'tickets_modified_copy8235',
'name'=>'',
'ordering'=>7,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}