<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_add_project_view extends WDataView{
var $yid=1020;
var $wizard=1;
var $wid='#ticket.node';
var $type=51;
var $params='autosave=1';
var $namekey='ticket_add_project';
var $menu=13;
var $level=25;
var $sid='#ticket.project';
var $form=1;
var $icon='category';
var $rolid='#supportagent';
var $alias='Edit Category for ticket';
var $useredit=1;
var $name='1206732411EGQO';
var $description='';
var $wname='1248677675SCFH';
var $wdescription='1398536247ALAN';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'main.trans',
'sid'=>'#ticket.projecttrans',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'name',
'level'=>25,
'initial'=>'',
'hidden'=>'0',
'fid'=>458366,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_ticket_projecttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAGC',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.project',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'onlynew=1',
'ordering'=>3,
'map'=>'namekey',
'level'=>25,
'initial'=>'',
'hidden'=>'0',
'fid'=>458780,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_ticket_project_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1398436917DTKC',
'description'=>'1254973731GJXK' ),
array(
'type'=>'main.transarea',
'sid'=>'#ticket.projecttrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=quill.basic
editornode=1',
'ordering'=>4,
'map'=>'description',
'level'=>25,
'initial'=>'',
'hidden'=>'0',
'fid'=>458367,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_ticket_projecttrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVG',
'description'=>'1248762337DBEH' ),
array(
'type'=>'output.yesno',
'sid'=>'#ticket.project',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>5,
'map'=>'frontend',
'level'=>25,
'initial'=>'',
'hidden'=>'0',
'fid'=>463974,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_ticket_project_frontend',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1224166212FTLB',
'description'=>'1230530178MZXW' ),
array(
'type'=>'output.publish',
'sid'=>'#ticket.project',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>6,
'map'=>'publish',
'level'=>25,
'initial'=>1,
'hidden'=>'0',
'fid'=>463964,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_ticket_project_publish',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKN',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#ticket.project',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>7,
'map'=>'parent',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456831,
'core'=>1,
'did'=>'#ticket#ticket_category_parent',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_ticket_project_parent',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAEM',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#ticket.project',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>8,
'map'=>'ordering',
'level'=>25,
'initial'=>1,
'hidden'=>'0',
'fid'=>463965,
'core'=>1,
'did'=>'#library#library_ordering',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_ticket_project_ordering',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNP',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#ticket.project',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>9,
'map'=>'rolid',
'level'=>50,
'initial'=>7,
'hidden'=>'0',
'fid'=>459655,
'core'=>1,
'did'=>'#role#role_restricted_access_list',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_ticket_project_rolid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAEO',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>4,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>25,
'icon'=>'done',
'action'=>'save',
'mid'=>1453,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_save',
'faicon'=>'fa-check',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282449PIPC',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>25,
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>1454,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_cancel',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
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
'mid'=>8568,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_add_project_help',
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