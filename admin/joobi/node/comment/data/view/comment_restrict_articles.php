<?php defined('JOOBI_SECURE') or die('J....');
class Data_comment_comment_restrict_articles_view extends WDataView{
var $yid=500700;
var $wizard=1;
var $wid='#comment.node';
var $type=2;
var $params='subtitle=1
mtype=image';
var $namekey='comment_restrict_articles';
var $menu=13;
var $level=50;
var $pagination=5;
var $filters=1;
var $sid='#joomla.content';
var $form=1;
var $icon='article';
var $rolid='#manager';
var $alias='Comment Restrict Articles';
var $name='1235461972DIWG';
var $description='';
var $wname='1235461972DIWG';
var $wdescription='1272278977AVBY';
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
'lid'=>8880,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_#',
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
'sid'=>'#joomla.content',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'id',
'lid'=>8881,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_joomla_content_id_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#joomla.content',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'title',
'lid'=>8882,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_joomla_content_title_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAGC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#joomla.content',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=option=com_content&task=edit(cid=id)',
'ordering'=>4,
'map'=>'title',
'lid'=>9056,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_joomla_content_title',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comment_restrict_articles_joomla_content_title_1',
'name'=>'1206732412DAGC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#joomla.content',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>5,
'map'=>'introtext',
'lid'=>8925,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_joomla_content_introtext',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#comment_restrict_articles_joomla_content_title_1',
'name'=>'1254121404KQGG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#role.content',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=enable
align=center',
'ordering'=>6,
'map'=>'comment',
'lid'=>8899,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_role_content_comment',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350840ISOI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#joomla.content',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
align=center',
'ordering'=>7,
'map'=>'created',
'lid'=>8883,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_joomla_content_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1253278128ELPC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#joomla.content',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>8,
'map'=>'id',
'lid'=>8900,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_joomla_content_id',
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
'type'=>11,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1',
'ordering'=>1,
'level'=>50,
'icon'=>'publish',
'action'=>'assign',
'mid'=>5922,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_assign',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350840ISOI',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8538,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'comment_restrict_articles_help',
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
'flid'=>'#comments_articles_orderBy',
'bktbefore'=>'0',
'sid'=>'#role.content',
'map'=>'comment',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'comments_articles_orderBy',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#articles_state_not_com',
'bktbefore'=>'0',
'sid'=>'#joomla.content',
'map'=>'state',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'articles_state_not_com',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}