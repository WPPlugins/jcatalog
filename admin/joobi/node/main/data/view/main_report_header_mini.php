<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_main_report_header_mini_view extends WDataView{
var $yid=501351;
var $wid='#main.node';
var $type=51;
var $params='autosave=1
subtitle=1';
var $namekey='main_report_header_mini';
var $frontend=1;
var $form=1;
var $icon='report';
var $rolid='#registered';
var $alias='Mini Report Header';
var $faicon='fa-pie-chart';
var $name='1340773357RFYR';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.column',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465609,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_report_header_mini_column2',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1394069593IQAT',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=rptjdoctype
exepicklist=1',
'ordering'=>2,
'map'=>'x[jdoctype]',
'level'=>'0',
'initial'=>220,
'hidden'=>'0',
'fid'=>2459785,
'core'=>1,
'did'=>'#main#main_report_type',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'main_report_header_mini_type',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_report_header_mini_column2',
'name'=>'1260156216DOTJ',
'description'=>'' ),
array(
'type'=>'output.column',
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
'fid'=>2465608,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_report_header_mini_column1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1394069593IQAS',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=rptinterval',
'ordering'=>4,
'map'=>'x[interval]',
'level'=>'0',
'initial'=>15,
'hidden'=>'0',
'fid'=>2459781,
'core'=>1,
'did'=>'#main#main_filter_interval',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'main_report_header_mini_interval',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_report_header_mini_column1',
'name'=>'1256627132RZYQ',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'exepicklist=1',
'ordering'=>5,
'map'=>'x[presetdate]',
'level'=>'0',
'initial'=>30,
'hidden'=>'0',
'fid'=>2459782,
'core'=>1,
'did'=>'#main#main_predefined_date_report',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'main_report_header_mini_range',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_report_header_mini_column1',
'name'=>'1256627133IVDA',
'description'=>'' )
);
}