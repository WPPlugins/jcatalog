<?php defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_mailbox_preferences_view extends WDataView{
var $yid=1864;
var $wizard=1;
var $wid='#mailbox.node';
var $type=61;
var $params='autosave=1
subtitle=1
phpfile=1';
var $namekey='mailbox_preferences';
var $menu=13;
var $form=1;
var $icon='preferences';
var $rolid='#manager';
var $alias='Mailbox Preferences';
var $faicon='fa-cog';
var $name='1448452745BFNN';
var $description='';
var $wname='1206732392OZUQ';
var $wdescription='1241989377TGEX';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.column',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470701,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'mailbox_preferences_column_1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350843FMVJ',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=danger',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470687,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_hard_bounce',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_column_1',
'name'=>'1448452743HLGC',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'c[mailbox.node][harduserdelete]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470689,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailboharduserdelete',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_hard_bounce',
'name'=>'1448452743HLGD',
'description'=>'1449097477KDAY' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'c[mailbox.node][harduserblockreg]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471922,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_harduserblockreg',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_hard_bounce',
'name'=>'1495050587MJGX',
'description'=>'1495050587MJGZ' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'map'=>'c[mailbox.node][harduserblock]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470691,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_harduserblock',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_hard_bounce',
'name'=>'1495050586AFKT',
'description'=>'1495050587MJGY' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'c[mailbox.node][harduserunsubscribe]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470695,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_harduserunsubcribe',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_hard_bounce',
'name'=>'1211974416EMQU',
'description'=>'1449097477KDBA' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'c[mailbox.node][harduserunconfirm]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470716,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_harduserunconfirm',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_hard_bounce',
'name'=>'1449097477KDAX',
'description'=>'1449097478CKME' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'c[mailbox.node][hardusersubscribenew]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470696,
'core'=>1,
'did'=>'#mailbox#mailbox_bounce_list',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_hardusersubscribe',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_hard_bounce',
'name'=>'1448452743HLGE',
'description'=>'1448452744RRQY' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'c[mailbox.node][hardusersubscribe]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471864,
'core'=>1,
'did'=>'#mailbox#mailbox_bounce_list',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_hardusersubscribejnews',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_hard_bounce',
'name'=>'1448452743HLGE',
'description'=>'1448452744RRQY' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=info',
'ordering'=>11,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470697,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_soft_bounce',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_column_1',
'name'=>'1448452743HLGF',
'description'=>'' ),
array(
'type'=>'main.days',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'c[mailbox.node][softattemptperiod]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470698,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_softattemptperiod',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_soft_bounce',
'name'=>'1448463363EQZT',
'description'=>'1448463364KXGL' ),
array(
'type'=>'output.numeric',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=2',
'ordering'=>13,
'map'=>'c[mailbox.node][softattemptactive]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470699,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_softattemptactive',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_soft_bounce',
'name'=>'1448463363EQZU',
'description'=>'1448463364KXGM' ),
array(
'type'=>'output.numeric',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=2',
'ordering'=>14,
'map'=>'c[mailbox.node][softattemptinactive]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470700,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_softattemptinactive',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_soft_bounce',
'name'=>'1448463363EQZV',
'description'=>'1448463364KXGN' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=warning',
'ordering'=>15,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470719,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_spam',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_column_1',
'name'=>'1220362026AJEJ',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'map'=>'c[mailbox.node][spamuserdelete]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470720,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_spamuserdelete',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_spam',
'name'=>'1448452743HLGD',
'description'=>'1449097477KDAY' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'c[mailbox.node][spamuserblock]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470721,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_spamuserblock',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_spam',
'name'=>'1242282446GIMA',
'description'=>'1449097477KDAZ' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'c[mailbox.node][spamuserunsubscribe]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470722,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_spamuserunsubscribe',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_spam',
'name'=>'1211974416EMQU',
'description'=>'1449097477KDBA' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>19,
'map'=>'c[mailbox.node][spamuserunconfirm]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470723,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_spamuserunconfirm',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_spam',
'name'=>'1449097477KDAX',
'description'=>'1449097478CKME' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>20,
'map'=>'c[mailbox.node][spamusersubscribe]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470724,
'core'=>1,
'did'=>'#mailbox#mailbox_bounce_list',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_spamusersubscribe',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_spam',
'name'=>'1448452743HLGE',
'description'=>'1448452744RRQY' ),
array(
'type'=>'output.column',
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
'fid'=>2470702,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'mailbox_preferences_column_2',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350843FMVK',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=success',
'ordering'=>22,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470688,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_old_pref',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_column_2',
'name'=>'1241989377TGDL',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>23,
'map'=>'c[mailbox.node][logreport]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470711,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_logreport',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_old_pref',
'name'=>'1448582283AXFF',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=45',
'ordering'=>25,
'map'=>'c[mailbox.node][identifyemail]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>464843,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_identifyemail',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_old_pref',
'name'=>'1242580112DTJY',
'description'=>'1242580112DTJX' ),
array(
'type'=>'main.seconds',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>26,
'map'=>'c[mailbox.node][opentimeout]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>464833,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_opentimeout',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_old_pref',
'name'=>'1241989377TGEN',
'description'=>'1241989377TGDZ' ),
array(
'type'=>'output.numeric',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>27,
'map'=>'c[mailbox.node][maxemails]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>464838,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_maxemails',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_old_pref',
'name'=>'1409690288JIOV',
'description'=>'1241989377TGED' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=info',
'ordering'=>28,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2470690,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_scheduler',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_column_2',
'name'=>'1206961893RSRQ',
'description'=>'' ),
array(
'type'=>'main.days',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>29,
'map'=>'c[mailbox.node][deletestats]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>464839,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_deletestats',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_scheduler',
'name'=>'1448463363EQZS',
'description'=>'1241989377TGEE' ),
array(
'type'=>'main.days',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>30,
'map'=>'c[mailbox.node][deletemsg]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>464842,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_deletemsg',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_scheduler',
'name'=>'1448452743HLFY',
'description'=>'1241989377TGEF' ),
array(
'type'=>'main.days',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>31,
'map'=>'c[mailbox.node][trashdelmsg]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>466936,
'core'=>1,
'did'=>'0',
'private'=>1,
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'mailbox_preferences_mailbox_node_trashdelmsg',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mailbox_preferences_scheduler',
'name'=>'1256863993QDJH',
'description'=>'1260253911PVFX' )
);

var $menusA=array(
array(
'type'=>6,
'publish'=>1,
'parent'=>'0',
'params'=>'formvalidation=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'save',
'action'=>'applypref',
'mid'=>4979,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mailbox_preferences_applypref',
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
'params'=>'formvalidation=1',
'ordering'=>2,
'level'=>'0',
'icon'=>'done',
'action'=>'savepref',
'mid'=>4978,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mailbox_preferences_savepref',
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
'ordering'=>3,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancelpref',
'mid'=>4977,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mailbox_preferences_cancelpref',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>4980,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mailbox_preferences_divider',
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
'ordering'=>6,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8703,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mailbox_preferences_help',
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
'mid'=>14130,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'43wqtiz72m',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732391QBUR',
'description'=>'' )
);
}