<?php defined('JOOBI_SECURE') or die('J....');
class Data_apps_apps_update_all_view extends WDataView{
var $yid=501740;
var $wizard=1;
var $wid='#apps.node';
var $type=151;
var $params='phpfile=1';
var $namekey='apps_update_all';
var $menu=13;
var $filters=1;
var $sid='#apps';
var $form=1;
var $icon='extension';
var $tmid=672;
var $rolid='#manager';
var $alias='Update All Apps';
var $name='1389123468CKOO';
var $description='';
var $wname='1389293018JFMB';
var $wdescription='1229651878KNMX';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.column',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465553,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'apps_update_all_column1',
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
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=status
notitle=1
spantit=1
classes=joobi_status_installer
align=center',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465211,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_update_all_status',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_update_all_column1',
'name'=>'1206732392OZVI',
'description'=>'' ),
array(
'type'=>'output.column',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465554,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'apps_update_all_column2',
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
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465212,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_update_all_information',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_update_all_column2',
'name'=>'1215507792MTRU',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#apps.info',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=version',
'ordering'=>6,
'map'=>'userversion',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465213,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_update_all_info_userversion',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_update_all_information',
'name'=>'1228709213SHFK',
'description'=>'1229651877RBLQ' ),
array(
'type'=>'output.text',
'sid'=>'#apps.info',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'userlversion',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465214,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_update_all_info_userlversion',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_update_all_information',
'name'=>'1206732400OXCC',
'description'=>'1229651877RBLS' ),
array(
'type'=>'output.datetime',
'sid'=>'#apps.userinfos',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'dateformat=1',
'ordering'=>9,
'map'=>'maintenance',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465215,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_update_all_userinfos_maintenance',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_update_all_information',
'name'=>'1228820286IIZC',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#apps.info',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'homeurl',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2465210,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_update_all_info_homeurl',
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
'sid'=>'#apps',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'map'=>'publish',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2465220,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_update_all_apps_publish',
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
'type'=>102,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=instup
pageajax=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'archive',
'action'=>'custom',
'mid'=>11221,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'apps_update_all_install',
'faicon'=>'fa-archive',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211280056BEZM',
'description'=>'' ),
array(
'type'=>102,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=reinstall
pageajax=1',
'ordering'=>2,
'level'=>'0',
'icon'=>'refresh',
'action'=>'custom',
'mid'=>11222,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'apps_update_all_reinstall',
'faicon'=>'fa-refresh',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1310984711PXOI',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>11226,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'apps_update_all_divider_install',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'level'=>'0',
'icon'=>'reset',
'action'=>'controller=install&task=clean',
'mid'=>11228,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'apps_update_all_reset',
'faicon'=>'fa-retweet',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732365OQJK',
'description'=>'' ),
array(
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'level'=>'0',
'icon'=>'back',
'action'=>'controller=apps',
'mid'=>11229,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'apps_update_all_back',
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
'ordering'=>7,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>11231,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'apps_update_all_help',
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
'flid'=>'#extension_show_enabled1_copy4873',
'bktbefore'=>'0',
'sid'=>'#apps.userinfos',
'map'=>'enabled',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'DESC',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'extension_show_enabled1_copy4873',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}