<?php defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_emanader_handled_view extends WDataView{
var $yid=1862;
var $wizard=1;
var $wid='#mailbox.node';
var $type=2;
var $params='nested=1';
var $namekey='emanader_handled';
var $menu=13;
var $pagination=1;
var $sid='#mailbox.handled';
var $form=1;
var $icon='report';
var $rolid='#manager';
var $alias='Bounce Emails Report';
var $name='1307526847SFJZ';
var $description='';
var $wname='1241989381TAOJ';
var $wdescription='1241989381TAOH';
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
'lid'=>7069,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'emanader_handled_#',
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
'type'=>'output.text',
'sid'=>'#mailbox.handled',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'email',
'lid'=>7067,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'emanader_handled_emanager_handled_email',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRU',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.types',
'sid'=>'#mailbox.handled',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=nametype
align=center',
'ordering'=>3,
'map'=>'type',
'lid'=>7068,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'emanader_handled_emanager_handled_type',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#mailbox.handled',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
align=center',
'ordering'=>4,
'map'=>'created',
'lid'=>7070,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'emanader_handled_emanager_handled_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1241989381TANW',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#mailbox.handled',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1
formatdate=5
align=center',
'ordering'=>5,
'map'=>'modified',
'lid'=>7071,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'emanader_handled_emanager_handled_modified',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1241989381TANX',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#mailbox.handled',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>6,
'map'=>'total',
'lid'=>7072,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'emanader_handled_emanager_handled_total',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961912MJPF',
'description'=>'',
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'confirm=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'delete',
'action'=>'purge',
'mid'=>4982,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'emanader_handled_purge',
'faicon'=>'fa-trash-o',
'color'=>'danger',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1241989381TANY',
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
'mid'=>4981,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'emanader_handled_divider',
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
'ordering'=>4,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8702,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'emanader_handled_help',
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