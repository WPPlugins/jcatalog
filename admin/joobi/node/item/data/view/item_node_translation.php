<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_node_translation_view extends WDataView{
var $yid=500801;
var $wid='#item.node';
var $type=51;
var $params='autosave=1
viewarea=["center","top_right"]';
var $namekey='item_node_translation';
var $menu=13;
var $frontend=1;
var $level=50;
var $filters=1;
var $sid='#item';
var $form=1;
var $icon='lang';
var $tmid=665;
var $rolid='#vendor';
var $alias='Item translations';
var $useredit=1;
var $name='1206732392OZUR';
var $description='1470801968BRUK';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.row',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470279,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_node_translation_row_1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1373657311SZRR',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1',
'ordering'=>8,
'map'=>'lgid',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>466691,
'core'=>1,
'did'=>'#translation#translation_translationviewlanguages',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_producttrans_lgid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_node_translation_row_1',
'name'=>'1206732405TIXE',
'description'=>'1339210513CQVS' ),
array(
'type'=>'output.row',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470280,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_node_translation_row_2',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1373657311SZRS',
'description'=>'' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>466821,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_general',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_node_translation_row_2',
'name'=>'1206732400OWZR',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'minlgt=1
width=55',
'ordering'=>11,
'map'=>'name',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>466692,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'center',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_producttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#product_node_form_be_trans_general',
'name'=>'1206732392OZVB',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=quill.advanced',
'ordering'=>12,
'map'=>'introduction',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>466694,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'center',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_producttrans_introduction',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#product_node_form_be_trans_general',
'name'=>'1215603987EKZQ',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=quill.full',
'ordering'=>13,
'map'=>'description',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>466693,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'center',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_producttrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#product_node_form_be_trans_general',
'name'=>'1206732392OZVG',
'description'=>'' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>466822,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_seo',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_node_translation_row_2',
'name'=>'1242282445BFOC',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'seotitle',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>466823,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'center',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_producttrans_seotitle',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#product_node_form_be_trans_seo',
'name'=>'1206732412DAGC',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=80
height=6',
'ordering'=>16,
'map'=>'seokeywords',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>466824,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'center',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_producttrans_seokeywords',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#product_node_form_be_trans_seo',
'name'=>'1242282417SQNO',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=80
height=6',
'ordering'=>17,
'map'=>'seodescription',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>466825,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'center',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_producttrans_seodescription',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#product_node_form_be_trans_seo',
'name'=>'1206732392OZVG',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'pid',
'level'=>50,
'initial'=>'',
'hidden'=>1,
'fid'=>466695,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_product_pid',
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
'type'=>4,
'publish'=>1,
'parent'=>'0',
'params'=>'formvalidation=1
ajax=1
refresh=1
confirm=0',
'ordering'=>1,
'level'=>50,
'icon'=>'save',
'action'=>'save',
'mid'=>6157,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_apply',
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
'params'=>'refresh=1
lslct=0
confirm=0',
'ordering'=>2,
'level'=>50,
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>6159,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'product_node_form_be_trans_cancel',
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
'flid'=>'#item_node_translation_where_itemtrans_lgid',
'bktbefore'=>'0',
'sid'=>'#itemtrans',
'map'=>'lgid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'lgid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>30,
'params'=>'',
'namekey'=>'item_node_translation_where_itemtrans_lgid',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}