<?php defined('JOOBI_SECURE') or die('J....');
class Data_japps_japps_main_view extends WDataView{
var $yid=502179;
var $wid='#japps.application';
var $type=204;
var $namekey='japps_main';
var $menu=13;
var $subtype=110;
var $form=1;
var $icon='default';
var $rolid='#manager';
var $alias='jApps\'s Horizontal menu';
var $useredit=1;
var $name='1426556661QQQO';
var $description='1470784957GYIG';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'extension',
'action'=>'apps',
'mid'=>13550,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_apps',
'faicon'=>'fa-mobile',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1267607212GWJP',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>'0',
'icon'=>'members',
'action'=>'users',
'mid'=>13552,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_users',
'faicon'=>'fa-users',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1229653442FEQZ',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>4,
'level'=>'0',
'icon'=>'role',
'action'=>'role',
'mid'=>13553,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_roles',
'faicon'=>'fa-trophy',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_users',
'name'=>'1206961854HENX',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>5,
'level'=>'0',
'icon'=>'view',
'action'=>'theme',
'mid'=>13554,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_design',
'faicon'=>'fa-desktop',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1347896707AYYK',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'level'=>'0',
'icon'=>'view',
'action'=>'theme',
'mid'=>13555,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_theme',
'faicon'=>'fa-desktop',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_design',
'name'=>'1211811516QTEF',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>7,
'level'=>'0',
'icon'=>'mailing',
'action'=>'email',
'mid'=>13556,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_email',
'faicon'=>'fa-envelope',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_design',
'name'=>'1228709730AUQK',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=mailing.node',
'ordering'=>8,
'level'=>'0',
'icon'=>'mailing',
'action'=>'mailing-queue-sent',
'mid'=>14554,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_email_sent',
'faicon'=>'fa-exchange',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_email',
'name'=>'1477606471LOJR',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'level'=>'0',
'icon'=>'mailing',
'action'=>'email-mailer',
'mid'=>13557,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_email_mailer',
'faicon'=>'fa-puzzle-piece',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_email',
'name'=>'1358226529IGTD',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=design.node',
'ordering'=>11,
'level'=>'0',
'icon'=>'model',
'action'=>'design-model',
'mid'=>13578,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'japps_main_models',
'faicon'=>'fa-table',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_design',
'name'=>'1356733772QJIA',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=design.node',
'ordering'=>13,
'level'=>'0',
'icon'=>'model',
'action'=>'design-export',
'mid'=>13814,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'japps_main_models_import_export',
'faicon'=>'fa-retweet',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_design',
'name'=>'1442294110KNEU',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'level'=>'0',
'icon'=>'plugin',
'action'=>'main-widgets',
'mid'=>13564,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_main-widgets',
'faicon'=>'fa-puzzle-piece',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_design',
'name'=>'1206732392OZUO',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>15,
'level'=>'0',
'icon'=>'compare',
'action'=>'main-view',
'mid'=>13558,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_views',
'faicon'=>'fa-list-alt',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_design',
'name'=>'1206961854HENY',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'level'=>'0',
'icon'=>'model',
'action'=>'main-view-forms&type=109',
'mid'=>14135,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_views_pages',
'faicon'=>'fa-list-alt',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_views',
'name'=>'1242282435FMHI',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'level'=>'0',
'icon'=>'model',
'action'=>'main-view-listings',
'mid'=>13559,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_views_listings',
'faicon'=>'fa-list-alt',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_views',
'name'=>'1206961868QEYE',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'level'=>'0',
'icon'=>'column',
'action'=>'main-view-forms&type=51,61,98',
'mid'=>13560,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_views_forms',
'faicon'=>'fa-list-alt',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_views',
'name'=>'1206961868QEYF',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>19,
'level'=>'0',
'icon'=>'choice',
'action'=>'main-view-menus',
'mid'=>13561,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_views_menus',
'faicon'=>'fa-list-alt',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_views',
'name'=>'1206961868QEYD',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>20,
'level'=>'0',
'icon'=>'choice',
'action'=>'design-picklist',
'mid'=>13562,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'japps_main_picklist',
'faicon'=>'fa-list-ol',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_design',
'name'=>'1209559180DARX',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=space.node',
'ordering'=>21,
'level'=>'0',
'icon'=>'',
'action'=>'space',
'mid'=>13563,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_space',
'faicon'=>'fa-codepen',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_design',
'name'=>'1302502965PLCD',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>22,
'level'=>'0',
'icon'=>'plugin',
'action'=>'design-tour',
'mid'=>14131,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'japps_main_design-tour',
'faicon'=>'fa-magic',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_design',
'name'=>'1447977858ELOT',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>24,
'level'=>'0',
'icon'=>'tools',
'action'=>'translation',
'mid'=>13566,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_tools',
'faicon'=>'fa-wrench',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811516QTED',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=translation.node',
'ordering'=>25,
'level'=>'0',
'icon'=>'lang',
'action'=>'translation',
'mid'=>13567,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_language',
'faicon'=>'fa-flag',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_tools',
'name'=>'1206732392OZUS',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>28,
'level'=>'0',
'icon'=>'lang',
'action'=>'apps-trans',
'mid'=>13568,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_apps-trans',
'faicon'=>'fa-language',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_language',
'name'=>'1220793710GXYB',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>29,
'level'=>'0',
'icon'=>'send',
'action'=>'scheduler',
'mid'=>13569,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_scheduler',
'faicon'=>'fa-calendar',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_tools',
'name'=>'1298888291HSWK',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>31,
'level'=>'0',
'icon'=>'listing',
'action'=>'main-credentials',
'mid'=>13570,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'japps_main_credentials',
'faicon'=>'fa-key',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_tools',
'name'=>'1340666912COKC',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>32,
'level'=>'0',
'icon'=>'listing',
'action'=>'main-url',
'mid'=>14189,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_main-url',
'faicon'=>'fa-link',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_tools',
'name'=>'1451555491THGX',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>33,
'level'=>'0',
'icon'=>'listing',
'action'=>'apps-logs',
'mid'=>13571,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_apps-logs',
'faicon'=>'fa-code-fork',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_tools',
'name'=>'1253200893CXZC',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>34,
'level'=>'0',
'icon'=>'listing',
'action'=>'main-cache',
'mid'=>13572,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_main-cache',
'faicon'=>'fa-retweet',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_tools',
'name'=>'1242178310INQS',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>36,
'level'=>'0',
'icon'=>'wizard',
'action'=>'apps-query',
'mid'=>13573,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'japps_main_apps-query',
'faicon'=>'fa-magic',
'color'=>'warning',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_tools',
'name'=>'1229651877RBLW',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>37,
'level'=>'0',
'icon'=>'wizard',
'action'=>'install-requirements',
'mid'=>13718,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'japps_main_install-requirements',
'faicon'=>'fa-exclamation-triangle',
'color'=>'warning',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_tools',
'name'=>'1206961878BMAG',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=joomla.node',
'ordering'=>38,
'level'=>'0',
'icon'=>'wizard',
'action'=>'joomla-menu',
'mid'=>14546,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#sadmin',
'namekey'=>'japps_main_joomla_menu',
'faicon'=>'fa-link',
'color'=>'warning',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_tools',
'name'=>'1477442770MIKD',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>39,
'level'=>'0',
'icon'=>'preferences',
'action'=>'apps&task=preferences',
'mid'=>13574,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_preferences',
'faicon'=>'fa-cogs',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUQ',
'description'=>'' ),
array(
'type'=>55,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>40,
'level'=>'0',
'icon'=>'help',
'action'=>'https://joobi.co/index.php?option=com_jlinks&controller=redirect&link=support-portal',
'mid'=>13575,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_contact_us',
'faicon'=>'fa-question',
'color'=>'warning',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1213183509OYOB',
'description'=>'' ),
array(
'type'=>55,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>41,
'level'=>'0',
'icon'=>'profile',
'action'=>'https://joobi.co/index.php?option=com_jlinks&controller=redirect&link=live-chat',
'mid'=>13576,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'japps_main_live_chat',
'faicon'=>'fa-user',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#japps_main_contact_us',
'name'=>'1249442262PZQK',
'description'=>'' )
);
}