<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_topic_nested_view extends WDataView{
var $yid=501195;
var $wid='#ticket.node';
var $type=151;
var $params='autosave=1
subtitle=1';
var $namekey='ticket_topic_nested';
var $menu=13;
var $frontend=1;
var $level=50;
var $sid='#ticket.project';
var $form=1;
var $icon='about';
var $rolid='#registered';
var $alias='Topic Nested';
var $useredit=1;
var $name='1301972484PNWJ';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456936,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'topic_nested_sub_topics',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1301972476PCKS',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
nestedview=list_of_topics',
'ordering'=>4,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456934,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'topic_nested_sub_topics_1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#topic_nested_sub_topics',
'name'=>'1301972476PCKS',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456935,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'topic_nested_posts',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1213107644KDPI',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
nestedview=ticket_frontend_public',
'ordering'=>6,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456933,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'topic_nested_posts_2',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#topic_nested_posts',
'name'=>'1213107644KDPI',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>50,
'icon'=>'new',
'action'=>'controller=ticket-project&amp;task=add',
'mid'=>7839,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'topic_nested_new_topic',
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
'ordering'=>4,
'level'=>50,
'icon'=>'new',
'action'=>'controller=ticket&task=add',
'mid'=>7802,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'topic_nested_new_ticket',
'faicon'=>'fa-plus-square',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1271935568TCVA',
'description'=>'' )
);
}