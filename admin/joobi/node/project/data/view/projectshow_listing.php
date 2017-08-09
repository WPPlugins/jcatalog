<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_projectshow_listing_view extends WDataView{
var $yid=1009;
var $wid='#project.node';
var $type=2;
var $namekey='projectshow_listing';
var $pagination=1;
var $filters=1;
var $sid='#project';
var $form=1;
var $icon='default';
var $rolid='#allusers';
var $alias='List of sub-projects on project show';
var $useredit=1;
var $name='1225790126CCSV';
var $description='1470801877QGZD';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'lid'=>2848,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_#',
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
'sid'=>'#project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'ordering',
'lid'=>3716,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_project_ordering',
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
'sid'=>'#project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'parent',
'lid'=>2851,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_project_parent',
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
'sid'=>'#projecttrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=project&task=show(eid=pjid)',
'ordering'=>4,
'map'=>'name',
'lid'=>2840,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_projecttrans_name',
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
'type'=>'output.butedit',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>5,
'map'=>'',
'lid'=>2842,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_edit',
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
'type'=>'output.textlink',
'sid'=>'0',
'search'=>'0',
'publish'=>'0',
'parent'=>'0',
'params'=>'lien=controller=project&task=show
eid=1
align=center',
'ordering'=>6,
'map'=>'',
'lid'=>2841,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_go_to_show',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1225790126CCSQ',
'description'=>'',
'textlink'=>'1462284999SRKU' ),
array(
'type'=>'output.datetime',
'sid'=>'#project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=3
align=center',
'ordering'=>8,
'map'=>'startdate',
'lid'=>2844,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_project_startdate',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1215507792MTRL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=deadline
lid=2845
typec=project.deadline
formatdate=3
align=center',
'ordering'=>9,
'map'=>'enddate',
'lid'=>2845,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_project_enddate',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1215507792MTRM',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.types',
'sid'=>'#project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=priority
lid=2843
typec=project.priority
align=center',
'ordering'=>10,
'map'=>'priority',
'lid'=>2843,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'#project#project_priority',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_project_priority',
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
'type'=>'output.textlink',
'sid'=>'0',
'search'=>'0',
'publish'=>'0',
'parent'=>'0',
'params'=>'lien=controller=task&task=listing
eid=1
align=center',
'ordering'=>11,
'map'=>'',
'lid'=>2846,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_go_to_tasks',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1215507792MTRJ',
'description'=>'',
'textlink'=>'1462284999SRKV' ),
array(
'type'=>'output.butdelete',
'sid'=>'0',
'search'=>'0',
'publish'=>'0',
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'',
'lid'=>3774,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_delete',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732372QTKL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>13,
'map'=>'pjid',
'lid'=>6292,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectshow_listing_project_pjid',
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
'flid'=>'#list_of_subprojects_in_show_1009',
'bktbefore'=>'0',
'sid'=>'#project',
'map'=>'parent',
'type'=>1,
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
'namekey'=>'list_of_subprojects_in_show_1009',
'name'=>'',
'ordering'=>'0',
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#list_of_projects_the_user_is_member_of_1009',
'bktbefore'=>'0',
'sid'=>'#project.members',
'map'=>'uid',
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
'namekey'=>'list_of_projects_the_user_is_member_of_1009',
'name'=>'',
'ordering'=>'0',
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}