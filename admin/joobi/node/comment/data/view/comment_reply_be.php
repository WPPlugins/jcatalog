<?php defined('JOOBI_SECURE') or die('J....');
class Data_comment_comment_reply_be_view extends WDataView{
var $yid=500854;
var $wid='#comment.node';
var $type=51;
var $params='hdata=tkid
subtitle=1
autosave=1';
var $namekey='comment_reply_be';
var $menu=25;
var $level=50;
var $sid='#comment.reply';
var $form=1;
var $icon='comment';
var $rolid='#allusers';
var $alias='Reply to a Comment (backend)';
var $name='1219769904NDHD';
var $description='1470801914KFIZ';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#comment.reply',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'tkid',
'level'=>50,
'initial'=>'',
'hidden'=>1,
'fid'=>467048,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comment_reply_be_comment_reply_tkid_1',
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
'type'=>'output.layout',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
nestedview=replies_fe_comment',
'ordering'=>2,
'map'=>'',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>467047,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comment_reply_be_previous_replies',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964391FHVV',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>467051,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'comment_reply_be_add_/_edit_reply',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1262857562MQDL',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'#comment.replytrans',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=quill.full
editornode=1',
'ordering'=>5,
'map'=>'description',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>467046,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comment_reply_be_comment_replytrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comment_reply_be_add_/_edit_reply',
'name'=>'1206961882TDGX',
'description'=>'1263201275SILO' ),
array(
'type'=>'main.submit',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1',
'ordering'=>6,
'map'=>'x[save]',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>467049,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comment_reply_be_save',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comment_reply_be_add_/_edit_reply',
'name'=>'1206732399EINB',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#comment.reply',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'tkid',
'level'=>50,
'initial'=>'',
'hidden'=>1,
'fid'=>467052,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'comment_reply_be_comment_reply_tkid',
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
'type'=>9,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=back',
'ordering'=>10,
'level'=>50,
'icon'=>'back',
'action'=>'back',
'mid'=>6306,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'comment_reply_be_back',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961882TDHA',
'description'=>'' )
);
}