<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_project_members_view extends WDataView{
var $yid=1081;
var $wizard=1;
var $wid='#ticket.node';
var $type=2;
var $params='hdata=titleheader';
var $namekey='ticket_project_members';
var $menu=13;
var $level=50;
var $dropdown=1;
var $pagination=1;
var $filters=1;
var $sid='#users';
var $form=1;
var $icon='members';
var $rolid='#manager';
var $alias='Assign moderators to a category';
var $useredit=1;
var $name='1248677673EOOS';
var $description='';
var $wname='1248677673EOOS';
var $wdescription='1253278002FXOA';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'uid',
'lid'=>3450,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_project_members_users_uid',
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
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=users&task=show(eid=uid)',
'ordering'=>2,
'map'=>'name',
'lid'=>3451,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_project_members_users_name',
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
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>4,
'map'=>'username',
'lid'=>3453,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_project_members_users_username',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRV',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.access',
'sid'=>'#users',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>5,
'map'=>'rolid',
'lid'=>5365,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_project_members_users_rolid',
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
'type'=>'output.customized',
'sid'=>'#ticket.projectmembers',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=assign
order=1
direction=1
lien=controller=ticket-projectmembers&task=assign(pjid=pjid)(uid=uid)(level=supportlevel)
align=center
typec=ticket.assign',
'ordering'=>6,
'map'=>'pjid',
'lid'=>3454,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_project_members_ticket_projectmembers_pjid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1207242081BUBK',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.projectmembers',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=2
lien=controller=ticket-projectmembers&task=change(pjid=pjid)(level=supportlevel)(uid=uid)(titleheader=titleheader)
align=center
style=font-weight:bold;',
'ordering'=>7,
'map'=>'supportlevel',
'lid'=>5924,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_project_members_ticket_projectmembers_supportlevel',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1230530179NTHN',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'main.rating',
'sid'=>'#ticket.rating',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=4
align=center',
'ordering'=>8,
'map'=>'rate',
'lid'=>7725,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'support_average',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1246243852IPUR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket.projectmembers',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=notify
align=center',
'ordering'=>9,
'map'=>'notify',
'lid'=>8248,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_project_members_ticket_projectmembers_notify',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1241519400RGCB',
'description'=>'',
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>50,
'icon'=>'back',
'action'=>'back',
'mid'=>1864,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_project_members_back',
'faicon'=>'fa-chevron-left',
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
'ordering'=>3,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8572,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_project_members_help',
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
'flid'=>'#ticket_project_assign_lj_1081',
'bktbefore'=>'0',
'sid'=>'#ticket.projectmembers',
'map'=>'pjid',
'type'=>50,
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
'namekey'=>'ticket_project_assign_lj_1081',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#rating_project_LJ',
'bktbefore'=>'0',
'sid'=>'#ticket.rating',
'map'=>'pjid',
'type'=>50,
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
'namekey'=>'rating_project_LJ',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#moderators_roleid',
'bktbefore'=>'0',
'sid'=>'#users',
'map'=>'rolid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'ticket.moderatorsrolid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>15,
'typea'=>1,
'typeb'=>90,
'params'=>'',
'namekey'=>'moderators_roleid',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#ticket_project_assign_user_1081',
'bktbefore'=>'0',
'sid'=>'#users',
'map'=>'uid',
'type'=>9,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>32,
'params'=>'',
'namekey'=>'ticket_project_assign_user_1081',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#ticket#ticket_roles_manger_up',
'ordering'=>1 )
);
}