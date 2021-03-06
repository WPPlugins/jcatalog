<?php defined('JOOBI_SECURE') or die('J....');
class Data_catalog_catalog_page_category_view extends WDataView{
var $yid=501116;
var $wid='#catalog.node';
var $type=151;
var $params='tydiv=1
phpfile=1
htmlfile=1
cssfile=1
viewarea=["bottom","description","image","lbottom","name","products","rss","subcat","subcategory"]';
var $namekey='catalog_page_category';
var $frontend=1;
var $subtype=17;
var $sid='#item.category';
var $form=1;
var $icon='default';
var $rolid='#allusers';
var $alias='Category Page for Catalog';
var $useredit=1;
var $name='1206732411EGQO';
var $description='1470801991ONZT';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.customized',
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=resizeimage
notitle=1
spantit=1
dftimg=categoryx
imgfull=1
num=1',
'ordering'=>1,
'map'=>'filid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456147,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'image',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_filid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961936HCWM',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.categorytrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spantit=1',
'ordering'=>2,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456148,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'name',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_categorytrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'' ),
array(
'type'=>'output.textonly',
'sid'=>'#item.categorytrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spantit=1
rtag=1
processcontent=1',
'ordering'=>3,
'map'=>'description',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456150,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'description',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_categorytrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVG',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=rsscat
notitle=1
spantit=1
align=right',
'ordering'=>6,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456160,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'rss',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_rss',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1263009962GUBB',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'x[catid]',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2456151,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'bottom',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_catid',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'hits',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2459591,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'bottom',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_hits',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'params',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2457299,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'bottom',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_params',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'catid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2456152,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_catid',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'vendid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2459607,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_vendid',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'uid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2456145,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'description',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_uid',
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
'type'=>'main.seo',
'sid'=>'#item.categorytrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'seotitle',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456157,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'lbottom',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_categorytrans_seotitle',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282445BFOC',
'description'=>'' ),
array(
'type'=>'main.seo',
'sid'=>'#item.categorytrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>19,
'map'=>'seokeywords',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456158,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'lbottom',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_categorytrans_seokeywords',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282445BFOC',
'description'=>'' ),
array(
'type'=>'main.seo',
'sid'=>'#item.categorytrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>20,
'map'=>'seodescription',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456159,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'lbottom',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_categorytrans_seodescription',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282445BFOC',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>22,
'map'=>'layout',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2456240,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_layout',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>23,
'map'=>'numpidsub',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2469893,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_numpidsub',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>24,
'map'=>'numpid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2456937,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_numpid',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>25,
'map'=>'prodtypid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2456443,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_category_prodtypid',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>26,
'map'=>'author',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2459546,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_type_author',
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
'sid'=>'#item.category',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>27,
'map'=>'uid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2456444,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_page_category_item_cateogry_uid',
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
}