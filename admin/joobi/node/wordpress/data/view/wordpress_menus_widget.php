<?php defined('JOOBI_SECURE') or die('J....');
class Data_wordpress_wordpress_menus_widget_view extends WDataView{
var $yid=502198;
var $wid='#wordpress.node';
var $type=51;
var $params='autosave=1';
var $namekey='wordpress_menus_widget';
var $menu=13;
var $sid='#main.widget';
var $form=1;
var $icon='link';
var $rolid='#registered';
var $alias='WordPress Joobi Menus widget';
var $name='1431633303POEA';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'exepicklist=1
exepicklisttask=apply
width=20',
'ordering'=>1,
'map'=>'p[wid]',
'level'=>'0',
'initial'=>'now',
'hidden'=>'0',
'fid'=>2469747,
'core'=>1,
'did'=>'#wordpress#wordpress_apps_picklist',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'wordpress_menus_widget_wid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1267607212GWJP',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#main.widget',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'p[tag]',
'level'=>'0',
'initial'=>'now',
'hidden'=>'0',
'fid'=>2469751,
'core'=>1,
'did'=>'#wordpress#wordpress_apps_menu',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'wordpress_menus_widget_yid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961868QEYD',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=8',
'ordering'=>3,
'map'=>'p[val]',
'level'=>'0',
'initial'=>'now',
'hidden'=>'0',
'fid'=>2471421,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'wordpress_menus_widget_val',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961878BMAO',
'description'=>'1463061919CHOJ' )
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
'mid'=>13712,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_apply_copy1270_copy1431715968',
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
'params'=>'formvalidation=1',
'ordering'=>2,
'level'=>'0',
'icon'=>'done',
'action'=>'save',
'mid'=>13713,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_save_copy2959_copy1431715968',
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
'ordering'=>3,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>13714,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_cancel_copy6018_copy1431715968',
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
'ordering'=>4,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>13715,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'iptracker_iptracker_module_help_copy3582_copy1431715968',
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