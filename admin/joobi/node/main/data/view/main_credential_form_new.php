<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_main_credential_form_new_view extends WDataView{
var $yid=501405;
var $wid='#main.node';
var $type=51;
var $params='autosave=1';
var $namekey='main_credential_form_new';
var $menu=13;
var $pagination=1;
var $sid='#main.credential';
var $form=1;
var $icon='db';
var $rolid='#registered';
var $alias='Credential New';
var $name='1355852785AMCF';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'alias',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460569,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'2c8p32z725',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'exepicklist=1
exepicklisttask=apply
num=1',
'ordering'=>3,
'map'=>'crdidtype',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460570,
'core'=>1,
'did'=>'#main#main_credentials_type',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'2c8p32z726',
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
'type'=>'output.publish',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'publish',
'level'=>'0',
'initial'=>1,
'hidden'=>1,
'fid'=>2460571,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'2c8p32z727',
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
'type'=>6,
'publish'=>1,
'parent'=>'0',
'params'=>'formvalidation=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'save',
'action'=>'apply',
'mid'=>9422,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8p32z72c',
'faicon'=>'fa-floppy-o',
'color'=>'info',
'xsvisible'=>33,
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
'mid'=>9424,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8p32z72e',
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