<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_reply_templates_to_a_ticket_view extends WDataView{
var $yid=1939;
var $wizard=1;
var $wid='#ticket.node';
var $type=2;
var $namekey='ticket_reply_templates_to_a_ticket';
var $menu=13;
var $level=50;
var $pagination=1;
var $filters=1;
var $sid='#ticket.template';
var $form=1;
var $icon='list';
var $rolid='#supportagent';
var $alias='reply templates to a ticket';
var $useredit=1;
var $name='1391449703JOQH';
var $description='';
var $wname='1243948340NJAK';
var $wdescription='1243948340NJAI';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#ticket.template',
'search'=>'0',
'publish'=>'0',
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'tktid',
'lid'=>7578,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_ticket_template_tktid_1',
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
'sid'=>'#ticket.templatetrans',
'search'=>'0',
'publish'=>'0',
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'tktid',
'lid'=>7580,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_ticket_templatetrans_tktid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1244170034LNZS',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.radio',
'sid'=>'#ticket.template',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'tktid',
'lid'=>7579,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_ticket_template_tktid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1212062321PNLD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.templatetrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'name',
'lid'=>7574,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_ticket_templatetrans_name_2',
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
'type'=>'output.text',
'sid'=>'#ticket.templatetrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=ticket-template&task=show(eid=tktid)
style=font-weight:bold;',
'ordering'=>5,
'map'=>'name',
'lid'=>7575,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_ticket_templatetrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#reply_templates_to_a_ticket_ticket_templatetrans_name_2',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.templatetrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
truncate=150',
'ordering'=>6,
'map'=>'description',
'lid'=>7576,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_ticket_templatetrans_description_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#reply_templates_to_a_ticket_ticket_templatetrans_name_2',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.templatetrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
ovly=1',
'ordering'=>7,
'map'=>'description',
'lid'=>7577,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_ticket_templatetrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#reply_templates_to_a_ticket_ticket_templatetrans_name_2',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'pjid',
'lid'=>7628,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_ticket_project_pjid',
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
'params'=>'popclose=1
refresh=1
lslct=1',
'ordering'=>1,
'level'=>50,
'icon'=>'edit',
'action'=>'templateedit(tkid=tkid)(priority=priority)',
'mid'=>5294,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_use_',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1243948339SXKG',
'description'=>'' ),
array(
'type'=>9,
'publish'=>1,
'parent'=>'0',
'params'=>'popclose=1',
'ordering'=>2,
'level'=>50,
'icon'=>'back',
'action'=>'templatecancel(tkid=tkid)',
'mid'=>5293,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_back',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961882TDHA',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8719,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'reply_templates_to_a_ticket_help',
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
'flid'=>'#template_pjid',
'bktbefore'=>'0',
'sid'=>'#ticket.template',
'map'=>'pjid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'pjid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>33,
'params'=>'',
'namekey'=>'template_pjid',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#template_ticket_type',
'bktbefore'=>'0',
'sid'=>'#ticket.template',
'map'=>'type',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'type',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>33,
'params'=>'',
'namekey'=>'template_ticket_type',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#project_members',
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
'namekey'=>'project_members',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#template_notprivate',
'bktbefore'=>'0',
'sid'=>'#ticket.template',
'map'=>'private',
'type'=>1,
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
'namekey'=>'template_notprivate',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#template_publish',
'bktbefore'=>'0',
'sid'=>'#ticket.template',
'map'=>'publish',
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
'namekey'=>'template_publish',
'name'=>'',
'ordering'=>6,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}