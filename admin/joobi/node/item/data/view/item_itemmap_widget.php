<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_itemmap_widget_view extends WDataView{
var $yid=502298;
var $wid='#item.node';
var $type=51;
var $params='autosave=1';
var $namekey='item_itemmap_widget';
var $menu=13;
var $frontend=1;
var $sid='#main.widget';
var $form=1;
var $icon='link';
var $rolid='#manager';
var $alias='Items\' map widget preferences';
var $useredit=1;
var $name='1449596939AHBB';
var $description='1470801968BRUQ';
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
'params'=>'color=success',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471749,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_itemmap_widget_display',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732366OVLY',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=6',
'ordering'=>3,
'map'=>'p[allitems]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470750,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_map_widget_allitems',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_itemmap_widget_display',
'name'=>'1373216472CELF',
'description'=>'1449596936EBUC' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=6',
'ordering'=>4,
'map'=>'p[nb]',
'level'=>'0',
'initial'=>5,
'hidden'=>'0',
'fid'=>2470747,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_map_widget_nb',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_itemmap_widget_display',
'name'=>'1381365575GSWU',
'description'=>'1386167799LHIS' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=5',
'ordering'=>5,
'map'=>'p[width]',
'level'=>'0',
'initial'=>150,
'hidden'=>'0',
'fid'=>2470748,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_map_widget_width',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_itemmap_widget_display',
'name'=>'1206961870KLAD',
'description'=>'1449596936EBUB' ),
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=5',
'ordering'=>6,
'map'=>'p[height]',
'level'=>'0',
'initial'=>150,
'hidden'=>'0',
'fid'=>2470749,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_map_widget_height',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_itemmap_widget_display',
'name'=>'1206961870KLAF',
'description'=>'1491250455ORTZ' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=info',
'ordering'=>7,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471750,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_itemmap_widget_product_info',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1491250445CLXI',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=product.node',
'ordering'=>9,
'map'=>'p[showprice]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471752,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'item_itemmap_widget_itmshowprice',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_itemmap_widget_product_info',
'name'=>'1304253719FVKG',
'description'=>'1304253737BCAN' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'p[showimage]',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>2471754,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_itemmap_widget_showimage',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_itemmap_widget_product_info',
'name'=>'1268813964BCNU',
'description'=>'1304253738OPDP' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'p[showvendor]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471753,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_itemmap_widget_showvendor',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_itemmap_widget_product_info',
'name'=>'1260242517PUPA',
'description'=>'1377828906DIQK' )
);
}