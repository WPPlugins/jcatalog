<?php defined('JOOBI_SECURE') or die('J....');
class Data_address_new_address_view extends WDataView{
var $yid=501283;
var $wizard=1;
var $wid='#address.node';
var $type=51;
var $params='reqtask=checkout
autosave=1
mtype=image
mpos=image';
var $namekey='new_address';
var $menu=13;
var $frontend=1;
var $sid='#address';
var $form=1;
var $icon='about';
var $rolid='#vendor';
var $alias='Add address';
var $useredit=1;
var $name='1206961911NYAR';
var $description='';
var $wname='1206961911NYAR';
var $wdescription='1444231664HSYI';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'address1',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458615,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_address_form1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961911NYAR',
'description'=>'1206961922ESOT' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1',
'ordering'=>2,
'map'=>'address2',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458616,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_address_form2',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961922ESOU',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1',
'ordering'=>3,
'map'=>'address3',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458617,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_address_form3',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961922ESOV',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>4,
'map'=>'zipcode',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458618,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_zipcode_form',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1330731950JWCH',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'city',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458619,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_city_form',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961922ESOY',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=20',
'ordering'=>6,
'map'=>'state',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458620,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_state_form',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961922ESOZ',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#address',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1
height=12',
'ordering'=>8,
'map'=>'ctyid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458621,
'core'=>1,
'did'=>'#countries#countries_published_list',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'address_country_form',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961922ESPA',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formvalidation=1
bfloat=right
class=continue',
'ordering'=>1,
'level'=>'0',
'icon'=>'save',
'action'=>'save(pid=pid)(vendid=vendid)',
'mid'=>8251,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'new_address_done',
'faicon'=>'fa-floppy-o',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282449PIPC',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'bfloat=left
class=return',
'ordering'=>2,
'level'=>'0',
'icon'=>'back',
'action'=>'listing(pid=pid)(vendid=vendid)',
'mid'=>8250,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'new_address_back',
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
'ordering'=>4,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8929,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'new_address_help',
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