<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_type_show_ticket_type_view extends WDataView{
var $yid=501490;
var $wid='#ticket.node';
var $type=151;
var $params='autosave=1';
var $namekey='ticket_type_show_ticket_type';
var $menu=13;
var $pagination=1;
var $sid='#ticket.type';
var $form=1;
var $icon='link';
var $rolid='#supportmanager';
var $alias='ticket type Show';
var $useredit=1;
var $name='1302521419ICOC';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#ticket.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'alias',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2462328,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_ticket_type_alias',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811583DBTA',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'namekey',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2462329,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_ticket_type_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1398436917DTKC',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'type',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2462330,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_ticket_type_type',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVD',
'description'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5',
'ordering'=>4,
'map'=>'modified',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2462331,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_ticket_type_modified',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961850KLRL',
'description'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5',
'ordering'=>5,
'map'=>'created',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2462332,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_ticket_type_created',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRY',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5',
'ordering'=>6,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2462333,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_users_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1310007858PLWN',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#ticket.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5num=1',
'ordering'=>7,
'map'=>'rolid',
'level'=>'0',
'initial'=>7,
'hidden'=>'0',
'fid'=>2462334,
'core'=>1,
'did'=>'#role#role_user_access',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_ticket_type_rolid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1347652452OQAE',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5',
'ordering'=>8,
'map'=>'name',
'level'=>'0',
'initial'=>7,
'hidden'=>'0',
'fid'=>2462335,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_users_name_1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961899DDKS',
'description'=>'' ),
array(
'type'=>'main.core',
'sid'=>'#ticket.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5num=1',
'ordering'=>9,
'map'=>'core',
'level'=>'0',
'initial'=>7,
'hidden'=>'0',
'fid'=>2462336,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_ticket_type_core',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNE',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'uid',
'level'=>'0',
'initial'=>7,
'hidden'=>1,
'fid'=>2462340,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_users_uid_1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'uid',
'level'=>'0',
'initial'=>7,
'hidden'=>1,
'fid'=>2462341,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'2g0gunz72e',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'modifiedby',
'level'=>'0',
'initial'=>7,
'hidden'=>1,
'fid'=>2462338,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_ticket_type_modifiedby',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#ticket.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5num=1',
'ordering'=>13,
'map'=>'publish',
'level'=>'0',
'initial'=>7,
'hidden'=>'0',
'fid'=>2462337,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_ticket_type_publish',
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
'type'=>'output.text',
'sid'=>'#users',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'uid',
'level'=>'0',
'initial'=>7,
'hidden'=>1,
'fid'=>2462339,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#supportmanager',
'namekey'=>'ticket_type_show_ticket_type_users_uid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>2,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'edit',
'action'=>'edit',
'mid'=>9875,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2g0gunz72b',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>9876,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2g0gunz72c',
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
'mid'=>9877,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2g0gunz72d',
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