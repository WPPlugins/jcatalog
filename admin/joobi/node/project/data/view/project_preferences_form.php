<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_project_preferences_form_view extends WDataView{
var $yid=1015;
var $wid='#project.node';
var $type=61;
var $params='autosave=1';
var $namekey='project_preferences_form';
var $menu=13;
var $form=1;
var $rolid='#project_manager';
var $alias='Project Preferences';
var $faicon='fa-cog';
var $name='1215507791FLOR';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>460337,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectpreferences_form_email',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRU',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=quill.advanced',
'ordering'=>12,
'map'=>'c[task.node][footer]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>460026,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectpreferences_form_task_node_footer',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#projectpreferences_form_email',
'name'=>'1215507793BYPO',
'description'=>'1215507793BYPN' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>13,
'map'=>'c[task.node][projectname]',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>460338,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectpreferences_form_task_node_projectname',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#projectpreferences_form_email',
'name'=>'1398536237MPCY',
'description'=>'1230530145JEDZ' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'c[task.node][link]',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>460339,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectpreferences_form_task_node_link',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#projectpreferences_form_email',
'name'=>'1206961869IGNO',
'description'=>'1225790125DKPF' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>459953,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectpreferences_form_task',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732425HINS',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'map'=>'c[task.node][completed]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458393,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectpreferences_form_task_node_completed',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#projectpreferences_form_task',
'name'=>'1215507793BYPQ',
'description'=>'1215507793BYPP' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'c[task.node][daystart]',
'level'=>'0',
'initial'=>8,
'hidden'=>'0',
'fid'=>460347,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectpreferences_form_task_node_daystart',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#projectpreferences_form_task',
'name'=>'1225790126CCSM',
'description'=>'1225790126CCSE' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'done',
'action'=>'savepref',
'mid'=>1439,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#project_manager',
'namekey'=>'projectpreferences_form_savepref',
'faicon'=>'fa-check-square-o',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282449PIPC',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'save',
'action'=>'applypref',
'mid'=>1440,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#project_manager',
'namekey'=>'projectpreferences_form_applypref',
'faicon'=>'fa-floppy-o',
'color'=>'info',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINB',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>1441,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#project_manager',
'namekey'=>'projectpreferences_form_cancel',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
'description'=>'' )
);
}