<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_projectlistmilestones_listing_view extends WDataView{
var $yid=1322;
var $wid='#project.node';
var $type=2;
var $params='subtitle=1
mtype=image';
var $namekey='projectlistmilestones_listing';
var $filters=1;
var $sid='#project.milestone';
var $form=1;
var $icon='theme';
var $rolid='#manager';
var $alias='List of milestones on project show';
var $useredit=1;
var $name='1225790126CCSX';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'#project.milestones',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'pjid',
'lid'=>4422,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectlistmilestones_listing_project_milestones_pjid',
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
'sid'=>'#project.milestonetrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>2,
'map'=>'name',
'lid'=>4423,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectlistmilestones_listing_milestonetrans_name',
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
'type'=>'output.datetime',
'sid'=>'#project.milestone',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=3
align=center',
'ordering'=>3,
'map'=>'startdate',
'lid'=>4425,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectlistmilestones_listing_milestone_startdate',
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
'type'=>'output.datetime',
'sid'=>'#project.milestone',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=3
align=center',
'ordering'=>4,
'map'=>'deadline',
'lid'=>4426,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectlistmilestones_listing_milestone_deadline',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1209674948GCLT',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.butedit',
'sid'=>'#project.milestone',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=milestone&task=edit(eid=eid)',
'ordering'=>5,
'map'=>'mileid',
'lid'=>4443,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectlistmilestones_listing_milestone_mileid',
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
'type'=>'output.butdelete',
'sid'=>'#project.milestone',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=milestone&task=delete(eid=mileid)',
'ordering'=>6,
'map'=>'mileid',
'lid'=>4427,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectlistmilestones_listing_milestone_mileid_1',
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
'sid'=>'#project.milestonetrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>7,
'map'=>'description',
'lid'=>4424,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectlistmilestones_listing_milestonetrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#projectlistmilestones_listing_milestonetrans_name',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#list_of_milestones_regroup_by_project_1322',
'bktbefore'=>'0',
'sid'=>'#project.milestones',
'map'=>'pjid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'pjid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>32,
'params'=>'',
'namekey'=>'list_of_milestones_regroup_by_project_1322',
'name'=>'',
'ordering'=>'0',
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}