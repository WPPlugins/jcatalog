<?php defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_mailbox_archive_view extends WDataView{
var $yid=2074;
var $wizard=1;
var $wid='#mailbox.node';
var $type=2;
var $params='nested=1
graphtype=';
var $namekey='mailbox_archive';
var $menu=13;
var $dropdown=3;
var $pagination=1;
var $filters=1;
var $sid='#mailbox.messages';
var $form=1;
var $icon='news';
var $rolid='#manager';
var $alias='archive';
var $name='1206732375LZCH';
var $description='1470801882CXGV';
var $wname='1206732375LZCH';
var $wdescription='1241989377TGEW';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'lid'=>8563,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'archive_#',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732392OZVA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.checkbox',
'sid'=>'#mailbox.messages',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'msgid',
'lid'=>8564,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'archive_mailbox_messages_msgid_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732392OZVA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#mailbox',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'name',
'lid'=>8565,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'archive_mailbox_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1241989377TGDL',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#mailbox.messages',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'truncate=60
lien=controller=mailbox-messages&task=show(eid=msgid)
popuplink=1',
'ordering'=>4,
'map'=>'subject',
'lid'=>8566,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'archive_mailbox_messages_subject',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OXCG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#mailbox.messages',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'truncate=400
ovly=1',
'ordering'=>5,
'map'=>'body',
'lid'=>8567,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'archive_mailbox_messages_body',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#archive_mailbox_messages_subject',
'name'=>'1241989377TGER',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#mailbox.messages',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'map'=>'sender',
'lid'=>8568,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'archive_mailbox_messages_sender',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811588SCXI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#mailbox.messages',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
align=center',
'ordering'=>7,
'map'=>'created',
'lid'=>8569,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'archive_mailbox_messages_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961850KLRI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#mailbox.messages',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1',
'ordering'=>9,
'map'=>'msgid',
'lid'=>8571,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'archive_mailbox_messages_msgid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWXG',
'description'=>'',
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>7,
'publish'=>1,
'parent'=>'0',
'params'=>'confirm=1
lslct=1',
'ordering'=>8,
'level'=>'0',
'icon'=>'delete',
'action'=>'delete',
'mid'=>5765,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'archive_delete',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKL',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>5767,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'archive_divider',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8762,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'archive_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' ),
array(
'type'=>101,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>255,
'level'=>'0',
'icon'=>'wizard',
'action'=>'',
'mid'=>14467,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'4eu72mz72m',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732391QBUR',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#mailbox.archive',
'bktbefore'=>'0',
'sid'=>'#mailbox.messages',
'map'=>'box',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>20,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'mailbox.archive',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#mailbox#mailbox_emails',
'ordering'=>1 )
);
}