<?php defined('JOOBI_SECURE') or die('J....');
class Data_address_address_edit_form_change_view extends WDataView{
var $yid=501355;
var $wid='#address.node';
var $type=51;
var $params='autosave=1
reqtask=checkout
phpfile=1';
var $namekey='address_edit_form_change';
var $menu=13;
var $frontend=1;
var $sid='#address';
var $form=1;
var $icon='about';
var $rolid='#registered';
var $alias='Edit address in basket Change';
var $useredit=1;
var $name='1206961911NYAR';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'publish',
'level'=>'0',
'initial'=>1,
'hidden'=>1,
'fid'=>2459838,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_publish',
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
'sid'=>'#address.members',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'uid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2459839,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_uid',
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
'sid'=>'#address.members',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'publish',
'level'=>'0',
'initial'=>1,
'hidden'=>1,
'fid'=>2459840,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_publish2',
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
'type'=>'output.customized',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=alias
num=1',
'ordering'=>6,
'map'=>'alias',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459841,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_alias',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811583DBTA',
'description'=>'1342235343DHUB' ),
array(
'type'=>'output.yesno',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'premium',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>2459842,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_primary',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1342235342FNDR',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=getname',
'ordering'=>9,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459843,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DABZ',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'address1',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459844,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_address',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961911NYAR',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1',
'ordering'=>11,
'map'=>'address2',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459845,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_address2',
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
'ordering'=>12,
'map'=>'address3',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459846,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_address3',
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
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>13,
'map'=>'city',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459847,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_city',
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
'ordering'=>14,
'map'=>'state',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459848,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_state',
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
'params'=>'',
'ordering'=>15,
'map'=>'stateid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459849,
'core'=>1,
'did'=>'#countries#countries_states_published_list',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_stateid',
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
'type'=>'output.text',
'sid'=>'#address',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>16,
'map'=>'zipcode',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459850,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_zipcode',
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
'type'=>'output.select',
'sid'=>'#address',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>17,
'map'=>'ctyid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459851,
'core'=>1,
'did'=>'#countries#countries_published_list',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_ctyid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961922ESPA',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=20',
'ordering'=>18,
'map'=>'phone',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459852,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_phone',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282412EESC',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'#address',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=default
num=1',
'ordering'=>19,
'map'=>'p[deliveryinstruction]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459853,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'address_edit_form_change_instruction',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1251253394FBHH',
'description'=>'1342235344MQRT' )
);

var $menusA=array(
array(
'type'=>4,
'publish'=>1,
'parent'=>'0',
'params'=>'themepref=catalog.buttonBasketCheckoutNext
formvalidation=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'save',
'action'=>'save',
'mid'=>9167,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'235nl5z72h',
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
'params'=>'themepref=catalog.buttonBasketCheckoutPrevious',
'ordering'=>2,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>9168,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'235nl5z72i',
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