<?php defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_mailbox_mailboxes_report_view extends WDataView{
var $yid=500851;
var $wizard=1;
var $wid='#mailbox.node';
var $type=2;
var $params='hdata=jdoctype
report=1
axisstyle=combined
graphtype=';
var $namekey='mailbox_mailboxes_report';
var $menu=13;
var $level=25;
var $pagination=1;
var $filters=1;
var $sid='#mailbox';
var $form=1;
var $icon='report';
var $rolid='#admin';
var $alias='Mailboxes Report';
var $faicon='fa-pie-chart';
var $name='1263527489DDRV';
var $description='';
var $wname='1253693139FSTT';
var $wdescription='1275727304KGTA';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#mailbox',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=19
align=center',
'ordering'=>1,
'map'=>'name',
'lid'=>10191,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailboxes_report_mailbox_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1263527488PFLR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#mailbox.messages',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=2
coltotal=1
align=center
style=font-weight:bold;',
'ordering'=>2,
'map'=>'inbid',
'lid'=>10192,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailboxes_report_mailbox_messages_inbid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1263527488PFLS',
'description'=>'',
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8814,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'mailboxes_report_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#mailbox_name_groupby',
'bktbefore'=>'0',
'sid'=>'#mailbox',
'map'=>'name',
'type'=>9,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>25,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'mailbox_name_groupby',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#mailbox_created_start',
'bktbefore'=>'0',
'sid'=>'#mailbox.messages',
'map'=>'created',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'start',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>25,
'publish'=>1,
'condopr'=>2,
'typea'=>1,
'typeb'=>30,
'params'=>'',
'namekey'=>'mailbox_created_start',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#mailbox_created_end',
'bktbefore'=>'0',
'sid'=>'#mailbox.messages',
'map'=>'created',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'end',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>25,
'publish'=>1,
'condopr'=>5,
'typea'=>1,
'typeb'=>30,
'params'=>'',
'namekey'=>'mailbox_created_end',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}