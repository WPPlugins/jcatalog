<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_main_view_form_core_view extends WDataView{
var $yid=502207;
var $wid='#main.node';
var $type=51;
var $params='autosave=1';
var $namekey='main_view_form_core';
var $menu=13;
var $frontend=1;
var $pagination=1;
var $filters=1;
var $sid='#main.view';
var $form=1;
var $icon='compare';
var $rolid='#allusers';
var $alias='Main View Core Form';
var $name='1206732388KEHZ';
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
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471334,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_form_core_general',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWZR',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.viewtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=user',
'ordering'=>3,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469864,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_core_form_main_view_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_form_core_general',
'name'=>'1206961869IGNC',
'description'=>'1434680167LAGD' ),
array(
'type'=>'output.text',
'sid'=>'#main.view',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'alias',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469865,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_core_form_main_view_main_view_alias',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_form_core_general',
'name'=>'1211811583DBTA',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'#main.viewtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=quill.advanced',
'ordering'=>5,
'map'=>'description',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469866,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_core_form_main_view_description',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_form_core_general',
'name'=>'1206732346KLSC',
'description'=>'1434680167LAGE' ),
array(
'type'=>'output.text',
'sid'=>'#main.view',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'map'=>'namekey',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469871,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_core_form_main_view_main_view_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_form_core_general',
'name'=>'1398436917DTKC',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#main.view',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>7,
'map'=>'publish',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469867,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_core_form_main_view_main_view_publish',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_form_core_general',
'name'=>'1206732372QTKN',
'description'=>'' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>8,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469868,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_core_form_wizard_fielset',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732391QBUR',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.viewtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=user',
'ordering'=>9,
'map'=>'wname',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469869,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_core_form_main_view_wname',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_core_form_wizard_fielset',
'name'=>'1206732412DAGC',
'description'=>'1434680167LAGF' ),
array(
'type'=>'output.textarea',
'sid'=>'#main.viewtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=quill.full',
'ordering'=>10,
'map'=>'wdescription',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469870,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_core_form_main_view_wdescription',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_core_form_wizard_fielset',
'name'=>'1206732392OZVG',
'description'=>'1434680167LAGE' ),
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
'fid'=>2471335,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_form_core_attributes',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732421RJQZ',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#main.view',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>12,
'map'=>'menu',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469872,
'core'=>1,
'did'=>'#main#main_view_header_display',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_core_form_main_view_main_view_menu',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_form_core_attributes',
'name'=>'1421684732GOVY',
'description'=>'1421684733OMTP' ),
array(
'type'=>'output.select',
'sid'=>'#main.view',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>13,
'map'=>'p[fdirection]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471336,
'core'=>1,
'did'=>'#main#main_form_layout',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_form_core_fdirection',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_form_core_attributes',
'name'=>'1462155980AXOI',
'description'=>'1414564670JVBC' ),
array(
'type'=>'output.select',
'sid'=>'#main.view',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'p[notitle]',
'level'=>'0',
'initial'=>'0',
'hidden'=>'0',
'fid'=>2471337,
'core'=>1,
'did'=>'#main#main_form_title',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_form_core_notitle',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_form_core_attributes',
'name'=>'1462155980AXOJ',
'description'=>'1462155982HRKH' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.view',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'p[autofocus]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471737,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_view_form_autofocus',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_view_form_core_attributes',
'name'=>'1490624369EJOY',
'description'=>'1490624373LRCQ' )
);

var $menusA=array(
array(
'type'=>6,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=0
formvalidation=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'save',
'action'=>'apply',
'mid'=>13759,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'main_view_form_apply_copy1434679508',
'faicon'=>'fa-floppy-o',
'color'=>'info',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINB',
'description'=>'' ),
array(
'type'=>4,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=0
ajax=1
refresh=1
formvalidation=1',
'ordering'=>2,
'level'=>'0',
'icon'=>'done',
'action'=>'save',
'mid'=>13760,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'main_view_form_save_copy1434679508',
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
'params'=>'ajax=1
refresh=1',
'ordering'=>3,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>13761,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'main_view_form_cancel_copy1434679508',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#main_view_form_lgid_copy1434679508',
'bktbefore'=>'0',
'sid'=>'#main.viewtrans',
'map'=>'lgid',
'type'=>50,
'ref_sid'=>'0',
'refmap'=>'lgid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>150,
'params'=>'',
'namekey'=>'main_view_form_lgid_copy1434679508',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}