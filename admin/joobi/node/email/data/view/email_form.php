<?php defined('JOOBI_SECURE') or die('J....');
class Data_email_email_form_view extends WDataView{
var $yid=968;
var $wid='#email.node';
var $type=51;
var $params='autosave=1
phpfile=1';
var $namekey='email_form';
var $menu=13;
var $pagination=1;
var $sid='#email';
var $form=1;
var $icon='mailing';
var $rolid='#manager';
var $alias='Email from';
var $name='1206732411EGRU';
var $description='1494875139FEPX';
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
'fid'=>2471126,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_email',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRU',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=success',
'ordering'=>3,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458325,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_email_panel',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_email',
'name'=>'1206732411EGRU',
'description'=>'' ),
array(
'type'=>'main.trans',
'sid'=>'#emailtrans',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'maxlgt=255
width=70',
'ordering'=>4,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>3510,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_panel',
'name'=>'1206732400OXCG',
'description'=>'1230529131MQQK' ),
array(
'type'=>'output.text',
'sid'=>'#email',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'onlynew=1',
'ordering'=>5,
'map'=>'namekey',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465176,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mail_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_panel',
'name'=>'1398436917DTKC',
'description'=>'' ),
array(
'type'=>'main.transarea',
'sid'=>'#emailtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=user
cols=100
rows=20
width=800px
height=600px',
'ordering'=>6,
'map'=>'chtml',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>3508,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_chtml',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_panel',
'name'=>'1211811588SCXM',
'description'=>'1230529131MQQI' ),
array(
'type'=>'output.customized',
'sid'=>'#email',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=yesnouser
num=1',
'ordering'=>7,
'map'=>'html',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>3504,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mail_html',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_panel',
'name'=>'1206732411EGSC',
'description'=>'1231383375IBJY' ),
array(
'type'=>'main.transarea',
'sid'=>'#emailtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=default
cols=100
rows=20
width=600px
height=300px',
'ordering'=>8,
'map'=>'ctext',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>3509,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_ctext',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_panel',
'name'=>'1211811588SCXP',
'description'=>'1391084842GKUG' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=mailing.node
color=info',
'ordering'=>9,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471756,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailer',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_email',
'name'=>'1206732441PCHA',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#email',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=mailing.node
num=1',
'ordering'=>10,
'map'=>'p[mailerid]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471757,
'core'=>1,
'did'=>'#mailing#mailing_type_mailerid',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#mailmanager',
'namekey'=>'mail_form_mailerid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_mailer',
'name'=>'1206732441PCHA',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=danger',
'ordering'=>11,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458320,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_sender',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_email',
'name'=>'1211811588SCXI',
'description'=>'' ),
array(
'type'=>'main.trans',
'sid'=>'#emailtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'sname',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458322,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_sname',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_sender',
'name'=>'1206732400OWZZ',
'description'=>'1213107440FIBE' ),
array(
'type'=>'main.trans',
'sid'=>'#emailtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>13,
'map'=>'smail',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458321,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_smail',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_sender',
'name'=>'1211811588SCXS',
'description'=>'1230529131MQQL' ),
array(
'type'=>'main.trans',
'sid'=>'#emailtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'rname',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458324,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_rname',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_sender',
'name'=>'1206732400OXAD',
'description'=>'1213107440FIBG' ),
array(
'type'=>'main.trans',
'sid'=>'#emailtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'rmail',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458323,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_rmail',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_sender',
'name'=>'1211811588SCXV',
'description'=>'1230529131MQQM' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469181,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_email_notification',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1215507793BYPC',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#email',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'notify',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>2469185,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mail_notify',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_notification',
'name'=>'1215507793BYPC',
'description'=>'1413480000AAEA' ),
array(
'type'=>'output.select',
'sid'=>'#email',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'channel',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471128,
'core'=>1,
'did'=>'#main#main_channel',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'email_form_main_credential_channel',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_notification',
'name'=>'1458927076GZGS',
'description'=>'1458927077STJK' ),
array(
'type'=>'main.trans',
'sid'=>'#emailtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'maxlgt=255
width=70',
'ordering'=>19,
'map'=>'title',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469182,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_title',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_notification',
'name'=>'1206732412DAGC',
'description'=>'1230529131MQQK' ),
array(
'type'=>'main.transarea',
'sid'=>'#emailtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'cols=80
maxlgt=255
width=500px',
'ordering'=>20,
'map'=>'subtitle',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469183,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_subtitle',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_notification',
'name'=>'1206961882TDGU',
'description'=>'' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>21,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469184,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_email_sms_contain',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1391084842GKUD',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#email',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>22,
'map'=>'sms',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>2465532,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mail_sms',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_sms_contain',
'name'=>'1391569912TIPC',
'description'=>'1393594376MHGY' ),
array(
'type'=>'main.transarea',
'sid'=>'#emailtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=default
cols=70
rows=5
maxlgt=160
width=400px
height=50px',
'ordering'=>23,
'map'=>'smsmessage',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465273,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mailtrans_smsmessage',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_form_email_sms_contain',
'name'=>'1391084842GKUE',
'description'=>'1230529131MQQJ' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>24,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471127,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_tags',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961902CIFJ',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#email',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=tag
onlyread=1',
'ordering'=>25,
'map'=>'tags',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463953,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'mail_form_mail_tags',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_tags',
'name'=>'1206961902CIFJ',
'description'=>'1230529131MQQO' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'preview',
'action'=>'savepreview',
'mid'=>1251,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_form_savepreview',
'faicon'=>'fa-eye',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811587EZNL',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>2119,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_form_divider',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>6,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>'0',
'icon'=>'save',
'action'=>'apply',
'mid'=>1249,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_form_apply',
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
'params'=>'',
'ordering'=>4,
'level'=>'0',
'icon'=>'done',
'action'=>'save',
'mid'=>1248,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_form_save',
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
'ordering'=>5,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>1250,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_form_cancel',
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