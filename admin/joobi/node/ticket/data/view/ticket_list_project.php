<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_list_project_view extends WDataView{
var $yid=1021;
var $wizard=1;
var $wid='#ticket.node';
var $type=2;
var $namekey='ticket_list_project';
var $menu=13;
var $level=25;
var $pagination=1;
var $filters=1;
var $sid='#ticket.project';
var $form=1;
var $icon='category';
var $rolid='#manager';
var $alias='Backend list of Categories';
var $faicon='fa-sitemap';
var $useredit=1;
var $name='1206732411EGQQ';
var $description='';
var $wname='1206732411EGQE';
var $wdescription='1484062736QCJA';
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
'map'=>'parent',
'lid'=>2901,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_parent',
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
'type'=>'output.rownumber',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'pjid',
'lid'=>8101,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_pjid_1',
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
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>3,
'map'=>'pjid',
'lid'=>2904,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_pjid_7',
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
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=ticket-project&task=edit(eid=pjid)',
'ordering'=>4,
'map'=>'pjid',
'lid'=>5921,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_pjid_4',
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
'sid'=>'#ticket.projecttrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'name',
'lid'=>7444,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_projecttrans_name',
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
'sid'=>'#ticket.projecttrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=ticket-project&task=edit(eid=pjid)',
'ordering'=>6,
'map'=>'name',
'lid'=>2902,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_projecttrans_name_8',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_list_project_ticket_projecttrans_name',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.projecttrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>7,
'map'=>'description',
'lid'=>2903,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_projecttrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_list_project_ticket_projecttrans_name_8',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.project',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
align=center',
'ordering'=>8,
'map'=>'namekey',
'lid'=>2908,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_list_project_ticket_projecttrans_name',
'name'=>'1398436917DTKC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.textlink',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=ticket(pjid=pjid)(titleheader=name)
width=120
align=center',
'ordering'=>9,
'map'=>'pjid',
'lid'=>2924,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_pjid_6',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964235BPWJ',
'description'=>'',
'textlink'=>'1206964235BPWJ' ),
array(
'type'=>'output.textlink',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=ticket-template(pjid=pjid)(titleheader=name)
align=center',
'ordering'=>10,
'map'=>'pjid',
'lid'=>7571,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_pjid_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1246243852IPUQ',
'description'=>'',
'textlink'=>'1246243852IPUQ' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=assignmoderator
lien=controller=ticket-projectmembers&task=listing(pjid=pjid)(titleheader=ticket.projecttrans:name)
width=120
align=center',
'ordering'=>11,
'map'=>'pjid',
'lid'=>5923,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_pjid_3',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1248677673EOOS',
'description'=>'',
'textlink'=>'1207411373HFUG' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=catpref
lien=controller=ticket-project&task=notify(pjid=pjid)(eid=pjid)
popuplink=1
poph=300
popw=500
align=center',
'ordering'=>12,
'map'=>'pjid',
'lid'=>8258,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_pjid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1228820286IIYZ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.order',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=2',
'ordering'=>13,
'map'=>'ordering',
'lid'=>5659,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_ordering',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNP',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.access',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>14,
'map'=>'rolid',
'lid'=>5922,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_rolid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAEO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1',
'ordering'=>15,
'map'=>'frontend',
'lid'=>3768,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_frontend',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1224166212FTLB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1',
'ordering'=>16,
'map'=>'publish',
'lid'=>5932,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_publish',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKN',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>17,
'map'=>'pjid',
'lid'=>3483,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'ticket_list_project_ticket_project_pjid_5',
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
'type'=>'output.yesno',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'oncreation',
'lid'=>9099,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_ticket_project_oncreation',
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
'type'=>3,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>25,
'icon'=>'new',
'action'=>'add',
'mid'=>1457,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_add',
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
'ordering'=>4,
'level'=>25,
'icon'=>'edit',
'action'=>'edit',
'mid'=>1458,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_edit',
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
'ordering'=>5,
'level'=>25,
'icon'=>'',
'action'=>'divider',
'mid'=>1463,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_divider',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>7,
'publish'=>1,
'parent'=>'0',
'params'=>'confirm=1
lslct=1',
'ordering'=>6,
'level'=>25,
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>1460,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_deleteall',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKL',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8569,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_list_project_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);
}