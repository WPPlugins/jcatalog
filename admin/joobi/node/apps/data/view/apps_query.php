<?php defined('JOOBI_SECURE') or die('J....');
class Data_apps_apps_query_view extends WDataView{
var $yid=1675;
var $wizard=1;
var $wid='#apps.node';
var $type=51;
var $params='autosave=1
subtitle=1';
var $namekey='apps_query';
var $menu=13;
var $form=1;
var $icon='wizard';
var $rolid='#sadmin';
var $alias='test Query';
var $name='1298350285IISM';
var $description='1470784870OXXV';
var $wname='1229651878KNMZ';
var $wdescription='1229651878KNMY';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'x[result]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463899,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'query_result_1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1229651877RBLX',
'description'=>'1229651877RBLU' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=dbprefix',
'ordering'=>2,
'map'=>'x[result]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459284,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'query_result',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1318938393NAXT',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'cols=100
rows=20
width=800px
height=400px',
'ordering'=>3,
'map'=>'x[query]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463898,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'query_query',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1229651877RBLW',
'description'=>'1229651877RBLT' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'confirm=1
formvalidation=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'warning',
'action'=>'execute',
'mid'=>4076,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'query_execute',
'faicon'=>'fa-exclamation-triangle',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1229651877RBLY',
'description'=>'' ),
array(
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'cancel',
'action'=>'controller=apps',
'mid'=>4077,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'query_cancel',
'faicon'=>'fa-times',
'color'=>'danger',
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
'ordering'=>4,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8642,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'query_help',
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