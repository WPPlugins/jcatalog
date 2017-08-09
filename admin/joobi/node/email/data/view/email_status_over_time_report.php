<?php defined('JOOBI_SECURE') or die('J....');
class Data_email_email_status_over_time_report_view extends WDataView{
var $yid=501757;
var $wid='#email.node';
var $type=2;
var $params='hdata=mgid,uid
report=1
axisstyle=combined
graphtype=Line';
var $namekey='email_status_over_time_report';
var $menu=13;
var $dropdown=3;
var $filters=1;
var $sid='#email.statisticsuser';
var $form=1;
var $icon='about';
var $rolid='#mailmanager';
var $alias='Mail Status Report';
var $faicon='fa-pie-chart';
var $name='1492691006MHVC';
var $description='1492691007TCIJ';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#email.type',
'search'=>'0',
'publish'=>'0',
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'mgtypeid',
'lid'=>16954,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_status_over_time_report_mailing_type_mgtypeid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'type',
'lid'=>16953,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_status_over_time_report_email_type',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email.statisticsuser',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=5
chartaxis=2d',
'ordering'=>3,
'map'=>'sent',
'lid'=>16939,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_sent_over_time_report_statisticsuser_sent',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1392211781RCGF',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'mgid',
'lid'=>16952,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_status_over_time_report_mailing_mgid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1219844525HQBI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email.statisticsuser',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=19
chartaxis=1d',
'ordering'=>5,
'map'=>'created',
'lid'=>16941,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_sent_over_time_report_statisticsuser_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1392120596PUOP',
'description'=>'1392120596PUOQ',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email.statisticsuser',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=5
chartaxis=2d',
'ordering'=>6,
'map'=>'failed',
'lid'=>16940,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_sent_over_time_report_statisticsuser_failed',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1392211781RCGJ',
'description'=>'',
'textlink'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#31ff0oz36c',
'bktbefore'=>'0',
'sid'=>'#email.statisticsuser',
'map'=>'uid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'uid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>30,
'params'=>'',
'namekey'=>'31ff0oz36c',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#31fbtlz36c',
'bktbefore'=>'0',
'sid'=>'#email',
'map'=>'mgid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'mgid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>30,
'params'=>'',
'namekey'=>'31fbtlz36c',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#email#email_mailer_options_all',
'ordering'=>'0' )
);
}