<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_page_item_view extends WDataView{
var $yid=501280;
var $wid='#item.node';
var $type=151;
var $params='hdata=eid,catid
bctrail=1
head=1
nolist=1
phpfile=1
htmlfile=1
viewarea=["aboveReview","itemcommentlist","itemcommenttotal","itemimage","itemintroduction","itemname","itempreview","itemrating","itemvendor","itemvendorrating","map","middleCenter","proddetails","prodproperty"]';
var $namekey='item_page_item';
var $frontend=1;
var $filters=1;
var $sid='#item';
var $form=1;
var $icon='item';
var $rolid='#allusers';
var $alias='Item page';
var $fields=1;
var $useredit=1;
var $name='1206732372QTKR';
var $description='1470801968BRUL';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.customized',
'sid'=>'#item.images',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=productgallery
imgfull=1',
'ordering'=>2,
'map'=>'filid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458554,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'itemimage',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_images_filid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350960NBMA',
'description'=>'' ),
array(
'type'=>'output.media',
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'fileicon=1
advmedia=1
num=1',
'ordering'=>3,
'map'=>'previewid',
'level'=>25,
'initial'=>'',
'hidden'=>'0',
'fid'=>2458603,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'itempreview',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_previewid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811587EZNL',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spanval=1
spantit=1
onlyread=1',
'ordering'=>4,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458555,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'itemname',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_itemtrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'1206961996STBD' ),
array(
'type'=>'output.customized',
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=rating
notitle=1
spantit=1',
'ordering'=>5,
'map'=>'comment',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458556,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'itemrating',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_comment',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1246243851IGLH',
'description'=>'1298350961NSQL' ),
array(
'type'=>'output.customized',
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=catalogvendorratingfe
notitle=1
spantit=1
num=1',
'ordering'=>6,
'map'=>'vendid',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>2458604,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'itemvendorrating',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_vendor_rating',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1448582915JYDS',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=productvendor
notitle=1
spantit=1
num=1',
'ordering'=>7,
'map'=>'vendid',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>2458557,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'itemvendor',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_vendid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWZO',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
rtag=1
processcontent=1
classes=catalogProductIntro',
'ordering'=>8,
'map'=>'introduction',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458558,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'itemintroduction',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_itemtrans_introduction',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1215603987EKZQ',
'description'=>'' ),
array(
'type'=>'main.widgetbox',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461165,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'middleCenter',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_widgetbox_fields',
'fdid'=>'0',
'parentdft'=>1,
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1355852601LJIH',
'description'=>'' ),
array(
'type'=>'main.widgetbox',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spantit=1
num=1
classes=below-description',
'ordering'=>10,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461166,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'middleCenter',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_widgetbox_description',
'fdid'=>'0',
'parentdft'=>3,
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVG',
'description'=>'' ),
array(
'type'=>'main.transarea',
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spanval=1
spantit=1
rtag=1
processcontent=1
num=1
classes=catalogProductDescription',
'ordering'=>11,
'map'=>'description',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458562,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'middleCenter',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_itemtrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#item_page_item_item_widgetbox_description',
'name'=>'1206732392OZVG',
'description'=>'' ),
array(
'type'=>'main.widgetbox',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spantit=1
num=1
classes=below-description',
'ordering'=>12,
'map'=>'',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>2462889,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'map',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_map',
'fdid'=>'0',
'parentdft'=>4,
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732424BJFR',
'description'=>'' ),
array(
'type'=>'main.map',
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spanval=1
spantit=1
rtag=1
processcontent=1
num=1
classes=catalogProductDescription',
'ordering'=>13,
'map'=>'location',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>2462890,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'map',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_location',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'parentnamekey'=>'#item_page_item_map',
'name'=>'1206732424BJFR',
'description'=>'' ),
array(
'type'=>'output.div',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461167,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'aboveReview',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_above_review',
'fdid'=>'0',
'parentdft'=>2,
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1357697869SQNB',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'latitude',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2462892,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_latitude',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'map'=>'longitude',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2462891,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_longitude',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'relnum',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458564,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_relnum',
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
'type'=>'output.customized',
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=nestedcomment
notitle=1
spantit=1
nestedview=comment_fe
classes=above-review
selectdid=42
selectype=3',
'ordering'=>18,
'map'=>'nbreviews',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458566,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'itemcommentlist',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_nbreviews',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350961NSQK',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=commenttotal
notitle=1
spantit=1
num=1
classes=above-review
selectdid=42
selectype=3',
'ordering'=>19,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458567,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'itemcommenttotal',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_comment_total',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350913JQEU',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>20,
'map'=>'x[catid]',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458568,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'prodproperty',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_catid',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>21,
'map'=>'stock',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458569,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'prodproperty',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_stock',
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
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>22,
'map'=>'promo',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2469373,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'prodproperty',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_promo',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>23,
'map'=>'prodtypid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458570,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'prodproperty',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_prodtypid',
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
'sid'=>'#item.type',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>24,
'map'=>'type',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458571,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'prodproperty',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_product_type_type',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>25,
'map'=>'availablestart',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458572,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'prodproperty',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_availablestart',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>26,
'map'=>'pid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458573,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'prodproperty',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_pid',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>27,
'map'=>'namekey',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458574,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'prodproperty',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_namekey',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>28,
'map'=>'rolid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458575,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'prodproperty',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_rolid',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>29,
'map'=>'featured',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458766,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_featured',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>30,
'map'=>'modified',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2460175,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_modified',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>31,
'map'=>'created',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458581,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_created',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>32,
'map'=>'p[cssclass]',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458583,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_cssclass',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>33,
'map'=>'uid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458584,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_uid_1',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>34,
'map'=>'author',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2459603,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_author',
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
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>35,
'map'=>'seotitle',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458586,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'proddetails',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_itemtrans_seotitle',
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
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>36,
'map'=>'seodescription',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458587,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'proddetails',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_itemtrans_seodescription',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>37,
'map'=>'uid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458588,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_uid',
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
'sid'=>'#itemtrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>38,
'map'=>'seokeywords',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2458589,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'proddetails',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_itemtrans_seokeywords',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>39,
'map'=>'availableend',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458591,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_availableend',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>40,
'map'=>'publishend',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458592,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_publishend',
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
'sid'=>'#item.downloads',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>41,
'map'=>'filid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458593,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_filid',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>42,
'map'=>'adid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458636,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_adid',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>43,
'map'=>'electronic',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458596,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_electronic',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>44,
'map'=>'publishstart',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458597,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_publishstart',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>45,
'map'=>'score',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458598,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_score',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>46,
'map'=>'votes',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458599,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_votes',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>47,
'map'=>'hits',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458600,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_hits',
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
'sid'=>'#item',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>48,
'map'=>'params',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458606,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_item_params',
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
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>49,
'map'=>'score',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2459461,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_vendor_score',
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
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>50,
'map'=>'votes',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2459462,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_vendor_votes',
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
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>51,
'map'=>'nbreviews',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2458601,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'item_page_item_vendor_nbreviews',
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

var $filtersA=array(
array(
'flid'=>'#2jy3hjz72',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'pid',
'type'=>9,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'2jy3hjz72',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}