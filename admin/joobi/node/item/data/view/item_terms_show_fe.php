<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_terms_show_fe_view extends WDataView{
var $yid=501292;
var $wid='#item.node';
var $type=151;
var $params='autosave=1';
var $namekey='item_terms_show_fe';
var $menu=13;
var $frontend=1;
var $pagination=1;
var $sid='#item.terms';
var $form=1;
var $icon='about';
var $rolid='#allusers';
var $alias='Term';
var $useredit=1;
var $name='1310010343GRLC';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#item.termstrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1',
'ordering'=>2,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458709,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_terms_show_fe_item_termstrans_name',
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
'type'=>'main.url',
'sid'=>'#item.terms',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
num=1',
'ordering'=>3,
'map'=>'url',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458714,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_terms_show_fe_item_terms_url',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNO',
'description'=>'1310522851PJSE' ),
array(
'type'=>'output.textarea',
'sid'=>'#item.termstrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
rtag=1
num=1',
'ordering'=>4,
'map'=>'description',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458712,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_terms_show_fe_item_termstrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVG',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.terms',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'uid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458707,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_terms_show_fe_item_terms_uid',
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
'ordering'=>6,
'map'=>'uid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458708,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_terms_show_fe_users_uid',
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
'type'=>5,
'publish'=>1,
'parent'=>'0',
'params'=>'popclose=1',
'ordering'=>2,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>8351,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'item_terms_show_fe_cancel',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1228820287MBVC',
'description'=>'' )
);
}